<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use PDF;
use app\User;
use App\Report;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function new(){
        if(Auth::user()->role != 'advisor')
            return redirect('/');

        return view('advisor.reports_new')->with('tokens', User::where('code', Auth::user()->firm_code)->get()->first()->tokens_available);
    }

    public function create(Request $request){
        if(Auth::user()->role != 'advisor')
            return redirect('/');

        $firm = User::where('code', Auth::user()->firm_code)->get()->first();

        $validator = $this->validator($request->all());
        if($validator->fails())
            return back()->withErrors($validator)->with('tokens', $firm->tokens_available);

        if($firm->tokens_available < 1)
            return view('advisor.reports_new')->with('tokens', $firm->tokens_available);

        $firm->tokens_available = $firm->tokens_available - 1;
        $firm->save();

        $code = $this->create_report_code();

        $report = new Report;
        $report->code = $code;
        $report->advisor = Auth::id();
        $report->first_name = $request->first_name;
        $report->last_name = $request->last_name;
        $report->email = $request->email;
        $report->save();

        $this->sendClientEmail(Auth::user()->name, $code, $request->email, $request->first_name . ' ' . $request->last_name);

        return back()->withErrors(['success'=>'New client added successfully. An email has been sent to the client with the link to the questioner.'])->with('tokens', $firm->tokens_available);
    }

    public function view(){
        switch(Auth::user()->role){
            case "admin":
                return redirect("/home");
            case "advisor":
                $reports = Report::where('advisor',Auth::id())->get()->reverse();
                foreach($reports as $report)
                    $report->score = $this->getScore($report->response);
                return view('advisor.reports_view')->with(['reports'=>$reports]);
            case "firm":
                $advisors = User::where('firm_code', Auth::user()->code)->get();
                $reports = collect();
                foreach($advisors as $advisor){
                    $temps = Report::where('advisor', $advisor->id)->get();
                    if($temps->count() > 0){
                        foreach($temps as $temp){
                            $temp->advisor_name = $advisor->name;
                            $temp->advisor_email = $advisor->email;
                            if($temp->completed)
                                $temp->score = $this->getScore($temp->response);
                            $reports->push($temp);
                        }
                    }
                }
                return view('firm.reports_view')->with(['reports'=>$reports]);
        }
    }

    public function show($code){
        if(Auth::user()->role == 'admin')
            return redirect("/home");

        $data = Report::where('code', $code)->get()->first();
        if($data == null)
            return "Error!";

        $score = $this->getScore($data->response);

        $advisor = User::where('id', $data->advisor)->get()->first();
        $data->advisor_name = $advisor->name;

        $firm = User::where('code', $advisor->firm_code)->get()->first();
        $data->firm_name = $firm->name;

        $data->individual_score = $this->getIndividualScore($data->response);

        $data->part3 = $this->getPart3Answer($data->response);
        $data->part4 = $this->getPart4Answer($data->response);

        // $pdf = PDF::loadView('reports.'.$score, ['data' => $data]);
        // return $pdf->inline();

        return view('reports.1122')->with(['data' => $data]);
        //return view('reports.'.$score)->with(['data' => $data]);
    }


    public function clients(){

        return view('advisor.clients');
    }

    protected function getPart3Answer($response){
        $response = unserialize($response);
        return $response[2]['part3'];
    }

    protected function getPart4Answer($response){
        $response = unserialize($response);
        return $response[3];
    }

    protected function getIndividualScore($response){
        $response = unserialize($response);
        $scores = array('blue' => 0, 'green' => 0, 'red' => 0, 'yellow' => 0);

        //// Part 1 Scores ////
        for($i = 1; $i <= count($response[0]); $i+=4){
            $scores['blue'] += $response[0][$i];
            $scores['green'] += $response[0][$i+1];
            $scores['red'] += $response[0][$i+2];
            $scores['yellow'] += $response[0][$i+3];
        }

        //// Part 2 Scores ////
        for($i = 1; $i <= count($response[1]); $i++){
            $scores[$this->partBAnswers($i, $response[1][$i])] += 1;
        }

        return "{A" . $scores['blue'] . ", B" . $scores['green'] . ", C" . $scores['red'] . ", D" . $scores['yellow'] . "}";
    }

    protected function getScore($response){
        $response = unserialize($response);
        $scores = array('blue' => 0, 'green' => 0, 'red' => 0, 'yellow' => 0);

        //// Part 1 Scores ////
        for($i = 1; $i <= count($response[0]); $i+=4){
            $scores['blue'] += $response[0][$i];
            $scores['green'] += $response[0][$i+1];
            $scores['red'] += $response[0][$i+2];
            $scores['yellow'] += $response[0][$i+3];
        }

        //// Part 2 Scores ////
        for($i = 1; $i <= count($response[1]); $i++){
            $scores[$this->partBAnswers($i, $response[1][$i])] += 1;
        }

        //// Calculating Percentage ////
        $scores['blue'] = (($scores['blue'] * 100) / 87);
        $scores['green'] = (($scores['green'] * 100) / 87);
        $scores['red'] = (($scores['red'] * 100) / 87);
        $scores['yellow'] = (($scores['yellow'] * 100) / 87);

        //// allocate low, med, high ////
        foreach($scores as $key => $score){
            if($score <= 33)
                $scores[$key] = 3;
            else if($score > 33 && $score <= 66)
                $scores[$key] = 2;
            else
                $scores[$key] = 1;
        }

        return implode($scores, "");
    }

    function create_report_code(){
        while(true){
            $code = str_random(30);
            if(Report::where('code', $code)->count() < 1)
                return $code;
        }
    }

    protected function partBAnswers($row, $opt){
        $answers = [
            ["blue", "red"],
            ["green", "yellow"],
            ["red", "blue"],
            ["yellow", "green"],
            ["blue", "red"],
            ["yellow", "green"],
            ["green", "yellow"],
            ["red", "blue"],
            ["yellow", "green"],
            ["blue", "red"],
            ["yellow", "green"],
            ["red", "blue"],
            ["green", "red"],
            ["yellow", "green"],
            ["yellow", "green"],
            ["blue", "red"],
            ["red", "blue"],
            ["green", "yellow"],
            ["green", "yellow"],
            ["red", "blue"],
            ["blue", "red"],
            ["green", "yellow"],
            ["red", "blue"],
            ["blue", "yellow"],
        ];

        return $answers[$row-1][$opt-1];
    }

    function sendClientEmail($advisor, $code, $email, $name){
        Mail::send('email.newClient', ["advisor" => $advisor,"code" => $code], function($message) use ($email, $name){
            $message->to($email, $name)
                ->subject('Questioner Invititon');
        });
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:175',
            'last_name' => 'required|string|max:175',
            'email' => 'required|string|email|max:175',
        ]);
    }


    public function viewReport() {
        return view('reports.1122');
    }

}

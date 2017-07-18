<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
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
                return view('advisor.reports_view')->with(['reports'=>Report::where('advisor',Auth::id())->get()->reverse()]);
            case "firm":
                $advisors = User::where('firm_code', Auth::user()->code)->get();
                $reports = collect();
                foreach($advisors as $advisor){
                    $temps = Report::where('advisor', $advisor->id)->get();
                    if($temps->count() > 0){
                        foreach($temps as $temp){
                            $temp->advisor_name = $advisor->name;
                            $temp->advisor_email = $advisor->email;
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
        
        return $code;
    }


    public function clients(){

        return view('advisor.clients');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:175',
            'last_name' => 'required|string|max:175',
            'email' => 'required|string|email|max:175',
        ]);
    }

    function create_report_code(){
        while(true){
            $code = str_random(30);
            if(Report::where('code', $code)->count() < 1)
                return $code;
        }
    }

    function sendClientEmail($advisor, $code, $email, $name){
        Mail::send('email.newClient', ["advisor" => $advisor,"code" => $code], function($message) use ($email, $name){
            $message->to($email, $name)
                ->subject('Questioner Invititon');
        });
    }
}

<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use PDF;
use app\User;
use App\Report;
use App\PriceRange;
use App\Transaction;
use Omnipay\Omnipay;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function new(Request $request){
        if(Auth::user()->role == 'advisor')
            return view('advisor.reports_new')->with('tokens', User::where('code', Auth::user()->firm_code)->get()->first()->tokens_available);

        return redirect('/');
    }

    public function create(Request $request){
        if(Auth::user()->role == 'advisor')
            return $this->createReport_Advisor($request);

        return redirect('/');
    }

    private function createReport_Advisor(Request $request){
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

        $this->sendClientEmail(Auth::user()->name, $code, $request->email, $request->first_name . ' ' . $request->last_name, $firm->firm_name);

        return back()->withErrors(['success'=>'New client added successfully. An email has been sent to the client with the link to the questionnaire.'])->with('tokens', $firm->tokens_available);
    }

    public function view(){
        switch(Auth::user()->role){
            case "admin":
                $reports = Report::get()->reverse();
                foreach($reports as $report)
                    if($report->completed)
                        $report->score = $this->getScore($report->response);
                return view('admin.reports_view')->with(['reports'=>$reports]);
            case "advisor":
                $reports = Report::where('advisor',Auth::id())->get()->reverse();
                foreach($reports as $report)
                    if($report->completed)
                        $report->score = $this->getScore($report->response);
                return view('advisor.reports_view')->with(['reports'=>$reports]);
            case "firm":
                $advisors = User::where('firm_code', Auth::user()->code)->get();
                $reports = collect();
                foreach($advisors as $advisor){
                    if(isset($_GET['advisor']) && $_GET['advisor'] != $advisor->id)
                        continue;

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
        $data->firm_name = $firm->firm_name;

        $data->individual_score = $this->getIndividualScore($data->response);

        $data->part6 = $this->getPart6Answer($data->response);
        $data->part7 = $this->getPart7Answer($data->response);

        $data->subCatScores = $this->partASubCatScores($data->response);

        $pdf = PDF::loadView('reports.1122', ['data' => $data]);
        // $pdf = PDF::loadView('reports.'.$score, ['data' => $data]);
        return $pdf->inline();

        //return view('reports.1122')->with(['data' => $data]);
    }


    public function clients(){

        $reports = Report::where('advisor',Auth::id())->get()->reverse();
        foreach($reports as $report)
            if($report->completed)
                $report->score = $this->getScore($report->response);
        return view('advisor.clients')->with(['reports'=>$reports]);
    }

    public static function getPart6Answer($response){
        $response = unserialize($response);
        return $response[5]['part6'];
    }

    public static function getPart7Answer($response){
        $response = unserialize($response);
        return $response[6];
    }

    public static function getIndividualScore($response){
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
            $scores[ReportsController::partBAnswers($i, $response[1][$i])] += 2.5;
        }

        //// part 3 Scores ////
        foreach($response[2] as $key => $answer){
            $scores[ReportsController::partCAnswers($key)] += 2;
            $scores[ReportsController::partCAnswers_secondary($key)] += 1;
        }

        //// part 4 Scores ////
        foreach($response[3] as $key => $answer){
            $scores[ReportsController::partDAnswers($key)] += 2;
            if(ReportsController::partDAnswers_secondary($key) != null)
                $scores[ReportsController::partDAnswers_secondary($key)] += 1;
        }

        //// Part 5 Scores ////
        $part5 = ReportsController::partEAnswers($response[4]);
        $scores['green'] += $part5["green"];
        $scores['red'] += $part5["red"];
        $scores['blue'] += $part5["blue"];
        $scores['yellow'] += $part5["yellow"];

        return "{A" . $scores['blue'] . ", B" . $scores['green'] . ", C" . $scores['red'] . ", D" . $scores['yellow'] . "}";
    }

    public static function getScore($response){
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
            $scores[ReportsController::partBAnswers($i, $response[1][$i])] += 2.5;
        }

        //// part 3 Scores ////
        foreach($response[2] as $key => $answer){
            $scores[ReportsController::partCAnswers($key)] += 2;
            $scores[ReportsController::partCAnswers_secondary($key)] += 1;
        }

        //// part 4 Scores ////
        foreach($response[3] as $key => $answer){
            $scores[ReportsController::partDAnswers($key)] += 2;
            if(ReportsController::partDAnswers_secondary($key) != null)
                $scores[ReportsController::partDAnswers_secondary($key)] += 1;
        }

        //// Part 5 Scores ////
        $part5 = ReportsController::partEAnswers($response[4]);
        $scores['green'] += $part5["green"];
        $scores['red'] += $part5["red"];
        $scores['blue'] += $part5["blue"];
        $scores['yellow'] += $part5["yellow"];

        //// Calculating Percentage ////
        $scores['blue'] = (($scores['blue'] * 100) / 120);
        $scores['green'] = (($scores['green'] * 100) / 120);
        $scores['red'] = (($scores['red'] * 100) / 120);
        $scores['yellow'] = (($scores['yellow'] * 100) / 120);


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

    public static function partASubCatScores($response){
        $response = unserialize($response);
        $answers = ReportsController::partASubCatAnswers();

        $scores = [
            "analytical" => 0,
            "beliefs" => 0,
            "structured" => 0,
            "flexible" => 0,
            "creative" => 0,
            "practical" => 0,
            "intellectual" => 0,
            "instinctive" => 0,
        ];

        foreach($answers as $key => $cat){
            $scores[$cat] += $response[0][$key];
        }

        $result = "{C" . $scores["creative"] . ",P" . $scores["practical"] . ",A" . $scores["analytical"] . ",B" . $scores["beliefs"] . ",S" . $scores["structured"] . ",F" . $scores["flexible"] . ",iN" . $scores["intellectual"] . ",iS" . $scores["instinctive"] . "}";

        return $result;
    }

    public static function partASubCatAnswers(){
        return [
            1 => "analytical",
            25 => "analytical",
            37 => "analytical",
            45 => "analytical",
            57 => "analytical",

            3 => "beliefs",
            15 => "beliefs",
            27 => "beliefs",
            39 => "beliefs",
            19 => "beliefs",

            6 => "structured",
            18 => "structured",
            30 => "structured",
            42 => "structured",
            50 => "structured",

            7 => "flexible",
            31 => "flexible",
            40 => "flexible",
            44 => "flexible",
            60 => "flexible",

            4 => "creative",
            12 => "creative",
            24 => "creative",
            28 => "creative",
            36 => "creative",

            2 => "practical",
            14 => "practical",
            26 => "practical",
            38 => "practical",
            54 => "practical",

            9 => "intellectual",
            17 => "intellectual",
            29 => "intellectual",
            41 => "intellectual",
            49 => "intellectual",

            16 => "instinctive",
            35 => "instinctive",
            52 => "instinctive",
            55 => "instinctive",
            47 => "instinctive",
        ];
    }

    public static function partBAnswers($row, $opt){
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

    public static function partCAnswers($opt){
        $array = [
            "maths" => "blue",
            "science" => "blue",
            "physics" => "blue",
            "chemistry" => "blue",
            "languages" => "green",
            "legal_studies" => "green",
            "geography" => "green",
            "history" => "green",
            "social_studies" => "red",
            "music" => "red",
            "politics" => "red",
            "psychology" => "red",
            "art" => "yellow",
            "design" => "yellow",
            "english_literature" => "yellow",
            "english" => "yellow",
        ];

        return $array[$opt];
    }

    public static function partCAnswers_secondary($opt){
        $array = [
            "maths" => "green",
            "science" => "yellow",
            "physics" => "yellow",
            "chemistry" => "yellow",
            "languages" => "blue",
            "legal_studies" => "blue",
            "geography" => "blue",
            "history" => "blue",
            "social_studies" => "green",
            "music" => "green",
            "politics" => "green",
            "psychology" => "yellow",
            "art" => "red",
            "design" => "green",
            "english_literature" => "red",
            "english" => "green",
        ];

        return $array[$opt];
    }

    public static function partDAnswers($opt){
        $array = [
            "information_technology" => "blue",
            "computer_games" => "blue",
            "astronomy" => "blue",
            "investing" => "blue",

            "fantasy_sports " => "blue",
            "crosswords " => "blue",

            "home_improvements" => "green",
            "cooking" => "green",
            "camping" => "green",
            "gardening" => "green",

            "collecting" => "green",
            "fitness_exercise" => "green",

            "musical_instruments" => "red",
            "movies" => "red",
            "travel" => "red",
            "sport" => "red",

            "entertaining " => "red",
            "musical_composing " => "red",

            "sailing" => "yellow",
            "arts_crafts" => "yellow",
            "creative_writing" => "yellow",
            "photography" => "yellow",

            "drawing" => "yellow",
            "painting" => "yellow",

        ];

        return $array[$opt];
    }

    public static function partDAnswers_secondary($opt){
        $array = [
            "information_technology" => "yellow",
            "astronomy" => "yellow",

            "fantasy_sports" => "yellow",
            "crosswords" => "green",

            "home_improvements" => "blue",
            "cooking" => "blue",
            "gardening" => "blue",

            "fitness_exercise" => "blue",
            "movies" => "yellow",

            "musical_composing" => "green",


            "sailing" => "green",
            "arts_crafts" => "red",
            "creative_writing" => "red",
            "photography" => "green",
            "drawing" => "red",
            "painting" => "red",
        ];

        if(array_key_exists($opt, $array))
            return $array[$opt];

        return null;
    }

    public static function partEAnswers($opt){
        $output = ["red" => 0, "yellow" => 0, "green" => 0, "blue" => 0];

        //For Question 1
        $output["yellow"] += $opt["1"];
        if($opt["9"] == "1"){
            $output["yellow"] += 1;
        }

        //For Question 2
        $output["green"] += $opt["2"];
        if($opt["9"] == "2"){
            $output["green"] += 1;
        }

        //For Question 3
        $output["green"] += $opt["3"];
        $output["blue"] += $opt["3"];
        if($opt["9"] == "3"){
            $output["green"] += 1;
            $output["blue"] += 1;
        }

        //For Question 4
        $output["red"] += $opt["4"];
        $output["yellow"] += $opt["4"];
        if($opt["9"] == "4"){
            $output["red"] += 1;
            $output["yellow"] += 1;
        }

        //For Question 5
        $output["blue"] += $opt["5"];
        if($opt["9"] == "5"){
            $output["blue"] += 1;
        }

        //For Question 6
        $output["red"] += $opt["6"];
        if($opt["9"] == "6"){
            $output["red"] += 1;
        }

        //For Question 7
        $output["blue"] += $opt["7"];
        $output["yellow"] += $opt["7"];
        if($opt["9"] == "7"){
            $output["blue"] += 1;
            $output["yellow"] += 1;
        }

        //For Question 8
        $output["red"] += $opt["8"];
        $output["green"] += $opt["8"];
        if($opt["9"] == "8"){
            $output["red"] += 1;
            $output["green"] += 1;
        }

        return $output;
    }


    function sendClientEmail($advisor, $code, $email, $name, $firm){
        Mail::send('email.newClient', ["advisor" => $advisor, "code" => $code, "client" => $name, "firm" => $firm], function($message) use ($email, $name){
            $message->to($email, $name)
                ->subject('Investor DNA Questionnaire');
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
}

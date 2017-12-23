<?php

namespace App\Http\Controllers;

use Mail;
use App\iClient;
use Illuminate\Http\Request;

class iClientQuestionerController extends Controller
{
    public function index($code){
        $iClient = iClient::where('code', $code)->get();
        if($iClient->count() != 1)
            return view('client.error');
        else if($iClient->first()->completed)
            return view('client.completed');

        return view('client.welcome')->with(['code'=>$code]);
    }

    public function part1($code){
        $iClient = iClient::where('code', $code)->get();
        if($iClient->count() != 1)
            return view('client.error');
        else if($iClient->first()->completed)
            return view('client.completed');

        return view('client.part1')->with(['code'=>$code, 'questions'=>QuestionerController::part1_questions(), 'saved_input'=>session('part1')]);
    }

    public function part1_submit($code, Request $request){
        $iClient = iClient::where('code', $code)->get();
        if($iClient->count() != 1)
            return view('client.error');
        else if($iClient->first()->completed)
            return view('client.completed');

        session(['part1' => $request->all()]);

        return redirect('/iclient/questioner/'.$code.'/part/2');
    }

    public function part2($code){
        $iClient = iClient::where('code', $code)->get();
        if($iClient->count() != 1)
            return view('client.error');
        else if($iClient->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1'))
            return redirect('/iclient/questioner/'.$code.'/part/1');

        return view('client.part2')->with(['code'=>$code, 'questions'=>QuestionerController::part2_questions(), 'saved_input'=>session('part2')]);
    }

    public function part2_submit($code, Request $request){


        $iClient = iClient::where('code', $code)->get();
        if($iClient->count() != 1)
            return view('client.error');
        else if($iClient->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1'))
            return redirect('/iclient/questioner/'.$code.'/part/1');

        session(['part2' => $request->all()]);

        return redirect('/iclient/questioner/'.$code.'/part/3');
    }

    public function part3($code){
        $iClient = iClient::where('code', $code)->get();
        if($iClient->count() != 1)
            return view('client.error');
        else if($iClient->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1') || !session()->has('part2'))
            return redirect('/iclient/questioner/'.$code.'/part/2');

        return view('client.part3')->with(['code'=>$code, 'saved_input'=>session('part3')]);
    }

    public function part3_submit($code, Request $request){
        $iClient = iClient::where('code', $code)->get();
        if($iClient->count() != 1)
            return view('client.error');
        else if($iClient->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1') || !session()->has('part2'))
            return redirect('/iclient/questioner/'.$code.'/part/2');

        session(['part3' => $request->all()]);

        return redirect('/iclient/questioner/'.$code.'/part/4');
    }

    public function part4($code){
        $iClient = iClient::where('code', $code)->get();
        if($iClient->count() != 1)
            return view('client.error');
        else if($iClient->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1') || !session()->has('part2') || !session()->has('part3'))
            return redirect('/iclient/questioner/'.$code.'/part/3');

        return view('client.part4')->with(['code'=>$code, 'saved_input'=>session('part4')]);
    }

    public function part4_submit($code, Request $request){
        $iClient = iClient::where('code', $code)->get();
        if($iClient->count() != 1)
            return view('client.error');
        else if($iClient->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1') || !session()->has('part2') || !session()->has('part3'))
            return redirect('/iclient/questioner/'.$code.'/part/3');

        session(['part4' => $request->all()]);

        return redirect('/iclient/questioner/'.$code.'/part/5');
    }

    public function part5($code){
        $iClient = iClient::where('code', $code)->get();
        if($iClient->count() != 1)
            return view('client.error');
        else if($iClient->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1') || !session()->has('part2') || !session()->has('part3') || !session()->has('part4'))
            return redirect('/iclient/questioner/'.$code.'/part/4');

        return view('client.part5')->with(['code'=>$code, 'questions' => QuestionerController::part5_questions(), 'saved_input'=>session('part5')]);
    }

    public function part5_submit($code, Request $request){
        $iClient = iClient::where('code', $code)->get();
        if($iClient->count() != 1)
            return view('client.error');
        else if($iClient->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1') || !session()->has('part2') || !session()->has('part3') || !session()->has('part4'))
            return redirect('/iclient/questioner/'.$code.'/part/4');

        session(['part5' => $request->all()]);

        return redirect('/iclient/questioner/'.$code.'/part/6');
    }

    public function part6($code){
        $iClient = iClient::where('code', $code)->get();
        if($iClient->count() != 1)
            return view('client.error');
        else if($iClient->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1') || !session()->has('part2') || !session()->has('part3') || !session()->has('part4') || !session()->has('part5'))
            return redirect('/iclient/questioner/'.$code.'/part/5');

        return view('client.part6')->with(['code'=>$code, 'saved_input'=>session('part6')]);
    }

    public function part6_submit($code, Request $request){
        $iClient = iClient::where('code', $code)->get();
        if($iClient->count() != 1)
            return view('client.error');
        else if($iClient->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1') || !session()->has('part2') || !session()->has('part3') || !session()->has('part4') || !session()->has('part5'))
            return redirect('/iclient/questioner/'.$code.'/part/5');

        session(['part6' => $request->all()]);

        return redirect('/iclient/questioner/'.$code.'/part/7');
    }

    public function part7($code){
        $iClient = iClient::where('code', $code)->get();
        if($iClient->count() != 1)
            return view('client.error');
        else if($iClient->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1') || !session()->has('part2') || !session()->has('part3') || !session()->has('part4') || !session()->has('part5') || !session()->has('part6'))
            return redirect('/iclient/questioner/'.$code.'/part/6');

        return view('client.part7')->with(['code'=>$code, 'questions'=>QuestionerController::part7_questions(), 'saved_input'=>session('part7')]);
    }

    public function part7_submit($code, Request $request){
        $iClient = iClient::where('code', $code)->get();
        if($iClient->count() != 1)
            return view('client.error');
        else if($iClient->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1') || !session()->has('part2') || !session()->has('part3') || !session()->has('part4') || !session()->has('part5') || !session()->has('part6'))
            return redirect('/iclient/questioner/'.$code.'/part/6');

        $temp1 = session('part1');
        unset($temp1["_token"]);

        $temp2 = session('part2');
        unset($temp2["_token"]);

        $temp3 = session('part3');
        unset($temp3["_token"]);

        $temp4 = session('part4');
        unset($temp4["_token"]);

        $temp5 = session('part5');
        unset($temp5["_token"]);

        $temp6 = session('part6');
        unset($temp6["_token"]);

        $temp7 = $request->all();
        unset($temp7["_token"]);

        $iClient->first()->response = serialize([$temp1, $temp2, $temp3, $temp4, $temp5, $temp6, $temp7]);
        $iClient->first()->completed = true;
        $iClient->first()->save();

        $this->sendiClientEmailCompleted($iClient->first()->code, $iClient->first()->email, $iClient->first()->name);

        session()->flush();

        return view('client.thankyou');
    }



    function sendiClientEmailCompleted($code, $email, $name){
        Mail::send('email.iClientReportCompleted', ["code" => $code, "client" => $name], function($message) use ($email, $name){
            $message->to($email, $name)
                ->subject('Investor DNA Questionnaire');
        });
    }
}

<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class QuestionerController extends Controller
{
    public function index($code){
        $report = Report::where('code', $code)->get();
        if($report->count() != 1)
            return view('client.error');
        else if($report->first()->completed)
            return view('client.completed');

        return view('client.welcome')->with(['code'=>$code]);
    }

    public function part1($code){
        $report = Report::where('code', $code)->get();
        if($report->count() != 1)
            return view('client.error');
        else if($report->first()->completed)
            return view('client.completed');

        return view('client.part1')->with(['code'=>$code, 'questions'=>$this->part1_questions(), 'saved_input'=>session('part1')]);
    }

    public function part1_submit($code, Request $request){
        $report = Report::where('code', $code)->get();
        if($report->count() != 1)
            return view('client.error');
        else if($report->first()->completed)
            return view('client.completed');

        session(['part1' => $request->all()]);

        return redirect('/questioner/'.$code.'/part/2');
    }

    public function part2($code){
        $report = Report::where('code', $code)->get();
        if($report->count() != 1)
            return view('client.error');
        else if($report->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1'))
            return redirect('/questioner/'.$code.'/part/1');

        return view('client.part2')->with(['code'=>$code, 'questions'=>$this->part2_questions(), 'saved_input'=>session('part2')]);
    }

    public function part2_submit($code, Request $request){
        $report = Report::where('code', $code)->get();
        if($report->count() != 1)
            return view('client.error');
        else if($report->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1'))
            return redirect('/questioner/'.$code.'/part/1');

        session(['part2' => $request->all()]);

        return redirect('/questioner/'.$code.'/part/3');
    }

    public function part3($code){
        $report = Report::where('code', $code)->get();
        if($report->count() != 1)
            return view('client.error');
        else if($report->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1') || !session()->has('part2'))
            return redirect('/questioner/'.$code.'/part/2');

        return view('client.part3')->with(['code'=>$code, 'saved_input'=>session('part3')]);
    }

    public function part3_submit($code, Request $request){
        $report = Report::where('code', $code)->get();
        if($report->count() != 1)
            return view('client.error');
        else if($report->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1') || !session()->has('part2'))
            return redirect('/questioner/'.$code.'/part/2');

        session(['part3' => $request->all()]);

        return redirect('/questioner/'.$code.'/part/4');
    }

    public function part4($code){
        $report = Report::where('code', $code)->get();
        if($report->count() != 1)
            return view('client.error');
        else if($report->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1') || !session()->has('part2') || !session()->has('part3'))
            return redirect('/questioner/'.$code.'/part/3');

        return view('client.part4')->with(['code'=>$code, 'questions'=>$this->part4_questions(), 'saved_input'=>session('part4')]);
    }

    public function part4_submit($code, Request $request){
        $report = Report::where('code', $code)->get();
        if($report->count() != 1)
            return view('client.error');
        else if($report->first()->completed)
            return view('client.completed');
        else if(!session()->has('part1') || !session()->has('part2') || !session()->has('part3'))
            return redirect('/questioner/'.$code.'/part/3');

        $temp1 = session('part1');
        unset($temp1["_token"]);

        $temp2 = session('part2');
        unset($temp2["_token"]);

        $temp3 = session('part3');
        unset($temp3["_token"]);

        $temp4 = $request->all();
        unset($temp4["_token"]);

        $report->first()->response = serialize([$temp1, $temp2, $temp3, $temp4]);
        $report->first()->completed = true;
        $report->first()->save();

        session()->flush();

        return view('client.thankyou');
    }

    protected function part1_questions(){
        return [
            "My investment decisions are based on the facts, figures and the data.",
            "I am generally conservative in my approach, preferring proven, reliable & stable investments.",
            "I prefer my investments to have real purpose, and make a positive contribution to society.",
            "I focus on the future rather than on the present.",
            "I like to understand the technical aspects of a potential investment.",
            "I focus on one thing at a time, working things through in a step-by-step fashion.",
            "I am a good listener and have natural empathy towards others and their situation.",
            "I take a ‘big picture’ approach to investing rather than getting into details.",
            "I am factual, clinical and rational when making investment decisions.",
            "I like to be in control of my own investments and don't like surprises.",
            "I make my decisions based on my principles, beliefs and my intuition first and foremost",
            "I synthesise and integrate all available investment information to form an overall picture.",
            "I am more introverted than extroverted, preferring my own company to socialising.",
            "I prefer to safeguard my gains rather than risk them further on speculative ventures.",
            " I often consult friends and/or family when making my investment decisions.",
            "I often ‘join the dots’ and see patterns in investment data that others miss.",
            "I deal in the facts and as such my investment decisions are usually correct.",
            "I have a documented investment strategy/plan with clear goals, actions and timeframes.",
            "I would not invest in stocks that are detrimental to society, such as tobacco/gaming.",
            "I like the thrill of taking investment risks based on my intuition and high potential returns",
            "I like to collect and analyse extensive amounts of data before making investment decisions.",
            "I like to take my time when making investment decisions and don't like to be rushed.",
            "I am attracted to philanthropic activities and would consider donating to worthwhile charities.",
            "I prefer my adviser to communicate to me visually, using pictures, diagrams and graphs.",
            "I displayed a talent for numbers and /or mathematics from an early age.",
            "I have an eye for details that others might miss.",
            "I have a large circle of friends with whom I socialize with on a regular basis.",
            "I like to challenge the status quo and am not afraid to break the rules.",
            "I like to solve complex problems that challenge my intellect.",
            "I have strongly held principles that guide my decisions and actions.",
            "I consult my trusted financial adviser prior to making any investment decisions.",
            "I can sense if an investment idea might or might not work.",
            "I know about money and know what’s in my bank account at any given time.",
            "I am aware of the rules and regulations and make sure all of my investments are compliant.",
            "I prefer investing in ethical companies concerned with the environment and social inclusion.",
            "I am attracted to investments that are original, creative, unusual, and ‘outside the box’.",
            "I am attracted to the concept of day trading, buying and selling shares over the web.",
            "I take a pragmatic approach to investing, making sure we get things done and get the result.",
            "I prefer my adviser to be personal, friendly, sociable and easy to talk to.",
            "I like to operate in the world of ideas and concepts rather than in practicalities.",
            "I like to think things through in my head before I take action.",
            "My approach to investing is planned, organised, structured and detailed.",
            "I am naturally a very outgoing person and can be the life of the party. ",
            "I prefer my adviser to be bold, adventurous, creative and different.",
            "I prefer my adviser to be factual, rational, analytical and rigorous in their approach.",
            "I prefer investment matters to be documented and communicated in writing.",
            "I will often meet a new person and feel like I have known them for years.",
            "I am good at coping with the uncertainty of a fluctuating stock market.",
            "I calculate best-case and worst-case scenarios as part of conducting my asset due diligence.",
            "I like to finish what we start and don't like leaving things ‘up in the air’.",
            "I am highly intuitive and choose my investments mainly on ‘gut feel’.",
            "I often buy when others are selling and visa versa, resisting the ‘herd mentality’.",
            "I might purchase property based solely the numbers and potential returns, sight unseen.",
            "I like my advisor to be prepared, organised, structured & punctual, having done their homework.",
            "I often ride the emotional highs and lows of the investment cycle.",
            "I like to keep my investment options open and remain flexible in my approach.",
            "I like intellectual/theoretical models or diagrams that explain how and why things work.",
            "I always follow through on my personal commitments that I make to others.",
            "I wear my ‘heart on my sleeve’ and am not afraid to express my feelings.",
            "I am highly talkative and like to express my ideas when I am around others.",
        ];
    }

    protected function part2_questions(){
        return [
            ["Analytical", "Beliefs"],
            ["Concrete", "Conceptual"],
            ["Extrovert", "Introvert"],
            ["Creative", "Practical"],
            ["Numerical", "Spiritual"],
            ["Big Picture", "Detailed"],
            ["Structured", "Flexible"],
            ["Principled", "Data"],
            ["Concepts", "Results"],
            ["Reflective", "Expressive"],
            ["Breaks Rules", "Compliance"],
            ["Intuitive", "Rational"],
            ["Controlled", "Emotional"],
            ["Innovative", "Consistency"],
            ["Lateral", "Sequential"],
            ["Factual", "Beliefs"],
            ["Feeling", "Thinking"],
            ["Today  ", "Tomorrow"],
            ["Safekeeping", "Risk Taker"],
            ["Social", "Introspective"],
            ["Quantitative", "Qualitative"],
            ["Practical", "Imaginative"],
            ["Empathy", "Technical"],
            ["Rigorous", "Integrating"],
        ];
    }

    protected function part4_questions(){
        return [
            "I prefer an adviser that has a successful track record, as at the end of the day it’s about getting the results",
            "I prefer to invest in sectors or shares that have a successful track record over time, as the best predictor of future success is past success",
            "I prefer an adviser who puts my needs ahead of his or her own needs",
            "I prefer an adviser who is communicative, has genuine empathy, and really listens to my needs and concerns",
            "I prefer an adviser who is of the highest integrity, one that is reliable, authentic, dedicated and transparent in their dealings",
            "I prefer an adviser who makes recommendations based on data, facts and rational analysis rather than other factors",
            "I prefer an adviser who understands the legislative requirements and ensures that all of our investment options are compliant with the law",
            "I prefer an adviser who is creative and original in their thinking, identifying new and exciting investments that challenge he status quo",
            "I prefer an adviser who remains calm, objective and in control during times of market volatility",
            "I prefer an adviser who takes time to get to know me and build a close personal relationship",
            "I prefer an adviser who understands my core values and philosophy and has a similar outlook on life",
            "I prefer an adviser who is exceptionally good with the numbers",
        ];
    }
}

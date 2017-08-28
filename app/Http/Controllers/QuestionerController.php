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
            "I am generally conservative in my approach, preferring investments that are proven, reliable & produce steady returns/growth",
            "I select my investments based on their potential to make a meaningful contributon to society as well as financial returns. ",
            "I focus on the future rather than on the present. ",
            "I am more quiet and reflective rather than social and talkative.",
            "I like to focusing on one thing at a time rather than doing everything at once.",
            "I talk to both friends and family to help me make my investment decisions. ",
            "I like to figure things out conceptually in my head before I take action ",
            "I am a thinker and often the smartest person in the room.    ",
            "I like to take my time when making investment decisions and don't like to be rushed. ",
            "My friends would describe me as a good listener and having genuine empathy and warmth.",
            "I like to operate in the world of ideas and concepts rather than being too worried about practicalities. ",
            "I make my own investment decisions independently and don't need to consult others for validation. ",
            "At the end of the day the only thing that matters is that we get the job done and get the results. ",
            "I make my investment decisions in accordance with on my personal principles, values and beliefs. ",
            "I base my investment decisions more on intuition and 'gut feel' rather than facts and data . ",
            "I like to solve complex or difficult problems that challenge my intellect. ",
            "I have a written investment plan that outlines my financial goals and how I intend to achieve them. ",
            "I feel things strongly, often riding the emotional highs and lows of a fluctuating market. ",
            "I like to combine and synthesise all available investment information into an overall big picture. ",
            "I know about money and am aware of my bank account at any given time.",
            "I understand the relevant laws, rules and regulations that govern the financial services industry and what they mean for me.  ",
            "I have a large circle of friends with whom I socialize with on a regular basis. ",
            "I am attracted to bold,original or creative investments that are 'outside the box'. ",
            "I am factual, logical and rational when making investment decisions and would rarely purchase investments on impulse. ",
            "I like to finish what I start and don't like leaving things open ended or 'up in the air'. ",
            "I don't invest in things that are detrimental to society, such as tobacco or gaming, irrespective of the potential high returns. ",
            "I often ‘join the dots’ and see patterns and connections between things that others might miss. ",
            "I like to understand the technical aspects and the mechanics of any potential investment.",
            "I like to recharge my batteries by being in my own, rather than going out and being social. ",
            "I am pretty easy going and flexible, readily adapting to change when it comes my way.    ",
            "I take a ‘big picture’ approach to investing rather than getting too bogged down in the details. ",
            "I prefer my financial adviser to be factual, rational, analytical and rigorous in their approach. ",
            "I prefer my financial advisor to be prepared, organised, structured & detailed, having done their homework.",
            "I am passionate about things and not afraid to tell it like it is, despite potentially upsetting others. ",
            "I am creative by nature, always coming up with new ideas and looking for new ways to innovative.  ",
            "I like to collect and analyse lots of facts and data before I make my investment decisions.",
            "I prefer to safeguard and consolidate investment gains rather than risk them further on speculative ventures.",
            "I like philanthropy and would consider donating money or investing in worthwhile causes and/or charities. ",
            "I like to be flexible and keep my options open so I can respond to market changes when I need to. ",
            "I like intellectual/theoretical models that explain how and why things work in theory. ",
            "I like sticking to a structured routine as it helps me be more productive and get things done. ",
            "I wear my ‘heart on my sleeve’ and am not afraid to express my feelings.",
            "I like to challenge the status quo and am not afraid to bend or even break the rules. ",
            "I displayed a talent for numbers and /or mathematics from an early age. ",
            "I am neat and tidy and prefer to have everything in its place.  ",
            "I am naturally social, talkative and tend to say what comes to mind. ",
            "I prefer my adviser to communicate to me visually, using pictures, diagrams and graphs. ",
            "I am not afraid to buy when others are selling and visa versa, resisting market pressure and the ‘herd mentality’. ",
            "I like to do things in a methodical, systematic and step-by-step fashion.  ",
            "I sometimes stuggle to keep my emotions in check",
            "I am highly intuitive and have a sense what investments might or might not work",
            "I conduct thorough due dilligence on all potential investments, calculating best-case and worst-case scenarios. ",
            "I have an eye for details that others might miss. ",
            " I am intuitive when it comes to judging the character of others. ",
            "I believe that to make money you have to be prepared to take risks.  ",
            "I might purchase property based solely the numbers and potential returns, sight unseen. ",
            "My approach to investing is cautious, meticulous and detailed",
            "I will often meet a new person and feel like I have known them for years. ",
            "I readily embrace new ways of doing things and see change as an opporutnity not a threat. ",
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

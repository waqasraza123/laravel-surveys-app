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
//1
            "My investment decisions are based on the facts, figures and the data.",
//2
            "I am generally conservative in my approach, preferring investments that are proven, reliable & produce steady returns/growth",
//3
            "I select my investments based on their potential to make a meaningful contributon to society as well as financial returns. ",
//4
            "I focus on the future rather than on the present. ",
//5
            "I am more quiet and reflective rather than social and talkative.",
//6
            "I like to focusing on one thing at a time rather than trying to do everything at once.",
//7
            "I talk to both friends and family to help me make my investment decisions. ",
//8
            "I like to figure things out conceptually in my head before I take action ",
//9
            "I am a deep thinker and can quickly understand most things, even the most complex.",
//10
            "I like to take my time when making investment decisions and don't like to be rushed. ",
//11
            "My friends would describe me as a good listener and having genuine empathy and warmth.",
//12
            "I like to operate in the world of ideas and concepts rather than being too worried about practicalities. ",
//13
            "I make my own investment decisions independently and don't need to consult others for validation. ",
//14
            "At the end of the day the only thing that matters is that we get the job done and get the results. ",
//15
            "I make my investment decisions in accordance with on my personal principles, values and beliefs. ",
//16
            "I base my investment decisions more on intuition and 'gut feel' rather than facts and data . ",
//17
            "I like to solve complex or difficult problems that challenge my intellect. ",
//18
            "I have a written investment plan that outlines my financial goals and how I intend to achieve them. ",
//19
            "I feel things strongly, often riding the emotional highs and lows of a fluctuating market. ",
//20
            "I like to combine and synthesise all available investment information into an overall big picture. ",
//21
            "I know about money and am aware of my bank account at any given time.",
//22
            "I understand the relevant laws, rules and regulations that govern the financial services industry and what they mean for me.  ",
//23
            "I have a large circle of friends with whom I socialize with on a regular basis. ",
//24
            "I am attracted to bold, original or creative investments that are 'outside the box'.",
//25
            "I am factual, logical and rational when making investment decisions and would rarely purchase investments on impulse. ",
//26
            "I like to finish what I start and don't like leaving things open ended or 'up in the air'. ",
//27
            "I don't invest in things that are detrimental to society, such as tobacco or gaming, irrespective of the potential high returns. ",
//28
            "I often ‘join the dots’ and see patterns and connections between things that others might miss. ",
//29
            "I like to understand the technical aspects and the mechanics of any potential investment.",
//30
            "I recharge my batteries by being on my own, rather than going out and being social.",
//31
            "I am pretty easy going and flexible, readily adapting to change when it comes my way.    ",
//32
            "I take a ‘big picture’ approach to investing rather than getting too bogged down in the details. ",
//33
            "I prefer my financial adviser to be factual and analytical in their approach. ",
//34
            "I prefer my financial advisor to be organised and structured in their approach.",
//35
            "I am passionate about things and not afraid to tell it like it is. ",
//36
            "I am creative by nature, always coming up with new ideas and looking for new ways to innovative.  ",
//37
            "I like to collect and analyse lots of facts and data before I make my investment decisions.",
//38
            "I prefer to safeguard and consolidate investment gains rather than risk them further on speculative ventures.",
//39
            "I like philanthropy and would consider donating money or investing in worthwhile causes and/or charities. ",
//40
            "I like to be flexible and keep my options open so I can respond to market changes when I need to. ",
//41
            "I like intellectual/theoretical models that explain how and why things work in theory. ",
//42
            "I like sticking to a structured routine as it helps me be more productive and get things done. ",
//43
            "I prefer my financial adviser to take the time to really get to know me and how I think.",
//44
            "I like to challenge the status quo and am not afraid to bend or even break the rules. ",
//45
            "I displayed a talent for numbers and /or mathematics from an early age. ",
//46
            "I am neat and tidy and prefer to have everything in its place.  ",
//47
            "I tend to say whatever comes into my head without thinking about it too much.",
//48
            "I prefer my financial adviser to be creative and is able to think 'outside the box'.",
//49
            "I am not afraid to buy when others are selling and visa versa, resisting market pressure and the ‘herd mentality’. ",
//50
            "I like to do things in a methodical, systematic and step-by-step fashion.  ",
//51
            "I sometimes stuggle to keep my emotions in check",
//52
            "I rely on my gut instinct to guide me in most situations",
//53
            "I conduct thorough due dilligence on all potential investments, calculating best-case and worst-case scenarios. ",
//54
            "I have an eye for details that others might miss. ",
//55
            "I am intuitive when it comes to judging the character of others. ",
//56
            "I believe that to make money you have to be prepared to take risks.  ",
//57
            "I might purchase property based solely the numbers and potential returns, sight unseen. ",
//58
            "My approach to investing is cautious, meticulous and detailed",
//59
            "I will often meet a new person and feel like I have known them for years. ",
//60
            "I readily embrace new ways of doing things and see change as an opporutnity not a threat. ",
        ];
    }

    protected function part2_questions(){
        return [
            ["Analytical", "Beliefs"],
            ["Introvert", "Extrovert"],
            ["Numerical", "Practical"],
            ["Ideas", "Facts"],
            ["Flexible", "Spiritual"],
            ["Big Picture", "Detailed"],
            ["Methodical", "Logical"],
            ["Results", "Relationships"],
            ["Safekeeping", "Risk Taker"],
            ["Expressive", "Reflective"],
            ["Intuitive", "Innovative"],
            ["Emotional", "Controlled"],
            ["Quantitative", "Qualitative"],
            ["Technical", "Imaginative"],
            ["Rigorous", "Sequential"],
            ["Challenges Rules", "Harmonizing"],
            ["Integrating", "Technical"],
            ["Future", "Present"],
            ["Structured", "Flexible"],
            ["Consistency", "Introspective"],
            ["Practical", "Creative"],
            ["Instinctive  ", "Intellectual"],
            ["Feelings", "Form"],
            ["Extroverted", "Introverted"],

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

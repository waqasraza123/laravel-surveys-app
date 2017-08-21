<?php

namespace App\Http\Controllers;

use Auth;
use App\PriceRange;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TokenRatesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        switch(Auth::user()->role){
            case "admin":
                $rates = PriceRange::all();
                if($rates->count() > 0)
                    $rates->last()->end = $rates->last()->end . " - ∞";
                return view("admin.rates")->with(["page_title" => "Token Rates", "rates" => $rates]);
            case "firm":
                redirect("/home");
            case "advisor":
                redirect("/home");
        }
    }

    public function new(Request $request){
        $validator = $this->validator($request->all());
        if($validator->fails())
            return back()->withErrors($validator);

        if(PriceRange::all()->count() == 0){
            if($request->start != 1)
                return back()->withInput()->withErrors(["start" => "Start value of First rate should be 1"]);
        }
        else{
            $last = PriceRange::all()->last();
            if($last->end + 1 != $request->start)
                return back()->withInput()->withErrors(["start" => "Start value should be 1 greater than the End value of last rate"]);
        }

        if($request->end < $request->start)
            return back()->withInput()->withErrors(["end" => "End value should be equal or greater than Start value"]);

        $rate = new PriceRange;
        $rate->start = $request->start;
        $rate->end = $request->end;
        $rate->rate = $request->rate;
        $rate->save();

        return back()->withErrors(["success" => "Price Range added successfully"]);
    }

    public function clear(Request $request){
        if(Auth::user()->role == "admin"){
            PriceRange::truncate();
        }

        return back();
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'start' => 'required|numeric|min:1',
            'end' => 'required|numeric|min:1',
            'rate' => 'required|numeric|min:0.01',
        ]);
    }
}

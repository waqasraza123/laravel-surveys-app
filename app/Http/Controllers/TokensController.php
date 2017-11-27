<?php

namespace App\Http\Controllers;

use Auth;
use App\User;
use App\Report;
use App\PriceRange;
use App\Transaction;
use Omnipay\Omnipay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TokensController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request){
        switch(Auth::user()->role){
            case "admin":
                redirect("/home");
            case "advisor":
                redirect("/home");
            case "firm":
                $rates = PriceRange::all();
                if($rates->count() > 0)
                    $rates->last()->end = "∞";

                $currencies = $this->getCurrencies();
                $selected_currency = 'AUD';
                if($request->input("currency"))
                    $selected_currency = $request->input("currency");

                foreach($rates as $rate)
                    $rate["rate"] = $rate["rate"] * $currencies[$selected_currency];

                return view("firm.tokens_purchase")->with(["page_title" => "Purchase Tokens", "rates" => $rates, "selected_currency" => $selected_currency, "currencies" => $currencies, "tokens" => Auth::user()->tokens_available]);
        }
    }

    public function purchase(Request $request){
        if(Auth::user()->role != "firm")
            redirect('/home');

        $validator = $this->validator($request->all());
        if($validator->fails())
            return back()->withErrors($validator);

        $rate  = $this->getRate($request->quantity);

        //Change rate according to currency
        $currencies = $this->getCurrencies();
        $selected_currency = 'AUD';
        if($request->input("currency"))
            $selected_currency = $request->input("currency");
        $rate = $rate * $currencies[$selected_currency];

        $subtotal = $request->quantity * $rate;
        $gst = $subtotal * 0.1;
        $price = $subtotal + $gst;
        $price = round($price, 2);

        $gateway = Omnipay::create('Stripe');
        $gateway->setApiKey(env('STRIPE_PRIVATE_KEY', ''));
        $response = $gateway->purchase([
            'amount' => $price,
            'currency' => $selected_currency,
            'token' => $request->stripeToken,
        ])->send();

        if($response->isSuccessful()) {
            $this->successfulTransaction($request->quantity, $rate);
            return back()->withErrors(["success" => "Tokens Purchased Successfully. $" . $price . " has been deducted from your card."]);
        }

        return back()->withErrors(["error" => $response->getMessage()]);
    }

    public function history(){
        switch(Auth::user()->role){
            case "admin":
                redirect("/home");
            case "advisor":
                redirect("/home");
            case "firm":
                return view("firm.tokens_history")->with(["page_title" => "Purchase History", "transactions" => Transaction::where('user', Auth::id())->get()->reverse()]);
        }
    }

    public function usage(){
        switch(Auth::user()->role){
            case "admin":
                redirect("/home");
            case "advisor":
                redirect("/home");
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
                return view("firm.tokens_usage")->with(["page_title" => "Tokens Usage History", "entries" => $reports ]);
        }
    }

    private function successfulTransaction($quantity, $rate){
        $transaction = new Transaction;
        $transaction->user = Auth::user()->id;
        $transaction->tokens = $quantity;
        $transaction->rate = $rate;
        $transaction->save();

        $user = Auth::user();
        $user->tokens_available = $user->tokens_available + $quantity;
        $user->save();
    }

    public static function getRate($quantity){
        $rates = PriceRange::all();
        $rates->last()->end = "∞";

        if(count($rates) == 1){
            foreach($rates as $rate)
                return $rate["rate"];
        }
        else if(count($rates) > 1){
            foreach($rates as $rate){
                if ($rate["end"] != "∞"){
                    if($quantity >= $rate["start"] && $quantity <= $rate["end"])
                        return $rate["rate"];
                }
                else{
                    if($quantity >= $rate["start"])
                        return $rate["rate"];
                }
            }
        }
    }

    public static function getCurrencies(){
        $json = file_get_contents("https://api.fixer.io/latest?base=AUD&symbols=USD,GBP,EUR");
        $json_data = json_decode($json, true)["rates"];
        $json_data["AUD"] = 1;
        ksort($json_data);
        return $json_data;
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'quantity' => 'required|numeric|min:1',
        ]);
    }
}

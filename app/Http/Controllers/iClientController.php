<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\iClient;
use Mail;
use App\Transaction;
use Omnipay\Omnipay;
use Illuminate\Support\Facades\Validator;

class iClientController extends Controller
{
    public function index(){
        $subtotal = TokensController::getRate(1);
        $gst = $subtotal * 0.1;
        $price = $subtotal + $gst;
        $price = $price * 100;

        return view('iclient/register')->with(['price'=>$price]);
    }

    public function create(Request $request){
        $validator = $this->validator($request->all());
        if($validator->fails())
            return back()->withErrors($validator);

        $subtotal = TokensController::getRate(1);
        $gst = $subtotal * 0.1;
        $price = $subtotal + $gst;
        $price = round($price, 2);

        $gateway = Omnipay::create('Stripe');
        $gateway->setApiKey(env('STRIPE_PRIVATE_KEY', ''));
        $response = $gateway->purchase([
            'amount' => $price,
            'currency' => 'AUD',
            'token' => $request->stripeToken,
        ])->send();

        if($response->isSuccessful()) {
            $this->successfulTransaction($subtotal);

            $code = $this->create_report_code();

            $iClient = iClient::create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile_number,
                'code' => $code,
            ]);

            $this->sendiClientEmail($code, $request->email, $request->name);

            return redirect('/iclient/questioner/' . $code);
        }

        return back()->withErrors(["error" => $response->getMessage()]);
    }

    public function show($code){
        $data = iClient::where('code', $code)->get()->first();
        if($data == null)
            return "Error!";

        $score = ReportsController::getScore($data->response);

        $data->advisor_name = '';
        $data->firm_name = '';

        $data->individual_score = ReportsController::getIndividualScore($data->response);

        $data->part6 = ReportsController::getPart6Answer($data->response);
        $data->part7 = ReportsController::getPart7Answer($data->response);

        $data->subCatScores = ReportsController::partASubCatScores($data->response);

        // $pdf = PDF::loadView('reports.'.$score, ['data' => $data]);
        // return $pdf->inline();

        return view('reports.1122')->with(['data' => $data]);
        //return view('reports.'.$score)->with(['data' => $data]);
    }

    private function create_report_code(){
        while(true){
            $code = str_random(30);
            if(iClient::where('code', $code)->count() < 1)
                return $code;
        }
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:175',
            'email' => 'required|string|email|max:175',
            'mobile_number' => 'required|string|max:175',
        ]);
    }

    private function successfulTransaction($rate){
        $transaction = new Transaction;
        $transaction->user = 0;
        $transaction->tokens = 1;
        $transaction->rate = $rate;
        $transaction->save();
    }

    function sendiClientEmail($code, $email, $name){
        Mail::send('email.newiClientReport', ["code" => $code, "client" => $name], function($message) use ($email, $name){
            $message->to($email, $name)
                ->subject('Investor DNA Questionnaire');
        });
    }
}

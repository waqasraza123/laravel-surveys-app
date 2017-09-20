<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(!Auth::user()->status){
            $role = Auth::user()->role;
            Auth::logout();
            switch($role){
                case "firm":
                    return back()->withErrors(['error'=>'You have been registered Successfully & Verification link has been sent to your email id. Kindly verify to login.']);
                case "advisor":
                    return back()->withErrors(['error'=>'You have been registered Successfully & Admin has been informed. You will be able to login after Admin approval.']);
            }
        }

        switch(Auth::user()->role){
            case "admin":
                return view('admin.home')->with(["code" =>  "Administrator"]);
            case "firm":
                return view('firm.home')->with(["code" =>  Auth::user()->code]);
            case "advisor":
                return view('home')->with(["code" =>  Auth::user()->firm_code]);
        }
    }

    public function thankYou() {
        switch(Auth::user()->role){
            case "admin":
                return view('home');
            case "firm":
                return view('auth.thankyou_firm');
            case "advisor":
                return view('auth.thankyou_advisor');
        }
    }



}

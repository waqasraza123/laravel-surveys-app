<?php

namespace App\Http\Controllers;

use Auth;
use Carbon;
use app\User;
use App\Report;
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


    //Logout
    public function performLogout(Request $request) {
        Auth::logout();
        return redirect('/logouta');
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
                return view('admin.home');
            case "firm":
                $data = array();
                $data["tokens_available"] = Auth::user()->tokens_available;
                $data["active_advisors"] = User::where(["role" => "advisor", "firm_code" => Auth::user()->code, "status" => true])->count();
                $data["pending_advisors"] = User::where(["role" => "advisor", "firm_code" => Auth::user()->code, "status" => false])->count();
                $data["latest_reports"] = $this->getFirmLatestReports();
                $data["top_advisors"] = $this->getFirmTopAdvisors();

                $data["completed_reports"] = 0;
                $advisors = User::where('firm_code', Auth::user()->code)->get();
                foreach($advisors as $advisor){
                    $data["completed_reports"] += Report::where(["advisor" => $advisor->id, "completed" => true])->count();
                }

                return view('firm.home')->with($data);
            case "advisor":

                return view('advisor.home');
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

    private function getFirmLatestReports(){
        $advisors = User::where('firm_code', Auth::user()->code)->get();
        $reports = collect();
        foreach($advisors as $advisor){
            $temps = Report::where(['advisor' => $advisor->id, "completed" => true])->get();
            if($temps->count() > 0){
                foreach($temps as $temp){
                    $temp->advisor_name = $advisor->name;
                    $reports->push($temp);
                }
            }
        }
        $reports = $reports->sortByDesc('updated_at');
        return $reports->slice(0, 5);;
    }

    private function getFirmTopAdvisors(){
        $advisors = User::where('firm_code', Auth::user()->code)->get();
        foreach($advisors as $advisor){
            $advisor["reports"] = Report::where(['advisor' => $advisor->id])->count();
        }
        $advisors = $advisors->sortBy('reports');
        return $advisors->slice(0, 6);;
    }



}

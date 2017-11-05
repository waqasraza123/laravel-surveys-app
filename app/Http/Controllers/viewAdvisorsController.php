<?php

namespace App\Http\Controllers;

use Auth;
use Mail;
use app\User;
use App\Report;
use Illuminate\Http\Request;

class viewAdvisorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function new()
    {


        switch(Auth::user()->role){
            case "admin":
                redirect("/home");
            case "firm":
                $advisors = User::where("role", "advisor")
                                ->where("firm_code", Auth::user()->code)
//                                ->where("firm_approved", false)
                                ->get()
                                ->toArray();


//                dd($advisors);

                return view("firm.advisors_new")->with(["page_title" => "New Advisors", "advisors" => $advisors]);
            case "advisor":
                redirect("/home");
        }
    }

    public function approved()
    {
        switch(Auth::user()->role){
            case "admin":
                redirect("/home");
            case "firm":
                $advisors = User::where("role", "advisor")
                                ->where("firm_code", Auth::user()->code)
                                ->where("firm_approved", true)
                                ->get()
                                ->toArray();
                foreach($advisors as $key => $value)
                    $advisors[$key]["total_reports"] = Report::where("advisor", $value["id"])->count();

                return view("firm.advisors_approved")->with(["page_title" => "Approved Advisors", "advisors" => $advisors]);
            case "advisor":
                redirect("/home");
        }
    }

    //Advisor approved by Firm
    public function firmApprove($id){
        $user = User::find($id);
        if($user->firm_code == Auth::user()->code){
            $user->firm_approved = true;
            $user->save();
        }
//        $this->sendVerifiedEmail($user);
        return back();
    }



    //Advisor approved by Admin
    public function approve($id){
        $user = User::find($id);
        if($user->firm_code == Auth::user()->code){
            $user->status = true;
            $user->save();
        }
        $this->sendVerifiedEmail($user);

        return back();
    }

    public function delete($id){
        User::where("id", $id)
            ->where("firm_code", Auth::user()->code)
            ->delete();

        return back();
    }

    function sendVerifiedEmail($user){
        Mail::send('email.verified', [], function($message) use ($user){
            $message->to($user->email, $user->name)
                ->subject('Account Verified');
        });
    }
}

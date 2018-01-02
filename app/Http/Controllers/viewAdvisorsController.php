<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use app\User;
use App\Report;
use Illuminate\Http\Request;

class viewAdvisorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => [
            'validatePracticeCode'
        ]]);
    }

    public function new()
    {
        switch(Auth::user()->role){
            case "admin":
                $advisors = User::where("role", "advisor")
                    ->where("firm_approved", false)
                    ->get()
                    ->toArray();

                return view("firm.advisors_new")->with(["page_title" => "New Advisors", "advisors" => $advisors]);
            case "firm":
                $advisors = User::where("role", "advisor")
                                ->where("firm_code", Auth::user()->code)
                                ->where("status", false)
                                ->get()
                                ->toArray();

                return view("firm.advisors_new")->with(["page_title" => "New Advisors", "advisors" => $advisors]);
            case "advisor":
                return redirect("/home");
        }
    }

    public function approved()
    {
        switch(Auth::user()->role){
            case "admin":
                $advisors = User::where("role", "advisor")
                    ->where("status", true)
                    ->get()
                    ->toArray();
                foreach($advisors as $key => $value)
                    $advisors[$key]["total_reports"] = Report::where("advisor", $value["id"])->count();

                return view("firm.advisors_approved")->with(["page_title" => "Approved Advisors", "advisors" => $advisors]);
            case "firm":
                $advisors = User::where("role", "advisor")
                                ->where("firm_code", Auth::user()->code)
                                ->where("status", true)
                                ->get()
                                ->toArray();
                foreach($advisors as $key => $value)
                    $advisors[$key]["total_reports"] = Report::where("advisor", $value["id"])->count();

                return view("firm.advisors_approved")->with(["page_title" => "Approved Advisors", "advisors" => $advisors]);
            case "advisor":
                return redirect("/home");
        }
    }





    //Advisor approved by Firm
    public function firmApprove($id){
        $user = User::find($id);

        if(Auth::user()->role == 'admin'){
            $user->firm_approved = true;
            $user->save();
        }

        elseif($user->firm_code == Auth::user()->code){
            $user->status = true;
            $user->save();
        }
        $this->sendVerifiedEmail($user);
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

    /**
     * edit adviser details
     *
     * @param $id
     */
    public function editAdviser($id){

        $adviser = User::find($id);

        return view('advisor.edit-adviser')->with($adviser->toArray());
    }


    /**
     * update the advisers
     *
     * @param Request $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateAdviser(Request $request, $id){
        $this->validate($request, [
            'name' => 'required|string|min:3',
            'company_position' => 'required|string|max:175',
            'mobile_number' => 'required|string|max:175'
        ]);

        $userRole = Auth::user()->role;

        if ($userRole == 'admin'){
            $adviser = User::where('id', $id)
                ->where("role", "advisor")
                ->first();
        }
        elseif ($userRole == 'firm'){
            $adviser = User::where('id', $id)
                ->where("role", "advisor")
                ->where("firm_code", Auth::user()->code)
                ->first();
        }

        $adviser->name = $request->input('name');
        $adviser->company_position = $request->input('company_position');
        $adviser->mobile_number = $request->input('mobile_number');
        $adviser->save();

        return back()->withErrors(['profileUpdated'=>'Profile Updated Successfully']);
    }


    /**
     * update the adviser password
     *
     * @param Request $request
     * @param $id
     * @return $this
     */
    public function updateAdviserPassword(Request $request, $id){
        $this->validate($request, [
            'password' => 'required|string|min:8|max:175|regex:/^(?=.*[A-Z])(?=.*[0-9])(?=.*\d).+$/|confirmed',
        ]);

        $userRole = Auth::user()->role;

        if ($userRole == 'admin'){
            $adviser = User::where('id', $id)
                ->where("role", "advisor")
                ->first();
        }
        elseif ($userRole == 'firm'){
            $adviser = User::where('id', $id)
                ->where("role", "advisor")
                ->where("firm_code", Auth::user()->code)
                ->first();
        }

        $adviser->password = bcrypt($request->input('password'));
        $adviser->save();

        return back()->withErrors(['profileUpdated'=>'Password Updated Successfully']);
    }


    /**
     * validate practice code while registration
     *
     * @param Request $request
     * @return int|mixed
     */
    public function validatePracticeCode(Request $request){
        $check = DB::table('users')->where('code', $request->input('firm_code'))
            ->where('role', 'firm')
            ->first();
        if($check){
            return $check->firm_name;
        }
        else{
            return 0;
        }

    }
}

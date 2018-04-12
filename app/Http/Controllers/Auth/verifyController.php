<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;


class verifyController extends Controller
{
    public function index($code){
        $user = User::where("confirmation_code", $code)->first();

        $id = $user->id;

        if($user != null){
            $user->status = true;
            $user->confirmation_code = "";
            $user->save();

            $this->sendWelcomeEmail($id);

            Auth::login($user, true);

            return redirect("/home");
        }

        return redirect("/");
    }



    function sendWelcomeEmail($id){

        $user = User::where('id', $id)->first();

        Mail::send('email.welcomeEmail', ["user" => $user], function($message) use ($user){
            $message->to($user->email, $user->name)
                ->subject('Welcome');
        });
    }

}

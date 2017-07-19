<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class verifyController extends Controller
{
    public function index($code){
        $user = User::where("confirmation_code", $code)->first();
        
        if($user != null){
            $user->status = true;
            $user->confirmation_code = "";
            $user->save();
            Auth::login($user, true);
            return redirect("/home");
        }

        return redirect("/");
    }
}

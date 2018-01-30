<?php

namespace App\Http\Controllers\Auth;

use Mail;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/thank-you';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        switch($data['role']){
            case "advisor":
                return Validator::make($data, [
                    'name' => 'required|string|max:175',
                    'email' => 'required|string|email|max:175|unique:users',
                    'password' => 'required|string|min:6|max:175|confirmed',
                    'company_position' => 'required|string|max:175',
                    'mobile_number' => 'required|string|max:175',
                    'role' => 'required|string|max:175',
                    'firm_code' => 'exists:users,code|max:6|min:6',
                    'password' => 'required|string|min:8|max:175|regex:/^(?=.*[A-Z])(?=.*[0-9])(?=.*\d).+$/|confirmed',

                ]);

            case "firm":
                return Validator::make($data, [
                    'name' => 'required|string|max:175',
                    'email' => 'required|string|email|max:175|unique:users',
                    'password' => 'required|string|min:6|max:175|confirmed',
                    'company_position' => 'required|string|max:175',
                    'mobile_number' => 'required|string|max:175',
                    'role' => 'required|string|max:175',
                    'firm_name' => 'string|max:175',
                    'address' => 'string|max:175',
                    'suburb' => 'string|max:175',
                    'state' => 'string|max:175',
                    'postcode' => 'string|max:175',
                    'firm_website' => 'string|max:175',
                    'firm_phone' => 'string|max:175',
                    'password' => 'required|string|min:10|max:175|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/|confirmed',

                ]);

            case "iclient":
                return Validator::make($data, [
                    'name' => 'required|string|max:175',
                    'email' => 'required|string|email|max:175|unique:users',
                    'password' => 'required|string|min:6|max:175|confirmed',
                    'mobile_number' => 'required|string|max:175',
                    'role' => 'required|string|max:175',
                    'password' => 'required|string|min:10|max:175|regex:/^(?=.*[A-Z])(?=.*[0-9])(?=.*\d).+$/|confirmed',

                ]);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        if($data['role'] == "advisor"){
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'company_position' => $data['company_position'],
                'mobile_number' => $data['mobile_number'],
                'role' => $data['role'],
                'firm_code' => $data['firm_code'],
            ]);

            $this->sendEmailToFirm($user, $data['firm_code']);
            $this->sendAdminNotificationAdvisor($user, $data['firm_code']);

            return $user;
        }

        else if($data['role'] == "firm"){
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'company_position' => $data['company_position'],
                'mobile_number' => $data['mobile_number'],
                'role' => $data['role'],
                'confirmation_code' => str_random(30),
                'code' => $this->create_firm_code(),
                'firm_name' => $data['firm_name'],
                'address' => $data['address'],
                'suburb' => $data['suburb'],
                'state' => $data['state'],
                'postcode' => $data['postcode'],
                'firm_website' => $data['firm_website'],
                'firm_phone' => $data['firm_phone'],
            ]);

            $this->sendConfirmationEmail($user);
            $this->sendEmailToAdmins($user);

            return $user;
        }

        else if($data['role'] == "iclient"){
            $user = User::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
                'company_position' => $data['company_position'],
                'mobile_number' => $data['mobile_number'],
                'role' => $data['role'],
                'confirmation_code' => str_random(30),
            ]);

            $this->sendConfirmationEmail($user);

            return $user;
        }
    }




    // Email to Website Admin
    function sendAdminNotificationAdvisor($user){
        Mail::send('email.adminNotificationAdvisor', ["name" => $user->name], function($message) use ($user){
            $message->to('aaron@learnerlibrary.com')
                ->subject('New Adviser Registered');
        });
    }

    function sendConfirmationEmail($user){
        Mail::send('email.verify', ["name" => $user->name, "confirmation_code" => $user->confirmation_code], function($message) use ($user){
            $message->to($user->email, $user->name)
                ->subject('Please verify your email address');
        });
    }

    function sendEmailToAdmins($user){
        $admins = User::where("role", "admin")->get();
        foreach($admins as $admin){
            Mail::send('email.notify', ["name" => $user->name, "email" => $user->email], function($message) use ($admin){
                $message->to($admin->email, $admin->name)
                    ->subject('New Firm Registered');
            });
        }
    }

    function sendEmailToFirm($user, $code){
        $firm = User::where("code", $code)->first();
        $firmName = $firm->name;
        Mail::send('email.newAdvisor', ["name" => $user->name, "email" => $user->email, 'firmName' => $firmName], function($message) use ($firm){
            $message->to($firm->email, $firm->name)
                ->subject('New Advisor Registered');
        });
    }

    function create_firm_code(){
        while(true){
            $code = "FP" . rand(1000,9999);
            if(User::where('code', $code)->count() < 1)
                return $code;
        }
    }
}

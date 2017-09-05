<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class profileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        switch(Auth::user()->role){
            case "admin":
                return view('admin.profile')->with(Auth::user()->toArray());
            case "firm":
                return view('firm.profile')->with(Auth::user()->toArray());
            case "advisor":
                return view('advisor.profile')->with(Auth::user()->toArray());
        }
    }

    public function update(Request $request){
        $validator = $this->validator($request->all());
        if($validator->fails())
            return back()->withErrors($validator)->with(Auth::user()->toArray());

        $user = Auth::user();

        switch(Auth::user()->role){
            case "admin":
                $user->name = $request->name;
                break;
            case "advisor":
                $user->name = $request->name;
                $user->company_position = $request->company_position;
                $user->mobile_number = $request->mobile_number;
                break;
            case "firm":
                $user->name = $request->name;
                $user->company_position = $request->company_position;
                $user->mobile_number = $request->mobile_number;
                $user->firm_name = $request->firm_name;
                $user->address = $request->address;
                $user->suburb = $request->suburb;
                $user->state = $request->state;
                $user->postcode = $request->postcode;
                $user->firm_website = $request->firm_website;
                $user->firm_phone = $request->firm_phone;
                break;
        }

        $user->save();


        return back()->with(Auth::user()->toArray())->withErrors(['profileUpdated'=>'Profile Updated Successfully']);
    }

    public function updatePassword(Request $request){
        $validator = $this->passwordValidator($request->all());
        if($validator->fails())
            return back()->withErrors($validator)->with(Auth::user()->toArray());

        $user = Auth::user();
        $user->password = bcrypt($request->password);
        $user->save();

        return back()->with(Auth::user()->toArray())->withErrors(['passwordChanged'=>'Password Changed Successfully']);
    }

    protected function validator(array $data)
    {
        switch(Auth::user()->role){
            case "admin":
                return Validator::make($data, [
                    'name' => 'required|string|max:175',
                ]);
            case "advisor":
                return Validator::make($data, [
                    'name' => 'required|string|max:175',
                    'company_position' => 'required|string|max:175',
                    'mobile_number' => 'required|string|max:175',
                    'firm_code' => 'exists:users,code|max:5|min:5',
                ]);

            case "firm":
                return Validator::make($data, [
                    'name' => 'required|string|max:175',
                    'company_position' => 'required|string|max:175',
                    'mobile_number' => 'required|string|max:175',
                    'firm_name' => 'string|max:175',
                    'address' => 'string|max:175',
                    'suburb' => 'string|max:175',
                    'state' => 'string|max:175',
                    'postcode' => 'string|max:175',
                    'firm_website' => 'string|max:175',
                    'firm_phone' => 'string|max:175',
                ]);
        }
    }

    protected function passwordValidator(array $data){
        return Validator::make($data, [
            'password' => 'required|string|min:6|max:175|confirmed',
        ]);
    }
}

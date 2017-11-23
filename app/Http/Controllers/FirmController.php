<?php

namespace App\Http\Controllers;

use App\Report;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FirmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role != 'admin'){
            return redirect()->back();
        }

        $firms = User::where('role', 'firm')->get()->toArray();
        foreach($firms as $key => $value){
            $currentAdvisorsIds = User::where('firm_code', $value['code'])
                ->where('role', 'advisor')->pluck('id')->toArray();

            $firms[$key]["total_reports"] = Report::whereIn("advisor", $currentAdvisorsIds)->count();
        }

        return view("admin.index-firms")->with(["page_title" => "All Firms", "firms" => $firms]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.firm.edit-firm')->with(User::find($id)->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:175',
            'company_position' => 'required|string|max:175',
            'mobile_number' => 'required|string|max:175',
            'firm_name' => 'nullable|string|max:175',
            'address' => 'nullable|string|max:175',
            'suburb' => 'nullable|string|max:175',
            'state' => 'nullable|string|max:175',
            'postcode' => 'nullable|string|max:175',
            'firm_website' => 'nullable|string|max:175',
            'firm_phone' => 'nullable|string|max:175',
        ]);

        $user = User::find($id);
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
        $user->save();

        return back()->with($user->toArray())->withSuccess('Profile Updated Successfully');
    }


    /**
     * @param Request $request
     * @param $id
     * @return $this
     */
    public function passwordUpdate(Request $request, $id){
        $this->validate($request, [
            'password' => 'required|string|min:8|max:175|regex:/^(?=.*[A-Z])(?=.*[0-9])(?=.*\d).+$/|confirmed',
        ]);

        $adviser = User::where('id', $id)
            ->where("role", "firm")
            ->first();
        $adviser->password = bcrypt($request->input('password'));
        $adviser->save();

        return back()->withSuccess('Password Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $firm = User::find($id);
        $advisors = User::where('firm_code', $firm->code)
            ->where('role', 'advisor')
            ->pluck('id')
            ->toArray();

        User::whereIn('id', $advisors)->delete();
        $firm->delete();

        return back();
    }
}

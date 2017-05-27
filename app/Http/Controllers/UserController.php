<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.profile');
    }

    /**
     *  Password Reset View
     *
    */
    public function passwordResetView()
    {
        return view('dashboard.password-reset');
    }



    /**
     * Handles Password Reset
     *
     */
    public function passwordReset(Request $request,$id)
    {
        $this->validate($request,[
            'password' => 'required|min:6|confirm'
        ]);

        $user = User::find($id);
        $user->password = bcrypt($request->input('password'));

        if ($user->save())
        {
            return redirect()->back()->with('alert','Your password has been changed successfully');
        }else{
            return redirect()->back()->withErrors($validator);
        }
    }

    /**
     *  Shows all Customers Info
     *
     */
    public function allCustomers()
    {
        $users= DB::table('users')->select('*')->where('status','==','2')->paginate(20);
        return view('dashboard.customers',['users',Auth::User()])->with('users',$users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('dashboard.profile',['users',Auth::User()])->with('user',$user);
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
        $this->validate($request,[
            'full_name' => 'required|string|max:255',
            'username' => 'required|string|min:15|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile_number'=> 'max:255|unique:users|num',
            'your_location'=>'required',
        ]);

        $user = User::find($id);

        $user->fullname = $request->input('full_name');
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->mobile_number = $request->input('mobile_number');
        $user->date_of_birth = $request->input('date_of_birth');
        $user->your_location = $request->input('your_location');

        if ($user->save())
        {
            return redirect()->back()->with('alert','Your data has been saved successfully');
        }else{
            return redirect()->back()->withErrors($validator);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

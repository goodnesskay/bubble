<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class UserController extends Controller
{

    /**
     *  Password Reset View
     *
    */
    public function passwordResetView($id)
    {
        $user = User::find($id);
        return view('dashboard.password-reset',['users',Auth::User()])->with('user',$user);
    }



    /**
     * Handles Password Reset
     *
     */
    public function passwordReset(Request $request,$id)
    {
        $this->validate($request,[
            'password' => 'required|min:6|confirmed'
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
            'full_name' => 'required|string',
            'username' => 'required|string|max:15|distinct',
            'email' => 'required|string|email|max:255|distinct',
            'mobile_number'=> 'distinct|numeric',
            'date_of_birth'=> 'required',
            'your_location'=>'required',
        ]);

        $user = User::find($id);

        $user->full_name = $request->input('full_name');
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

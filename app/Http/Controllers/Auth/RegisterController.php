<?php

namespace App\Http\Controllers\Auth;

use App\Mail\Registeration;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
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
    protected $redirectTo = '/home';

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
        return Validator::make($data, [
            'full_name' => 'required|string|max:255',
            'username' => 'required|string|max:15|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'mobile_number'=> 'unique:users|numeric',
            'status'=>'required',
            'password' => 'required|string|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'mobile_number'=> $data['mobile_number'],
            'status'=> $data['status'],
            'password' => bcrypt($data['password']),
        ]);

        $email = $data['email'];
        // Mail upon successful registration
        Mail::to($email)->send(new Registeration($user));
        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message) use ($attach)
        {

            $message->from('me@gmail.com', 'Christian Nwamba');

            $message->to('chrisn@scotch.io');

            //Attach file
            $message->attach($attach);

            //Add a subject
            $message->subject("Hello from Scotch");

        });
    }
}

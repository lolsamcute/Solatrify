<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Mail\RegistrationNotification;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

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
    protected $redirectTo = '/auth/unverified';

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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'referenceId' => 'required',
            'business_name' => 'required',
            'business_type' => 'required',
            'number' => 'required|min:11|numeric',
            'address' => 'required',
            'state' => 'required',
             'location' => 'required',
            'agreement' => 'required',
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User 
     */
    protected function create(array $data)
    {
        
        return User::create([
     
            'full_name' => $data['full_name'],
            'email' => $data['email'],
            'business_name' => $data['business_name'],
            'business_type' => $data['business_type'],
            'number' => $data['number'],
            'role_id' => $data['role_id'],
            'address' => $data['address'],
            'state' => $data['state'],
             'location' => $data['location'],
            'agreement' => $data['agreement'],
            'password' => Hash::make($data['password']),
            'referenceId' => str_random(7),
        ]);
        
        $full_name = $request['full_name'];
        $email = $request['email'];
        $password = $request['password'];
       
         Mail::to($request['email'])->send(new RegistrationNotification($full_name, $email, $password));

            return $user;
        
        //   return view('/auth/unverified');

    }
}

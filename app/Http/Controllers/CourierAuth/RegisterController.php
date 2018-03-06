<?php

namespace App\Http\Controllers\CourierAuth;

use App\Courier;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
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
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/courier';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('courier.guest');
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:couriers',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Courier
     */
    protected function create(array $data)
    {
        $user = Courier::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'image'=>'couriers/img/upload/ijbbBi7sIVF2wrr2SsDerIc96study-in-usa.jpeg',
            'active'=>1
        ]);
       
        foreach ($data['days'] as $k) {
          \App\day_user::create(array('courier_id' => $user->id, 'day_id' => $k));
        }
        
        
        \App\Option::firstOrCreate(['courier_id'=>$user->id,'header'=>'bg-gradient-9']);

        \App\CourierPayment::create(['paid_on'=>Carbon::now(),'expired_at'=>Carbon::now()->addMonths(2),'courier_id' => $user->id,'amount'=>0.00,'months'=>2]);

        return $user;
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('courier.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('courier');
    }
}

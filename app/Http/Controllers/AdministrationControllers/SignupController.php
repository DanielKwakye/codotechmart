<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shop;
use DB;
use Hash;
<<<<<<< HEAD
use Mail;
use Session;
=======
use Session;
use Auth;
>>>>>>> d1b5218c53c2d1624f06b5566fa3db10e85e3951
use App\Slydepay\Slydepay;

class SignupController extends Controller
{
    //
    public function index(){
    	return view('administration.signup');
    }

    public function sendMail(Request $r){
    	$token = str_random(5);
<<<<<<< HEAD
    	 Mail::send('emails.verifytoken', ['token' => $token], function ($m) use ($r) {
            $m->from('shopwithvim@gmail.com', 'Shop with Vim');
            $m->to($r->email,'')->subject('Verify Token');
          });
         Session::put('token',$token);
    	return ['status'=>'success','token'=>$token];
=======
    	//send mail here
        $sendmessage = true;
        if($sendmessage){
            Session::put('token',$token);
           return ['status'=>'success','token'=>$token]; 
        }
    	
    }

    public function validateToken(Request $r){
       if($r->token==Session::get('token')){
        Session::forget('token');
        return ['status'=>'success'];
       }else{
        return ['status'=>'error'];
       }
>>>>>>> d1b5218c53c2d1624f06b5566fa3db10e85e3951
    }

    public function validateEmail(Request $r){

    }

    
    public function addNewShop(Request $r){
        $addnewstore = Shop::create([
            'name'=>$r->storename,
            'phone'=>$r->phone,
            'type'=>$r->type,
            'latitude'=>$r->latitude,
            'longitude'=>$r->longitude,
            'creator_surname'=>$r->surname,
            'creator_firstname'=>$r->firstname,
            'creator_email'=>$r->email,
            'region'=>$r->region,
            'active'=>1
        ]);
        if($addnewstore){
            $addtoadmin = DB::table('shopadmins')->insert([
                'username'=>$r->username,
                'email'=>$r->email,
                'password'=>Hash::make($r->password),
                'shop_id'=>$addnewstore->id
            ]);
<<<<<<< HEAD
            //Auth::guard('shopadmin')->attempt(['email' => $r->email, 'password' => Hash::make($r->password)]);
=======
            Auth::guard('shopadmin')->attempt(['email' => $r->email, 'password' => Hash::make($r->password)]);
>>>>>>> d1b5218c53c2d1624f06b5566fa3db10e85e3951
            $addbranch = DB::table('branches')->insert([
                'shop_id'=>$addnewstore->id,
                'name'=>$r->storename,
                'description'=>'',
                'image'=>'',
                'active'=>1,
                'latitude'=>$r->latitude,
                'longitude'=>$r->longitude,
                'landmark'=>''
            ]);
<<<<<<< HEAD
            return ['status'=>'success','responseurl'=>url('/administration/login')];
=======
            return ['status'=>'success','responseurl'=>url('/administration/dashboard')];
>>>>>>> d1b5218c53c2d1624f06b5566fa3db10e85e3951
        }else{

        }

    }

    public function slydepay(){
      $add = new Slydepay();
    }
}

<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shop;
use DB;
use Hash;
use Mail;
use Session;
use App\Slydepay\Slydepay;

class SignupController extends Controller
{
    //
    public function index(){
    	return view('administration.signup');
    }

    public function sendMail(Request $r){
    	$token = str_random(5);
    	 Mail::send('emails.verifytoken', ['token' => $token], function ($m) use ($r) {
            $m->from('shopwithvim@gmail.com', 'Shop with Vim');
            $m->to($r->email,'')->subject('Verify Token');
          });
         Session::put('token',$token);
    	return ['status'=>'success','token'=>$token];
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
            //Auth::guard('shopadmin')->attempt(['email' => $r->email, 'password' => Hash::make($r->password)]);
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
            return ['status'=>'success','responseurl'=>url('/administration/login')];
        }else{

        }

    }

    public function slydepay(){
      $add = new Slydepay();
    }
}

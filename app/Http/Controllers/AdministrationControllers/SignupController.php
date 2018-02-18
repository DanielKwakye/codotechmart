<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shop;
use DB;
use Hash;
use App\Slydepay\Slydepay;

class SignupController extends Controller
{
    //
    public function index(){
    	return view('administration.signup');
    }

    public function sendMail(){
    	$token = str_random(5);
    	//send mail here
    	return ['status'=>'success','token'=>$token];
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
            'active'=>1
        ]);
        if($addnewstore){
            $addtoadmin = DB::table('shopadmins')->insert([
                'username'=>$r->username,
                'email'=>$r->email,
                'password'=>Hash::make($r->password),
                'shop_id'=>$id
            ]);
            return redirect('/administration/category');
        }

    }

    public function slydepay(){
      $add = new Slydepay();
    }
}

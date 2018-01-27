<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shop;
use DB;
use Hash;

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
        //return $r->all();
    	$id = mt_rand(10000,999999);
        $addnewstore = Shop::create([
            'id'=>$id,
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
}

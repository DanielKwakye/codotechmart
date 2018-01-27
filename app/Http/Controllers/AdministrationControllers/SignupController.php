<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    	$id = mt_rand(100000000000,999999999999);
    }
}

<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shop;
use DB;
use Auth;
use Session;


class PaymentMethodController extends Controller
{
    public function index(){
    	$type = Shop::where('id',Auth::guard('shopadmin')->user()->shop_id)->first()->payment_method;
    	// switch ($type) {
    	// 	case 'h':
    		
    	// 		break;
    		
    	// 	default:
    	// 		# code...
    	// 		break;
    	// }
        return view('administration.products.payment',compact('type'));
    }

    public function savePaymentMethod(Request $r){
    	$updateshop = Shop::where('id',Auth::guard('shopadmin')->user()->shop_id)->update(['payment_method'=>$r->type]);
    	switch ($r->type) {
    		case 'h':
    			 $check = DB::table('hubteldetails')->where('shop_id',Auth::guard('shopadmin')->user()->shop_id)->first();
    			 if($check===null){
    			 	DB::table('hubteldetails')->insert([
 					'shop_id'=>Auth::guard('shopadmin')->user()->shop_id,
 					'client_id'=>$r->client_id,
 					'client_secret'=>$r->client_secret,
 					'merchant_key'=>$r->merchant_key
    			]);
    			 }else{
    			 	DB::table('hubteldetails')->where('shop_id',Auth::guard('shopadmin')->user()->shop_id)->update([
 					'client_id'=>$r->client_id,
 					'client_secret'=>$r->client_secret,
 					'merchant_key'=>$r->merchant_key
    			]);
    			 }
    			Session::flash('success-message','Payment Method Saved Successfully');
    			return back();
    			break;
    		case 's':
    			 $check = DB::table('slydepaydetails')->where('shop_id',Auth::guard('shopadmin')->user()->shop_id)->first();
    			 if($check===null){
    			 	DB::table('slydepaydetails')->insert([
 					'shop_id'=>Auth::guard('shopadmin')->user()->shop_id,
 					'merchant_email'=>$r->merchant_email,
 					'merchant_key'=>$r->merchant_key
    			]);
    			 }else{
    			 	DB::table('slydepaydetails')->where('shop_id',Auth::guard('shopadmin')->user()->shop_id)->update([
 					'merchant_email'=>$r->merchant_email,
 					'merchant_key'=>$r->merchant_key
    			]);
    			 }
    			Session::flash('success-message','Payment Method Saved Successfully');
    			return back();
    			break;
    		case 'm':
    			 $check = DB::table('mazumadetails')->where('shop_id',Auth::guard('shopadmin')->user()->shop_id)->first();
    			 if($check===null){
    			 	DB::table('mazumadetails')->insert([
 					'shop_id'=>Auth::guard('shopadmin')->user()->shop_id,
 					'api_key'=>$r->api_key,
 					'recipient_number'=>$r->recipient_number
    			]);
    			 }else{
    			 	DB::table('mazumadetails')->where('shop_id',Auth::guard('shopadmin')->user()->shop_id)->update([
 					'api_key'=>$r->api_key,
 					'recipient_number'=>$r->recipient_number
    			]);
    			 }

    			Session::flash('success-message','Payment Method Saved Successfully');
    			return back();
    			break;
    		default:
    			return back();
    			break;
    	}
    }

   
}

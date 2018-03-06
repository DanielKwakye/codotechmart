<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use DB;
use Auth;

class DashboardController extends Controller
{
    //

    public function index(){
       // return Auth::guard('shopadmin')->user();
       $shopdetails = DB::table('shops')->where('id',Auth::guard('shopadmin')->user()->shop_id)->first();
    	return view('administration.products.dashboard',compact('shopdetails'));
    }

}

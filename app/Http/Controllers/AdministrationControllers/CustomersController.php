<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Order;
use Session;

class CustomersController extends Controller
{
    //
     public function customerList(){
          $customers = Order::with('user')->where('branch_id',Auth::guard('shopadmin')->user()->shop_id)->get();
           return view('administration.products.customers',compact('customers'));
     }

     public function sendSmsToCustomer(Request $r){
         //send sms here

        return ['status'=>'success'];
     }

     public function sendEmailToCustomers(Request $r){
         //send email here
        return ['status'=>'success'];
     }
}

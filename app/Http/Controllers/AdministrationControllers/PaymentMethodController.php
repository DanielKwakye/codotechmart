<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;


class PaymentMethodController extends Controller
{
    public function index(){
        $paymentmethods = DB::table('paymentmethod')->get();
        return view('administration.products.payment',compact('paymentmethods'));
    }

   
}

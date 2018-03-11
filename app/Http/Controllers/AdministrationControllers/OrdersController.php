<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use App\Order;

class OrdersController extends Controller
{
    //

    public function index(){
    	 $orders = Order::all();
         return view('administration.products.orders');
    }

}

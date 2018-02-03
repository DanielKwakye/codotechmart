<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Product;

class ProductsController extends Controller
{
    //
    public function index(){
    	return view('administration.products.addproduct');
    }

   
}

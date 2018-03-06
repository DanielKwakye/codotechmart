<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use Auth;
use Session;

class ProductsController extends Controller
{
    //
    public function index(){
    	return view('administration.products.addproduct');
    }

    public function addNewProduct(Request $r){
    	 $add = Product::create([
    	'shop_id'=>Auth::guard('shopadmin')->user()->shop_id,
    	 'name'=>$r->name,
    	 'description'=>$r->description,
    	 'category_id'=>$r->parent_id,
    	 'quantity'=>$r->quantity0,
    	 'minimum'=>$r->minimum,
    	 'type'=>$r->producttype,
    	 'availability'=>$r->availability,
    	 'barcode'=>$r->barcode,
    	 'condition'=>$r->condition,
    	 'mainimage'=>'',
    	 'price'=>$r->price
    	]);
    	if($add){
    		Session::flash('success-message','New Product Added Successfully');
    		return back();
    	}else{
    		Session::flash('error-message','Error Adding New Product.. Try Again');
    		return back();
    	}

    }

    public function productList(){
        $products = Product::all();
        return view('administration.products.productlist',compact('products'));
    }

    public function deleteproduct(Request $r){
        $del = Product::find($r->id)->delete();
        if($del){
             return ['status'=>'success']; 
         }else{
            return ['status'=>'error'];
         }
      
    }

   
}

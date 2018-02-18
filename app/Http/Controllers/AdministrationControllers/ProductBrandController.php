<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ProductBrand;
use Session;

class ProductBrandController extends Controller
{
    //
    public function index(){
    	$brand = ProductBrand::all();
    	return view('administration.products.brand',compact('brand'));
    }

    public function addBrand(Request $r){
    	$add = ProductBrand::create([
    		'name'=>$r->name,
    		'image'=>'',
    		'description'=>$r->description
    	]);
    	if($add){
    		Session::flash('success-message','New Brand Added');
    		return back();
    	}else{
    		Session::flash('error-message','Error Adding New Brand.Try Again');
    		return back();
    	}
    }

     public function deleteBrand(Request $r){      
    	$del = ProductBrand::find($r->id)->delete();
    	if($del){
    		return ['status'=>'success'];
    	}else{
    		return ['status'=>'error'];
    	}
    }

    public function editBrand(Request $r){
    	$update = ProductBrand::find($r->id)->update([
    		'name'=>$r->name,
    		'image'=>'',
    		'description'=>$r->description
    	]);

    	if($update){
    		Session::flash('success-message','Brand Updated Added');
    		return back();
    	}else{
    		Session::flash('error-message','Error Updating Brand.Try Again');
    		return back();
    	}
    }

   
}
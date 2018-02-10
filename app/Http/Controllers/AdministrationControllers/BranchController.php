<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Branch;
use Session;

class BranchController extends Controller
{
    //

    public function index(){
    	$branches = Branch::all();
    	return view('administration.products.allbranches',compact('branches'));
    }

    public function addNewBranch(){
    	return view('administration.products.addnewbranch');
    }

    public function saveBranch(Request $r){
    	$add = Branch::create([
    		'name'=>$r->name,
    		'shop_id'=>Auth::guard('shopadmin')->user()->shop_id,
    		'description'=>$r->description,
    		'image'=>'',
    		'active'=>$r->active,
    		'latitude'=>$r->latitude,
    		'longitude'=>$r->longitude,
    		'landmark'=>$r->landmark
    	]);
    	if($add){
    		Session::flash('success-message','New Branch Added Successfully');
    		return back();
    	}else{
    		Session::flash('error-message','Error Adding New Branch');
    		return back();
    	}
    }

    public function branchDetails($id){
    $branch = Branch::first();
    return view('administration.products.branchdetails',compact('branch'));
    }
}

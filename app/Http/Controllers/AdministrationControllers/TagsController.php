<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tag;
use Session;

class TagsController extends Controller
{
    //
    public function index(){
    	$tags = Tag::get(['id','name','description']);
    	return view('administration.products.tags',compact('tags'));
    }

    public function addNewTag(Request $r){
    	$add = Tag::create(['name'=>trim($r->name),'description'=>trim($r->description)]);
    	if($add){
    		Session::flash('success-message','New Tag Added Successfully');
    		return back();
    	}else{
    		Session::flash('error-message','Error Adding New Tag..Please Try Again');
    		return back();
    	}
    }

    public function deleteTag(Request $r){
    	$del = Tag::find($r->id)->delete();
    	if($del){
    		return ['status'=>'success'];
    	}else{
    		return ['status'=>'error'];
    	}
    }

    public function editTag(Request $r){
    	$update = Tag::find($r->id)->update(['name'=>trim($r->name),'description'=>trim($r->description)]);
    	if($update){
    		Session::flash('success-message','Tag Updated Successfully');
    		return back();
    	}else{
    		Session::flash('error-message','Error Updating Tag.. Please Try Again');
    		return back();
    	}
    }
}

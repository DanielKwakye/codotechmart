<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Category;
use Session;

class CategoryController extends Controller
{
    //

    public function index(){
    $category =  Category::with('childrenRecursive')->where('parent_id',0)->get();
    return view('administration.products.category',compact('category'));
    }

    public function addCategory(Request $r){
    	$addcategory = Category::create(['name'=>trim($r->name),'description'=>trim($r->description),'parent_id'=>$r->parent_id,'image'=>'']);
    	if($addcategory){
    		Session::flash('success-message','New Category Added');
    		return back();
    	} else{
    		Session::flash('error-message','Error Updating Category');
    		return back();
    	}
    }

    public function deleteCategory(Request $r){
        if(count(Category::find($r->id)->children()->get()) > 0){
            return ['status'=>'error'];
        }else{
    	$del = Category::find($r->id)->delete();
    	if($del){
    		return ['status'=>'success'];
    	}else{
    		return ['status'=>'error'];
    	}
    }
    }
}

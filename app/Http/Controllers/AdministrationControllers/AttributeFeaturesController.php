<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\ProductAttributes;
use Session;
class AttributeFeaturesController extends Controller
{
    public function index(){
      $attributes = ProductAttributes::with('values')->get();        
        return view('administration.products.attribute_features',compact('attributes'))->with('active','attribute');
    }

    public function addNewAttribute(Request $r){
      $add = ProductAttributes::create($r->all());
      if($add){
      	Session::flash('success-message','New '.ucfirst($r->type).' Added Successfully');
      	return back()->with('active',$r->type);
      }else{
      	Session::flash('error-message','An Error Occured whiles adding '.ucfirst($r->type).' Try Again');
      	return back()->with('active',$r->type);
      }
    }

    public function deleteAttribute($id){
    	$del = ProductAttributes::find($id)->delete();
    	if($del){
    		Session::flash('success-message','Item Deleted Successfully');
    		return back();
    	}else{
    		Session::flash('error-message','Error Deleting Item');
    		return back();
    	}
    }

    public function addValueToAttribute(Request $r){
    	 $add = DB::table('product_attributes_values')->insert(['attribute_id'=>$r->value_id,'value'=>$r->name]);
       if($add){
          Session::flash('success-message','New Value Added');
        return back();
       }else{
          Session::flash('error-message','Error Adding Value');
        return back();
       }
    }

    public function attributeDetails($id){
       $af = ProductAttributes::with('values')->where('id',$id)->first();
       return view('administration.products.attributedetails',compact('af'));
    }

    public function deleteValueOfAttributeOrFeature($id){
      $del = DB::table('product_attributes_values')->where('id',$id)->delete();
      if($del){
        Session::flash('success-message','Item Deleted Successfully');
        return back();
      }else{
        Session::flash('error-message','Error Deleting Item');
        return back();
      }
    }

    public function editAttributeFeatureValue(Request $r){
      $update = DB::table('product_attributes_values')->where('id',$r->value_id)->where('attribute_id',$r->attr_id)->update(['value'=>$r->name]);
      if($update){
        Session::flash('success-message','Item Updated Successfully');
        return back();
      }else{
        Session::flash('error-message','Error Updating Item');
        return back();
      }
    }

   
}

<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Shop;
use Auth;
use Session;

class GeneralSettingsController extends Controller
{
    //

    public function index(){
    	$generalsettings = Shop::where('id',Auth::guard('shopadmin')->user()->shop_id)->first();
    	return view('administration.products.generalsettings',compact('generalsettings'));
    }

    public function saveGeneralSettings(Request $r){
        $update = Shop::where('id',Auth::guard('shopadmin')->user()->shop_id)->update([
         'name'=>$r->name,
         'tag_line'=>$r->tag_line,
         'region'=>$r->region,
         'creator_surname'=>$r->creator_surname,
         'creator_firstname'=>$r->creator_firstname,
         'creator_email'=>$r->creator_email,
         'phone'=>$r->phone,
         'logo'=>'',
        ]);
        if($update){
            Session::flash('success-message','General Settings Updated');
            return back();
        }else{
            Session::flash('error-message','Error Updating General Settings');
            return back();
        }
    }

   
}

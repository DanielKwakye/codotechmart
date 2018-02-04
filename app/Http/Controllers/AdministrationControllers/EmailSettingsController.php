<?php

namespace App\Http\Controllers\AdministrationControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\EmailSettings;
use Auth;
use Session;

class EmailSettingsController extends Controller
{
    //

    public function index(){
    	$emailsettings = EmailSettings::where('shop_id',Auth::guard('shopadmin')->user()->shop_id)->first();
    	return view('administration.products.mailsettings',compact('emailsettings'));
    }

    public function saveEmailSettings(Request $r){
        $update = EmailSettings::where('shop_id',Auth::guard('shopadmin')->user()->shop_id)->update([
         'type'=>$r->type,
         'server'=>$r->servername,
         'port'=>$r->port,
         'username'=>$r->username,
         'password'=>$r->password,
         'encryption'=>$r->encryption
        ]);
        if($update){
            Session::flash('success-message','Email Settings Updated');
            return back();
        }else{
            Session::flash('error-message','Error Updating Email Settings');
            return back();
        }
    }

   
}

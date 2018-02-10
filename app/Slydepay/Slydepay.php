<?php
/**
* 
*/
namespace App\Slydepay;
use Auth;
use DB;
use App\Slydepay\Integrator;

class Slydepay extends Integrator{

  function __construct(){
    $this->setParams();
  }

  function setParams(){
  	  $details = DB::table('slydepaydetails')->where('shop_id',Auth::guard('shopadmin')->user()->shop_id)->first();
  	  $merchantEmail= $details->merchant_email;
      $merchantKey= $details->merchant_key;
	  $integrationmode=1;
	  $redirecturl= "https://app.slydepay.com.gh/payLIVE/detailsnew.aspx?pay_token=";
	  $wsdl='https://app.slydepay.com.gh/webservices/paymentservice.asmx?wsdl';
	  $namespace='http://www.i-walletlive.com/payLIVE';
	  $serviceType='C2B';
	  $version='1.4';

	  parent::__construct($namespace,$wsdl,$version,$merchantEmail,$merchantKey,$serviceType,$integrationmode);
	  var_dump($this->slyde);
  }




}
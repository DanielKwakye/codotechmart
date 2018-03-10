<?php

namespace App;

use Illuminate\Pipeline\Hub;
use Jowusu837\HubtelMerchantAccount\OnlineCheckout\Item;
use HubtelMerchantAccount;

class Hubtel{

    private $HUBTEL_MERCHANT_ACCOUNT_NUMBER;
    private $HUBTEL_MERCHANT_ACCOUNT_CLIENT_ID;
    private $HUBTEL_MERCHANT_ACCOUNT_CLIENT_SECRET;
    private $ocRequest;
    private $description = "";
    private $amount = 0;
    private $shop = "Shop With Vim";
    private $shopLogo;
    private $phone = "";
    private $postalAddress = "";
    private $tagline = "";
    private $websiteUrl;
    private $cancelUrl;
    private $returnUrl;

    /**
     * Hubtel constructor.
     * @param $HUBTEL_MERCHANT_ACCOUNT_NUMBER
     * @param $HUBTEL_MERCHANT_ACCOUNT_CLIENT_ID
     * @param $HUBTEL_MERCHANT_ACCOUNT_CLIENT_SECRET
     */
    private function __construct($HUBTEL_MERCHANT_ACCOUNT_NUMBER, $HUBTEL_MERCHANT_ACCOUNT_CLIENT_ID, $HUBTEL_MERCHANT_ACCOUNT_CLIENT_SECRET)
    {
        $this->HUBTEL_MERCHANT_ACCOUNT_NUMBER = $HUBTEL_MERCHANT_ACCOUNT_NUMBER;
        $this->HUBTEL_MERCHANT_ACCOUNT_CLIENT_ID = $HUBTEL_MERCHANT_ACCOUNT_CLIENT_ID;
        $this->HUBTEL_MERCHANT_ACCOUNT_CLIENT_SECRET = $HUBTEL_MERCHANT_ACCOUNT_CLIENT_SECRET;
        $this->ocRequest = new \Jowusu837\HubtelMerchantAccount\OnlineCheckout\Request();

        $this->cancelUrl = url('/');
        $this->returnUrl = url('/');
        $this->websiteUrl = url('/');
        $this->shopLogo = asset('images/logo.png');
    }

    /**
     * Hubtel constructor.
     * @param $HUBTEL_MERCHANT_ACCOUNT_NUMBER
     * @param $HUBTEL_MERCHANT_ACCOUNT_CLIENT_ID
     * @param $HUBTEL_MERCHANT_ACCOUNT_CLIENT_SECRET
     *
     * @return Hubtel
     */
   public static function getInstance($HUBTEL_MERCHANT_ACCOUNT_NUMBER, $HUBTEL_MERCHANT_ACCOUNT_CLIENT_ID, $HUBTEL_MERCHANT_ACCOUNT_CLIENT_SECRET){
        return new Hubtel($HUBTEL_MERCHANT_ACCOUNT_NUMBER, $HUBTEL_MERCHANT_ACCOUNT_CLIENT_ID, $HUBTEL_MERCHANT_ACCOUNT_CLIENT_SECRET);
   }

   public function setUp($shop,$amount,$desc){
       $this->shop = $shop;

   }


   /*
    * This method assumes all field are already setup
    * */
   public function send(){
       if($this != null){

           config(['$HUBTEL_MERCHANT_ACCOUNT_NUMBER' => $this->HUBTEL_MERCHANT_ACCOUNT_NUMBER]);
           config(['HUBTEL_MERCHANT_ACCOUNT_CLIENT_ID' => $this->HUBTEL_MERCHANT_ACCOUNT_CLIENT_ID]);
           config(['$HUBTEL_MERCHANT_ACCOUNT_CLIENT_SECRET' => $this->HUBTEL_MERCHANT_ACCOUNT_CLIENT_SECRET]);

           $this->ocRequest->invoice->description = $this->description;
           $this->ocRequest->invoice->total_amount = $this->amount;
           $this->ocRequest->store->name = $this->shop;
           $this->ocRequest->store->logo_url = $this->shopLogo;
           $this->ocRequest->store->phone = $this->phone;
           $this->ocRequest->store->postal_address = $this->postalAddress;
           $this->ocRequest->store->tagline = $this->tagline;
           $this->ocRequest->store->website_url = $this->websiteUrl;
           $this->ocRequest->actions->cancel_url = $this->cancelUrl;
           $this->ocRequest->actions->return_url = $this->returnUrl;

           HubtelMerchantAccount::onlineCheckout($this->ocRequest);

       }

   }


}
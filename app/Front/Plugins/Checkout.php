<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Front\Plugins;
use Illuminate\Support\Facades\Session;

/**
 * Description of Checkout
 *
 * @author Danny-Kay
 */
class Checkout {
    //put your code here
    public  $full_address;
    public  $expectancy_day;
    public $expectancy_time;
    public  $reciever_phone;
    public $notes;
    public $delivery_option;
    public $delivery_fee;
    
    
    public static function getInstance(){    
        return new Checkout();
    }
    
    public function save(){
        Session::put('checkout',$this);
    }
    
    public function getCheckout(){
        return (Session::has('checkout')) ? Session::get('checkout') : null;
    }
        
}

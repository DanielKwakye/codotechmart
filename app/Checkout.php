<?php
/**
 * Created by PhpStorm.
 * User: Danny-Kay
 * Date: 06-Mar-18
 * Time: 1:52 PM
 */

namespace App;


use Illuminate\Support\Facades\Session;

class Checkout
{
    public $order_number;
    public $branch_id;
    public $full_address;
    public $reciever_phone;
    public $notes;
    public $delivery_option;
    public $delivery_fee;
    public $delivery_to;
    public $latitude;
    public $longitude;
    public $status;
    public $payment;
    public $payment_option;
    public $amount;
    public $transaction_id;
    public $name;


    public static function getInstance(){
        return new Checkout();
    }

    public function save(){
        Session::put('checkout',$this);
    }

    public function getCheckout(){
        return (Session::has('checkout')) ? Session::get('checkout') : null;
    }

    public function clear(){
        Session::forget('checkout');
    }

}
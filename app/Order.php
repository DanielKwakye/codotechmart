<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
     protected $fillable = [
        'name', 'user_id','cart_id', 'status','shop_id'
    ];

    public function shop(){
        return $this->belongsTo('App\shops');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function product(){
        return $this->belongsToMany('App\Product','carts','order_id','product_id');
    }

    public function sendOrderEmailToUser(){
    	
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['order_id','product_id','qty','price'];

    public function product(){
    	return $this->belongsTo('App\Product');
    }

    public function order(){
    	return $this->belongsTo('App\Order');
    }
}

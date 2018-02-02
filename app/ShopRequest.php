<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopRequest extends Model
{
    //
    protected $fillable = ['shop_id','status','courier_id'];

	public function shop(){
    	return $this->belongsTo('App\shops');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopCategory extends Model
{
    //
    protected $fillable=['name'];

    public function shop(){
    	return $this->hasMany('App\Shop','shopcategory_id');
    }
}

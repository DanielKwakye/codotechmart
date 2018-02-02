<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttributes extends Model
{
    //
    protected $table="product_attributes";

    protected $fillable = ['name','description','type'];

    public function values(){
    	return $this->hasMany('App\ProductAttributeValue','attribute_id');
    }
}

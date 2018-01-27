<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductAttributeValue extends Model
{
    //
    protected $table = "product_attributes_values";
    protected $fillable = ['attribute_id','value'];
}

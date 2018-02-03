<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $table = 'products';
    protected $fillable = [
    	'shop_id',
    	'name',
    	'description',
    	'type',
    	'category_id',
    	'quantity',
    	'price',
    	'barcode',
    	'condition',
    	'availability',
    	'minimum',
    	'mainimage'
    ];
   

}


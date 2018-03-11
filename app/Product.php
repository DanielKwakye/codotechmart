<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function getMainimageAttribute(){
        }

    //protected $table = 'products';
    protected $fillable = [
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


   public function branch(){
        return $this->belongsToMany('App\Branch');
    } 

    public function category(){
        return $this->belongsTo('App\Category','category_id');
    }
    

    public function getOldPriceAttribute(){
        if("{$this->discount}" > 0){
            return "{$this->price}";
        }
     
    }

    public function getPriceAttribute($value){
        return $value - ($value * "{$this->discount}" / 100);
    }
}


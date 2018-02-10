<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function getMainimageAttribute(){

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


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Shop extends Model
{
	use SoftDeletes;

    
    protected $fillable = [
     'id','name','tag_line','phone','type','latitude','longitude','creator_surname','creator_firstname','creator_email',
    'active','logo','region','documents','shopcategory_id','status'];
     

    public function products(){
        return $this->hasMany('App\Product');
    }

    public function shopcategory(){
    	return $this->belongsTo('App\ShopCategory');
    }
    public function shopRequest(){
    	return $this->hasMany('App\ShopRequest');
    }

    public function couriers(){
    	return $this->belongsToMany('App\Courier','shop_requests','shop_id','courier_id');
    }

    public function orders(){
    	return $this->hasMany('App\Orders');
    }

    public function branches(){
        return $this->hasMany('App\Branch');
    }

    public function getLogoAttribute($value){
        return ($value) ? asset($value) : asset('logo-shop.jpg');
    }
    protected $dates = ['deleted_at'];

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Shop extends Model
{
	use SoftDeletes;
    
    protected $table = 'shops';
    
    protected $fillable = [
     'id','name','phone','type','latitude','longitude','creator_surname','creator_firstname','creator_email',
    'active'];
    

    public function shopcategory(){
    	return $this->hasOne('App\ShopCategory','shop_id');
    }
    public function shopRequest(){
    	return $this->hasOne('App\ShopRequest','shop_id');
    }

    public function couriers(){
    	return $this->belongsToMany('App\User','shop_requests','shop_id','user_id');
    }

    public function orders(){
    	return $this->hasMany('App\Orders');
    }

    protected $dates = ['deleted_at'];
}

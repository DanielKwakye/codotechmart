<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Shop extends Model
{
	use SoftDeletes;
    
//    protected $table = 'shops';
    
    protected $fillable = [
     'id','name','tag_line','phone','type','latitude','longitude','creator_surname','creator_firstname','creator_email',
    'active','logo','region','documents'];
     


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

    protected $dates = ['deleted_at'];

}

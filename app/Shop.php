<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Shop extends Model
{
	use SoftDeletes;
    
<<<<<<< HEAD
    protected $table = 'shop';
    
    protected $fillable = [
     'id','name','tag_line','phone','type','latitude','longitude','creator_surname','creator_firstname','creator_email',
    'active','logo','region'];
=======
<<<<<<< HEAD
    protected $table = 'shops';
=======
//    protected $table = 'shops';
>>>>>>> 26bf6c3326790a149e2071b943e04ed32cc20da0
    
    protected $fillable = [
     'id','name','tag_line','phone','type','latitude','longitude','creator_surname','creator_firstname','creator_email',
    'active','logo','region','documents'];
     
>>>>>>> d1b5218c53c2d1624f06b5566fa3db10e85e3951


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

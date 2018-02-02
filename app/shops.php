<?php

namespace App;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class shops extends Model
{
    use Notifiable;

	protected $table = 'shops';

    //
    protected $fillable = ['shopname'];

    public function shopRequest(){
    	return $this->hasOne('App\ShopRequest','shop_id');
    }

    public function couriers(){
    	return $this->belongsToMany('App\User','shop_requests','shop_id','user_id');
    }

    public function orders(){
    	return $this->hasMany('App\Orders');
    }
}

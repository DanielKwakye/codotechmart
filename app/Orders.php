<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $fillable = [
        'name', 'user_id','cart_id', 'status','shop_id'
    ];

    public function shop(){
        return $this->belongsTo('App\shops');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //
    protected $table = 'branches';
    protected $fillable = ['name','shop_id','name','description','image','active','latitude','longitude','landmark'];

    public function shop(){
        return $this->belongsTo('App\Shop');
    }

    public function products(){
    	return $this->belongsToMany('App\Product');
    }
}

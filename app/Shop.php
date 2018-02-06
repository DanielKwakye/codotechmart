<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    //
    protected $table = 'shops';
    protected $fillable = [
     'id','name','phone','type','latitude','longitude','creator_surname','creator_firstname','creator_email',
    'active'];

    public function products(){
        return $this->hasMany('App\Product');
    }
}

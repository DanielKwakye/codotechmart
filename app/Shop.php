<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Shop extends Model
{
	
    //
    protected $table = 'shops';
    protected $fillable = [
     'id','name','tag_line','phone','type','creator_surname','creator_firstname','creator_email',
    'active','logo','region'];
    

    public function shopcategory(){
    	return $this->hasOne('App\ShopCategory');
    }
}

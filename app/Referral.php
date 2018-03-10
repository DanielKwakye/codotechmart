<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $fillable=['user_id','number_of_people','amount_earned','paid','date_requested','date_paid'];

    public function user(){
    	return $this->belongsTo('App\User');
    }
}

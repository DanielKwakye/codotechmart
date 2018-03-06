<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaints extends Model
{
    protected $fillable = [
        'user_id', 'subject'
    ];

       public function user()
	    {
	        return $this->belongsTo('App\User');
	    }
}

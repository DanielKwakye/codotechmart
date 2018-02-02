<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    //
    protected $fillable = [
        'courier_id', 'header','sidebar'];

        public function user()
    {
        return $this->belongsTo('App\Courier');
    }
}

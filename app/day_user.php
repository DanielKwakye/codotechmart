<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class day_user extends Model
{
    //
	protected $table="courier_day";
    protected $fillable=['time','courier_id','day_id'];


}

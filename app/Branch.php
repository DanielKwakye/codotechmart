<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    //
    protected $table = 'branches';
    protected $fillable = ['name','store_id','name','description','image','active','latitude','longitude','landmark','working_days'];
}

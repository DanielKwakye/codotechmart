<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmailSettings extends Model
{
    //
    protected $table = "emailsettings";
    protected $fillable = [
     'shop_id',
     'type',
     'server',
     'port',
     'username',
     'password',
     'encryption'
    ];
}

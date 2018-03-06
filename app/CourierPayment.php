<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CourierPayment extends Model
{
    protected $fillable=['paid_on','expired_at','courier_id','amount','months','type'];
}

<?php

namespace App;

use App\Notifications\CourierResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Courier extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','image'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CourierResetPassword($token));
    }
    public function role(){
        return $this->belongsTo('App\Role');
    }
      
      public function isAdmin(){
        if ($this->role->name=='admin') {
            return true;
        }

        return false;
    }
    public function isManagger(){
        if ($this->role->name=='manager') {
            return true;
        }

        return false;
    }

    public function shops(){
        return $this->belongsToMany('App\Shop','shop_requests','courier_id','shop_id')->withPivot('courier_id','shop_id');
    }

    public function option()
    {
        return $this->hasOne('App\Option');
    }

    public function dayUser()
    {
        return $this->hasMany('App\day_user');
    }


    public function days()
    {
        return $this->belongsToMany('App\Day')->withPivot('time');
    }
}

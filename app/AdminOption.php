<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminOption extends Model
{
   protected $fillable = [
        'admin_id', 'header','sidebar'];

        public function user()
    {
        return $this->belongsTo('App\Admin');
    }
}

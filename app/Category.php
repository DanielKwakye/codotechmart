<?php

namespace App;

use Nestable\NestableTrait;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
     use NestableTrait;

    protected $table = 'categories';
    protected $parent = 'parent_id';
    protected $fillable = ['name','parent_id','description','image'];

     public function parent(){
        return $this->belongsTo('App\Category', 'parent_id');
      }

    public function children(){
        return $this->hasMany('App\Category', 'parent_id');
      }

    public function childrenRecursive(){
         return $this->children()->with('childrenRecursive');
      }
}

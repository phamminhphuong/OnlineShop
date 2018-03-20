<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='category';
    public function Menu(){
        return $this->belongsTo('App\Menu','menu_id','id');
    }
    public function Product(){
        return $this->hasMany('App\Product','category_id','id');
    }
}

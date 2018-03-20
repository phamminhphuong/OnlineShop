<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='product';
    public function Vendor(){
        return $this->belongsTo('App\Vendor','vendor_id','id');
    }
    public function Category(){
        return $this->belongsTo('App\Category','category_id','id');
    }
}

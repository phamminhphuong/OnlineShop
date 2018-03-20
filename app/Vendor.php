<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $table='vendor';
    public function Product(){
        return $this->hasMany('App\Product','vendor_id','id');
    }
}

<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CommonController extends Controller
{
    public function menu(){
        return view('client.api.menu');
    }
    public function hotline(){
        return view('client.api.hotline');
    }
}

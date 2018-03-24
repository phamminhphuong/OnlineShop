<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Menu;

class CommonController extends Controller
{
    public function menu(){
        $menus=Menu::all();
        return view('client.api.menu', ['menus'=>$menus]);
    }
    public function hotline(){
        return view('client.api.hotline');
    }
}

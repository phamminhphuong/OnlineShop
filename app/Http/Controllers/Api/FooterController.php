<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FooterController extends Controller
{
    public function infomation(){
        return view('client.api.infomation');
    }

    public function instruction(){
        return view('client.api.instruction');
    }

    public function privacy(){
        return view('client.api.privacy');
    }
}

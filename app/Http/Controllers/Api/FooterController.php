<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Instruction;
use App\Privacy;
use App\Config;

class FooterController extends Controller
{
    public function infomation(){
        return view('client.api.infomation');
    }

    public function instruction(){
        $instructions = instruction::all();
        return view('client.api.instruction', ['instructions' => $instructions]);
    }

    public function privacy(){
        $privacies = Privacy::all();
        return view('client.api.privacy', ['privacies' => $privacies]);
    }
}

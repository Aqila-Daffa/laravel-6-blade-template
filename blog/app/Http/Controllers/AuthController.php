<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view('page/Register');
    }

    public function welcome(Request $req){
        $name = $req["firstName"]." ".$req["lastName"];
        return view('Welcome', compact('name'));
    }
}

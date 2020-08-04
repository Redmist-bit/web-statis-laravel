<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function form(){
        return view('register');
    }

    public function welcome(Request $request){
        $firstName = $request["fname"];
        $lastName = $request["lname"];
        return view('welcome', ["fname" => $firstName, "lname" => $lastName]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view ('register');
    }

  
    public function welcome1(Request $request) {
        $Fname = $request["Fname"];
        $Lname = $request["Lname"];
        return view('welcome1')->with('Fname', $Fname)->with('Lname', $Lname);
    }
}

   
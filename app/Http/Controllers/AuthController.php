<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function login(){
        return view('auth/login');
    }

    function forget_password(){
        return view('auth.forget_password');
    }
}

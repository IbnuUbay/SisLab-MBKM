<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    function index($slug){
        return view('artikel', compact('slug'));
    }
}
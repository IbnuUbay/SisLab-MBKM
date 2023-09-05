<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    function index(request $request){
        $search1 = $request->input('search');
        $orderby1 = $request->input('orderby');
        return view('table', compact('search1', 'orderby1'));
    }
}
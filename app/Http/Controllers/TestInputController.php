<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class TestInputController extends Controller
{
    function test_input(Request $request) {
        Item::create([
            'name' => $request->input('name'),
            'type' => $request->input('type'),
            'condition' => $request->input('condition'),
            'quantity'=> $request->input('quantity')
        ]);
        echo 'succses';
    }

    function form(){
        return view('test_form');
    }

    function table(){
        $data = item::all();
        //$data = Item::where('condition', 'Bagus')->where('quantity','>')->orderBy=('name')->get();
        //dd($data);
        return view('test-table', compact('data'));
    }
}
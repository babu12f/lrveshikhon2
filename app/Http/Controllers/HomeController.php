<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $people = ['sujon', 'nafis', 'rayhan', 'babor'];
        $reg = [100, 200, 300];

        return view('home',[
            'people' => $people,
            'number' => 13,
            'reg' => $reg
        ]);
    }
}

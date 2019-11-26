<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return Country::all();
    }
}

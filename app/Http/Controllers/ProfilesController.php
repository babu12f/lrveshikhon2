<?php

namespace App\Http\Controllers;

use App\Profile;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function list()
    {
        $profiles = Profile::all();

        return view('profile.list', compact('profiles'));
    }
}

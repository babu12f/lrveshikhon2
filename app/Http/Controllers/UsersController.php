<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function save()
    {
        $user_name = request('name');
        $user_email = request('email');

        $user_pic = request('pic');
        $user_country = request('country');

        $user = new User();
        $user->name = $user_name;
        $user->email = $user_email;
        $user->save();

        $profile  = new Profile();
        $profile->pic = $user_pic;
        $profile->country = $user_country;
        $profile->user = $user->id;
        $profile->save();

        return back();
    }

    public function list()
    {
        $users = User::all();

        return view('user.list', compact('users'));
    }
}

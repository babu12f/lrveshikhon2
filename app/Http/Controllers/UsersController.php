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

        $user = User::create([
            'name' => $user_name,
            'email' => $user_email
        ]);

        $user->profile()->create([
            'pic' => $user_pic,
            'country' => $user_country
        ]);

        // 1st approach
        // Profile::create([
        //     'pic' => $user_pic,
        //     'country' => $user_country,
        //     'user_id' => $user->id
        // ]);

        return back();
    }
}

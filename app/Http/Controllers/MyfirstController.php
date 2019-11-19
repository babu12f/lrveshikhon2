<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyfirstController extends Controller
{
    public function index()
    {
        return "form index";
    }

    public function user($user_id, $reg)
    {
        return $user_id . $reg;
    }

    public function person()
    {
        $people = ['tosif', 'mahabub', 'fazle alam', 'sabbir', 'rezwanul', 'asus'];
        $people_reg_no = [100, 101, 102, 103, 104, 105];

        // first way of Send Data from controller to view
        return view('home', [
            'people' => $people,
            'people_reg_no' => $people_reg_no
        ]);

        // second way of Send Data from controller to view
        // return view('home')
        //     ->with('people', $people)
        //     ->with('people_reg_no', $people_reg_no);

        // Third approach
        // return view('home', compact('people', 'people_reg_no') );
    }
}

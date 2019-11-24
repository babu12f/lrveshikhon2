<?php

Route::get('/', function () {
    return view('home');
});

Route::get('/post/{id}', function ($id) {
    return view('singlepost', compact('id'));
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/comp', function(){
    return view('main');
});

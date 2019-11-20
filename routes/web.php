<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');
Route::get('/about', function(){
    return view('about');
});

Route::post('/user', function(){
    return "POST Request";
});
Route::put('/user', function(){
    return "PUT Request";
});
Route::patch('/user', function(){
    return "PATCH Request";
});
Route::delete('/user', function(){
    return "DELETe Request";
});

<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', 'MyfirstController@index');

Route::get('/newuser', 'User\UserController@index');

Route::get('/person', 'MyfirstController@person');

Route::get('/user/{name}/reg/{regno}', 'MyfirstController@user');

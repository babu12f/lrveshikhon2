<?php

Route::get('/user/create', 'UsersController@create');

Route::post('/user/create', 'UsersController@save');

Route::get('/user/list', 'UsersController@list');

Route::get('/profile/list', 'ProfilesController@list');

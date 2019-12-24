<?php

Route::get('/user/create', 'UsersController@create');

Route::post('/user/create', 'UsersController@save');

<?php

Route::get('/country/create', 'CountriesController@create');

Route::post('/country/create', 'CountriesController@store');


Route::get('/user/create', 'UsersController@create');

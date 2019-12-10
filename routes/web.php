<?php

Route::get('/country', 'CountriesController@list');

Route::get('/country/create', 'CountriesController@create');

Route::post('/country/create', 'CountriesController@save');

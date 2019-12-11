<?php

Route::get('/country', 'CountriesController@list');

Route::get('/country/{id}/edit', 'CountriesController@edit');

Route::get('/country/{id}/show', 'CountriesController@show');

Route::post('/country/{id}/edit', 'CountriesController@update');

Route::post('/country/{id}/delete', 'CountriesController@delete');

Route::get('/country/create', 'CountriesController@create');

Route::post('/country/create', 'CountriesController@save');

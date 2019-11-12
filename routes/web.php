<?php

Route::get('/', function () {
    return "this is homepage";
});

Route::get('/contact3', function(){
    return "contact page";
})->name('cont');

Route::prefix('product')->group(function(){
    Route::get('delete', function(){
        return "product delete";
    });
    Route::get('insert', function(){
        return "product insert";
    });
    Route::get('search', function(){
        return "product search";
    });
});

Route::get('/sum/{n1}/{n2}', function($n1, $n2){
    return "sum is: ".($n1 + $n2);
})->where(['n1' => '[0-9]+', 'n2' => '[0-9]+']);

Route::get('/user/{name}', function($name){
    return "welcome ". $name;
})->where('name', '[a-z0-9]+');

Route::get('/home', function(){
    return view('home');
});

Route::post('/saveuser', function(){
    return "this is post route";
});
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function(){
	return view('welcome');
});

Route::get('/contact', function(){
    return view('welcome');
});

Route::get('/bugFix', function(){
        return view('welcome');
});


<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mi-nombre', function () {
    return "Jorge Luis Pinto";
});

Route::get('/php-basico', function () {
    



    return "Jorge Luis Pinto";
});

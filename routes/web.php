<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/galeria', function () {
    return view('galeria');
});

Route::get('/servicios', function () {
    return view('servicios');
});
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/new-year', function () {
    return view('new-year');
});

// Or as the main homepage:
Route::get('/', function () {
    return view('new-year');
});

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Or as the main homepage:
Route::get('/', function () {
    return view('new-year');
});

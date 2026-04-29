<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route ::view('/home','home');
Route ::view('/aboutus','aboutus');
Route ::view('/service','service');
Route ::view('/contact','contact');

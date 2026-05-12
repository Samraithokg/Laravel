<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TruckController;

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/register', [AuthController::class, 'registerPage']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'loginPage']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/dashboard', [TruckController::class, 'dashboard']);
Route::post('/add-truck', [TruckController::class, 'addTruck']);
Route::get('/delete-truck/{id}', [TruckController::class, 'deleteTruck']);
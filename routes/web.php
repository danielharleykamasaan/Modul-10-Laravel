<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//home
use App\Http\Controllers\HomeController;

Route::get('home', [HomeController::class, 'index'])
    ->name('home');

//route profile
use App\Http\Controllers\ProfileController;
Route::get('profile', ProfileController::class)
    ->name('profile');

//route employee
use App\Http\Controllers\EmployeeController;
Route::resource('employees', EmployeeController::class);
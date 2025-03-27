<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\belajar;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('belajar', [belajar::class, 'index']);
Route::get('addition', [belajar::class, 'addition']);

Route::get('action-addition', [belajar::class, 'actionAddition']);
Route::get('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('actionLogin', [LoginController::class, 'actionLogin']);

Route::resource('dashboard', DashboardController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('users', UsersController::class);

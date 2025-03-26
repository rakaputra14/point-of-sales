<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\belajar;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('belajar', [belajar::class, 'index']);
Route::get('addition', [belajar::class, 'addition']);
Route::get('subtraction', [belajar::class, 'subtraction']);
Route::get('division', [belajar::class, 'division']);
Route::get('multiply', [belajar::class, 'multiply']);

Route::get('action-addition', [belajar::class, 'actionAddition']);
Route::get('login', [LoginController::class, 'login']);
Route::post('actionLogin', [LoginController::class, 'actionLogin']);

<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\belajar;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TransactionController;
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

// route::group(['middleware' => 'auth'], function () {
//     Route::get('dashboard', [DashboardController::class, 'index']);
//     Route::get('categories', [CategoriesController::class, 'index']);
//     Route::get('users', [UsersController::class, 'index']);
// });

Route::resource('dashboard', DashboardController::class);
Route::resource('categories', CategoriesController::class);
Route::resource('users', UsersController::class);
Route::resource('products', ProductsController::class);
Route::resource('pos', TransactionController::class);

Route::get('print-invoice/{id}', [TransactionController::class, 'print'])->name('print-invoice');
// Alternatively, you can use the following line to define the route for printing invoices
// Route::get('print/{id}', [TransactionController::class, 'print'])->name('print');
Route::get('get-product/{id}', [TransactionController::class, 'getProduct']);

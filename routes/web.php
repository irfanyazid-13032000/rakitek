<?php

use App\Http\Controllers\LoginController;
use App\Models\Product;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Route::resource('crud', ProductsController::class);
// Route::post('/crud/{product}')

Route::get('/crud', [ProductsController::class, 'index'])->middleware('auth');
Route::get('/crud/create', [ProductsController::class, 'create'])->middleware('auth');
Route::post('/crud/store', [ProductsController::class, 'store'])->middleware('auth');
Route::get('/crud/delete/{id}', [ProductsController::class, 'destroy'])->middleware('auth');
Route::get('/crud/edit/{id}', [ProductsController::class, 'edit'])->middleware('auth');
Route::put('/crud/update/{id}', [ProductsController::class, 'update'])->middleware('auth');





Route::get('/fibonacci', function () {
    return view("fibonacci", ['title' => 'fibonacci']);
});

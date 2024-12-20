<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [App\Http\Controllers\Main\IndexController::class, 'index'])->name('main.index');

// Route::group(['prefix' => 'categories'], function () {
//     Route::resource('categories', App\Http\Controllers\CategoryController::class);
// });

Route::resource('categories', App\Http\Controllers\CategoryController::class);

Route::resource('tags', App\Http\Controllers\TagController::class);

Route::resource('colors', App\Http\Controllers\ColorController::class);

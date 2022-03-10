<?php

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

Route::get('/home', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('home');
Route::get('/location', [App\Http\Controllers\HomeController::class, 'location'])->name('home');
Route::get('/menu', [App\Http\Controllers\HomeController::class, 'menu'])->name('home');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('home');

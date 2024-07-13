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

Route::get('/a1', function () {
    return view('angular_1');
})->name('a1');
Route::get('/a2', function () {
    return view('angular_2');
})->name('a2');
Route::get('/a3', function () {
    return view('angular_3');
})->name('a3');
Route::get('/a4', function () {
    return view('angular_4');
})->name('a4');
Route::get('/a5', function () {
    return view('angular_5');
})->name('a5');
Route::get('/a6', function () {
    return view('angular_filter');
})->name('a6');

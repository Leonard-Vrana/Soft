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

Route::get('/login', 'App\Http\Controllers\authController@loginForm');
Route::post('/login', 'App\Http\Controllers\authController@authLogin')->name('login');
Route::post('/logout', 'App\Http\Controllers\authController@authLogOut')->name('logout');
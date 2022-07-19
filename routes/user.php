<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\UserController@homepage')->name('homepage')
                                                                     ->middleware('auth');

Route::post("/", "App\Http\Controllers\CarController@createCar")->name("createCar");
Route::post("/edit-car", "App\Http\Controllers\CarController@editCar")->name("editCar");
Route::post("/delete-car", "App\Http\Controllers\CarController@deleteCar")->name("deleteCar");


Route::resource('/detail', 'App\Http\Controllers\PartController')->only('show');
Route::post('/detail/create', 'App\Http\Controllers\PartController@create')->name('partCreate');
Route::post('/detail/edit', 'App\Http\Controllers\PartController@edit')->name('partEdit');
Route::post('/detail/delete', 'App\Http\Controllers\PartController@delete')->name('partDelete');
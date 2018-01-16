<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', 'Auth\AuthController@login')->name('login');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@logout');

Route::get('auth/token/{token}', 'Auth\AuthController@authenticate');

Route::get('dashboard', function () {
    return 'Welcome, ' . Auth::user()->name;
})->middleware('auth');
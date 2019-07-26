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

Route::prefix('authtentication')->group(function() {
    Route::post('/', 'AuthtenticationController@index')->name('auth');
});
Route::get('/login','AuthtenticationController@login')->name('login');
Route::get('/logout','AuthtenticationController@logout')->name('logout');
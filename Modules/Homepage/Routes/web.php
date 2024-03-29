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

Route::prefix('homepage')->group(function() {
    Route::get('/', 'HomepageController@index')->name('home.index');
    Route::get('/homeindex', 'HomepageController@homeindex')->name('homeindex.index');
});

Route::get('/', 'HomepageController@homeindex')->name('homeindex.index');
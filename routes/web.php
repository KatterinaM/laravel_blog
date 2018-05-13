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

    Route::get('/', 'MainController@index')
        ->name('mainPage');

    Route::get('/article/{id}', 'MainController@oneArticle')
        ->where ('id', '[0-9]+')
        ->name('oneArticle');

    Route::get('/login', 'LoginController@loginClient')
        ->name('loginClientPage');

    Route::post('/login', 'LoginController@loginClientPost')
        ->name('loginClientPost');

    Route::get('/check', 'LoginController@userCheckIn')
        ->name('checkInUser');

    Route::post('/check', 'LoginController@userCheckInPost')
        ->name('checkInUserPost');

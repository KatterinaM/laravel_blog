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

    Route::get('/about', 'MainController@about')
        ->name('aboutPage');

    Route::get('/new', 'MainController@newArticles')
        ->name('newArticlesPage');

    Route::get('/article/{id}', 'MainController@oneArticle')
        ->where ('id', '[0-9]+')
        ->name('oneArticle');

    Route::get('/login', 'LoginController@login')
        ->name('loginPage');

    Route::post('/login', 'LoginController@loginPost')
        ->name('loginPost');

    Route::get('/check', 'LoginController@checkIn')
        ->name('checkIn');

    Route::post('/check', 'LoginController@\checkInPost')
        ->name('checkInUserPost');

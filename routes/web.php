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


// Login
Route::get('/login1', 'AuthController@getLogin');
Route::post('/login1', 'AuthController@postLogin');

// SignUp
Route::get('/signup', 'AuthController@getLogin');
Route::post('/signup', 'AuthController@postLogin');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//abcds
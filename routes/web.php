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

//Login
Route::get('/login', 'AuthController@getLogin');
Route::post('/login', 'AuthController@postLogin');



//SignUp

Route::get('/signup', 'SignupController@getSignup');
Route::post('/signup', 'SignController@postSignup');


//Devision Management

//Route::get('/home', 'HomeController@index')->name('home');


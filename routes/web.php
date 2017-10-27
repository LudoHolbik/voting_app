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

Route::get('/user', 'pollController@create_poll');
Route::post('/user', 'pollController@store_poll');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/home' , 'HomeController@register');

Route::post('/home', 'pollController@store_poll');


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

Route::get('/', 'PageController@welcome');

Route::get('/subscribe', 'PageController@subscribe');

Route::get('/contacts', 'PageController@contacts');

Route::get('/about', 'PageController@about');

Route::resource('Films', 'FilmController');

Route::post('/Films/create', 'FilmController@store');

Route::post('Films/{Film}/Orders', 'OrderController@store');

Route::patch('/Orders/{Order}', 'OrderController@update');

Route::resource('reviews', 'ReviewsController');

Auth::loginUsingId(1);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

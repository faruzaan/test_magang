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

Route::get('/', 'KontenController@index');
Route::get('about', 'KontenController@about');
Route::get('contact', 'KontenController@contact');
Route::get('services', 'KontenController@services');

Route::auth();
Route::group(['middleware'=>'auth'], function(){
	Route::get('konten/admin', 'KontenController@admin');
	Route::get('admin', 'KontenController@create');
	Route::post('admin', 'KontenController@store');
});


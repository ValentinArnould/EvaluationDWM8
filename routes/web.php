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

Route::get('/', 'BaseController@index');
Route::get('/create', 'CreateController@index');
Route::get('/delete/{id}','DeleteController@deleteOne');
Route::get('/update/{id}','UpdateController@updateOne');
Route::get('/read','ReadController@index');
Route::post('/cat/insert','CatController@insertOne');

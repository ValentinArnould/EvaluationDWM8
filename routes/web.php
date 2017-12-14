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
    return view('accueil');
});

Route::get('/createChar', function () {
    return view('createCharacter');
});

Route::get('/read', function () {
    return view('read');
});

Route::get('/add', function () {
    return view('add');
});

Route::get('/delete', function () {
    return view('delete');
});

Route::get('/update', function () {
    return view('update');
});

Route::get('/import', function () {
    return view('import');
});

Route::get('/export', function () {
    return view('export');
});

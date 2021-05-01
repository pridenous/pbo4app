<?php

use Illuminate\Support\Facades\Route;

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


Route::group(['middleware' => 'checkSession'], function () {
    Route::get('/', 'HomeController@index');
    Route::get('/users', 'UserController@index');
    Route::get('/list', 'UserController@list');
    Route::get('/add', 'UserController@tambah');
    Route::get('/edit/{id}', 'UserController@edit');

    Route::post('/simpan', 'UserController@simpan');
    Route::post('/update', 'UserController@update');
});

// Login
Route::get('/login', 'HomeController@login');

// Login submit
Route::post('/masuk', 'HomeController@masuk');

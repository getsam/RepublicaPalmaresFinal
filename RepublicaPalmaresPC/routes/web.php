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

Route::get('/home', 'PalmaresController@index');



Auth::routes();

Route::get('/homeRestrita', 'HomeController@index')
->name('home')
->middleware('auth'); //torna a home PROTEGIDA SÓ PODENDO SER ACESSADA COM O LOGIN

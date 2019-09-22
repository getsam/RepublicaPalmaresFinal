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

use Illuminate\Support\Facades\Route;
//use Symfony\Component\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'PalmaresController@index');

Route::get('/entrar', 'EntrarController@index')
->name('entrar');
Route::post('/entrar', 'EntrarController@entrar');

Route::get('/registrar', 'RegistroController@create')
->name('registrar');
Route::post('/registrar', 'RegistroController@store');
Auth::routes();


Route::get('/homerestrita', 'HomeController@index')
->name('home');
Route::get('/homerestrita/criar', 'HomeController@showForm');
Route::post('/homerestrita/criar', 'HomeController@registrar');
Route::get('/homerestrita/listapessoas', 'HomeController@listarpessoas');
//rota modalidade
Route::get('/homerestrita/modalidade', 'HomeController@modalidade');
//Rota cursos
Route::get('/homerestrita/cursolista', 'HomeController@curso');
Route::get('/homerestrita/doacao', 'HomeControlleer@doacao');
Route::get('/homerestrita/doacaolista', 'HomeController@doacao');



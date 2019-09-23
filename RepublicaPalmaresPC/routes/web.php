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

//rotas cadastro pessoas
Route::get('/homerestrita/criar', 'CadastroController@indexform');
Route::post('/homerestrita/criar', 'CadastroController@registrar');
Route::get('/homerestrita/listapessoas', 'CadastroController@listarpessoas');

//rotas modalidade
Route::get('/homerestrita/modalidade', 'ModalidadeController@modalidade');


//Rotas cursos
Route::get('/homerestrita/curso', 'CursoController@index');
Route::get('/homerestrita/cursolista', 'CursoController@cursolista');


Route::get('/homerestrita/doacao', 'DoacaoControlleer@index');
Route::get('/homerestrita/doacaolista', 'DoacaoController@doacao');



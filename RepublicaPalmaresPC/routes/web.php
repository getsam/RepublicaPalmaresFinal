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

use App\Http\Controllers\ColaboradorController;
use Illuminate\Routing\Route as IlluminateRoute;
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

// Rotas Doação
Route::get('/homerestrita/doacao', 'DoacaoControlleer@index');
Route::get('/homerestrita/doacaolista', 'DoacaoController@doacao');

// Rotas Aluno
Route::get('/homerestrita/aluno', 'AlunoController@index');
Route::get('/homerestrita/alunolista', 'AlunoController@alunos');

// Rotas Colaborador
Route::get('/homerestrita/colaborador', 'ColaboradorController@index');
Route::get('/homerestrita/colaboradorlista', 'ColaboradorController@colaboradores');

// Rotas agenda
Route::get('/homerestrita/agenda', 'AgendaController@index');
Route::get('/homerestrita/agendaevento', 'AgendaController@eventos');


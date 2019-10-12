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


Route::get('/', 'PalmaresController@index');

Route::get('/entrar', 'EntrarController@index')
->name('entrar');
Route::post('/entrar', 'EntrarController@entrar');

Route::get('/registrar', 'RegistroController@create')
->name('registrar');
Route::post('/registrar', 'RegistroController@store');
Auth::routes();


Route::get('/home', 'HomeController@index')
->name('home');

//rotas cadastro pessoas
Route::get('/home/criar', 'CadastroController@indexform');
Route::post('/home/criar', 'CadastroController@registrar');
Route::get('/home/listapessoas', 'CadastroController@listarpessoas');
Route::get('/home/editar/{id}', 'CadastroController@showeditar');
Route::put('/home/editar/{id}','CadastroController@editar');

//rotas modalidade
Route::get('/home/modalidade', 'ModalidadeController@modalidade');


//Rotas cursos
Route::get('/home/curso', 'CursoController@index');
Route::get('/home/cursolista', 'CursoController@cursos');

// Rotas Doação
Route::get('/home/doacao', 'DoacaoController@index');
Route::get('/home/doacaolista', 'DoacaoController@doacoes');

// Rotas Aluno
Route::get('/home/aluno', 'AlunoController@index');
Route::get('/home/alunolista', 'AlunoController@alunos');

// Rotas Colaborador
Route::get('/home/colaborador', 'ColaboradorController@index');
Route::get('/home/colaboradorlista', 'ColaboradorController@colaboradores');
Route::get('/home/editarcolaborador' , 'ColaboradorController@editar');

// Rotas agenda
Route::get('/home/agenda', 'AgendaController@index');
Route::get('/home/agendaevento', 'AgendaController@eventos');

//Rotas departtamento
Route::get('/home/departamento', 'DepartamentoController@index');
Route::get('/home/departamentolista', 'DepartamentoController@departamentos'); 


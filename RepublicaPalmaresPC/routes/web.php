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

//rotas cadastro interessado
Route::post('cadInteressado', 'HomeController@registrar');

//rotas cadastro pessoas
Route::get('/homerestrita/criar', 'CadastroController@indexform');
Route::post('/homerestrita/criar', 'CadastroController@registrar');
Route::get('/homerestrita/listapessoas', 'CadastroController@listarpessoas');
Route::get('/homerestrita/editar/{id}', 'CadastroController@showeditar');
Route::put('/homerestrita/editar/{id}','CadastroController@editar');

//rotas modalidade
Route::get('/homerestrita/modalidade', 'ModalidadeController@modalidade');


//Rotas cursos
Route::get('/homerestrita/curso', 'CursoController@index');
Route::get('/homerestrita/cursolista', 'CursoController@cursos');

// Rotas Doação
Route::get('/homerestrita/doacao', 'DoacaoController@index');
Route::get('/homerestrita/doacaolista', 'DoacaoController@doacoes');

// Rotas Aluno
Route::get('/homerestrita/aluno', 'AlunoController@index');
Route::get('/homerestrita/alunolista', 'AlunoController@alunos');

// Rotas Colaborador
Route::get('/homerestrita/colaborador', 'ColaboradorController@index');
Route::get('/homerestrita/colaboradorlista', 'ColaboradorController@colaboradores');
Route::get('/homerestrita/editarcolaborador' , 'ColaboradorController@editar');

// Rotas agenda
Route::get('/homerestrita/agenda', 'AgendaController@index');
Route::get('/homerestrita/agendaevento', 'AgendaController@eventos');

//Rotas departtamento
Route::get('/homerestrita/departamento', 'DepartamentoController@index');
Route::get('/homerestrita/departamentolista', 'DepartamentoController@departamentos'); 


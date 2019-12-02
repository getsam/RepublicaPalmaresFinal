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
use phpDocumentor\Reflection\Types\This;

//use Symfony\Component\Routing\Route;


Route::get('/', 'PalmaresController@index')->name('index');


Route::get('/registrar', 'RegistroController@create')
    ->name('registrar');
Route::post('/registrar', 'RegistroController@store');
Auth::routes();


Route::get('/home', 'HomeController@index')
->name('home');

//rotas cadastro interessado
Route::post('cadInteressado', 'PalmaresController@registrar');

//rotas cadastro pessoas
Route::get('/home/criar', 'CadastroController@indexform');
Route::post('/home/criar', 'CadastroController@registrar');
Route::get('/home/listapessoas', 'CadastroController@listarpessoas');
Route::get('/home/editar/{id}', 'CadastroController@showeditar');
Route::put('/home/editar/{id}','CadastroController@editar');


//rotas modalidade
Route::get('/home/modalidade', 'ModalidadeController@modalidade');
Route::get('/home/editarmodalidade/{id}', 'ModalidadeController@showEditar');
Route::put('/home/editarmodalidade/{id}','ModalidadeController@editar');
Route::post('/home/criarmodalidade','ModalidadeController@registrar');

//Rotas cursos
Route::get('/home/curso', 'CursoController@index');
Route::post('/home/criarcurso','CursoController@registrar');
Route::get('/home/cursolista', 'CursoController@listarCursos');
Route::get('/home/showeditarcurso/{id}', 'CursoController@showEditar');
Route::put('/home/editarcurso/{id}', 'CursoController@editar');

// Rotas Doação
Route::get('/home/doacao', 'DoacaoController@index');
Route::get('/home/doacaolista', 'DoacaoController@doacoes');
Route::post('/home/criardoacao','DoacaoController@registrar');

// Rotas Aluno
Route::get('/home/aluno', 'AlunoController@index');
Route::get('/home/alunolista', 'AlunoController@alunos');
Route::post('/home/cadastraraluno', 'AlunoController@registrar');

// Rotas Colaborador
Route::get('/home/colaborador', 'ColaboradorController@index');
Route::post('/home/colaborador','ColaboradorController@registrar');
Route::get('/home/colaboradorlista', 'ColaboradorController@colaboradores');
Route::get('/home/colaborador/editar/{id}' , 'ColaboradorController@showeditar');
Route::put('/home/colaborador/editar/{id}', 'ColaboradorController@editar');

// Rotas Usuario
Route::get('home/usuario', 'UsuarioController@index');
Route::get('/home/usuarioLista', 'UsuarioController@listarUsuarios');
Route::get('/home/editarUser/{id}', 'UsuarioController@showEditar');
Route::put('/home/editarUser/{id}', 'UsuarioController@editar');

// Rotas agenda
Route::get('/home/agenda', 'AgendaController@index');
Route::get('/home/agendaevento', 'AgendaController@eventos');
Route::post('/home/criarevento', 'AgendaController@registrar');
Route::get('/home/eventoseditar/{id}', 'AgendaController@showeditar');

//Rotas departamento,cargo
Route::get('/home/departamento', 'DepartamentoController@index');
Route::post('/home/departamento', 'DepartamentoController@registrarDepartamento');
Route::get('/home/departamento/editar/{id}', 'CargoController@showEditar');

Route::get('/home/departamentocargo', 'CargoController@registrarCargo');
Route::get('/home/departamentolista', 'DepartamentoController@departamentos'); 


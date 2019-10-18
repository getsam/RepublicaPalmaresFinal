<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modalidade;
use App\Curso;
use App\Data_Hora_Curso;
use App\Graduacao;
use DB;

class CursoController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {   
        $modalidades = Modalidade::query()
        ->orderBy('modalidade')
        ->get();

        return view('curso.curso',compact('modalidades'));
    }

    public function listarCursos(Request $request)
    {
        $cursos = DB::table('curso')
            ->join('modalidade', 'curso.modalidade_id', '=', 'modalidade.id')
            ->select('curso.*','modalidade.modalidade')
            ->orderBy('curso.nome')
            ->get();

        return view('curso.cursoLista',compact('cursos'));
    }

    public function registrar(Request $request)
    {
        $idCurso = DB::table('curso')->insertGetId([
            'nome' => $request->curso_criar,
            'descricao' => $request->curso_descricao,
            'qnt_pessoas' => $request->curso_capacidade,
            'modalidade_id' => $request->modalidade_curso
        ]);
        
        $dataHoraCurso = new Data_Hora_Curso();
        for ($i=0; $i < count($request->dias_Curso); $i++) { 
            DB::insert('insert into data_hora_curso (dias_aula, hora_inicio, hora_fim, curso_id) values (?, ?, ?, ?)', 
                [$request->dias_Curso[$i], $request->horaInicio_Curso[$i], $request->horaFim_Curso[$i],$idCurso]);
        }

        $graduacao = new Graduacao();
        for ($i=0; $i < count($request->nome_graduacao); $i++) {
            DB::insert('insert into graduacao (nome, curso_id) values (?, ?)', 
                [$request->nome_graduacao[$i], $idCurso]);
        }

        $request->session()
            ->flash('mensagem',
            "Curso {$request->curso_criar} cadastrada."
        );

        return redirect('/home/curso');
    }
}

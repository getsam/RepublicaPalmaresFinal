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
            ->orderBy('curso.nome_curso')
            ->get();

        return view('curso.cursoLista',compact('cursos'));
    }

    public function showEditar(Request $request, $id)
    {
        $modalidades = Modalidade::query()
        ->orderBy('modalidade')
        ->get();

        $cursos = DB::table('curso')
        ->join('modalidade', 'curso.modalidade_id', '=', 'modalidade.id')
        ->select('curso.*','modalidade.modalidade')
        ->where('curso.id','=', "$id")
        ->get();
        
        $graduacoes = DB::table('graduacao')
        ->join('curso', 'graduacao.curso_id', '=', 'curso.id')
        ->select('graduacao.*')
        ->where('graduacao.curso_id','=', "$id")
        ->get();
        
        $dataHoras = DB::table('data_hora_curso')
        ->join('curso', 'data_hora_curso.curso_id', '=', 'curso.id')
        ->where('data_hora_curso.curso_id','=', "$id")
        ->get();

        $curso = $cursos[0];

        return view('curso.cursoeditar', compact('curso','graduacoes','dataHoras','modalidades'));
    }

    public function editar(Request $request, $id)
    {
        $dataHoras = DB::table('data_hora_curso')
        ->join('curso', 'data_hora_curso.curso_id', '=', 'curso.id')
        ->where('data_hora_curso.curso_id','=', "$id")
        ->get();

        $graduacoes = DB::table('graduacao')
        ->join('curso', 'graduacao.curso_id', '=', 'curso.id')
        ->where('graduacao.curso_id','=', "$id")
        ->get();

        DB::table('curso')
            ->where('id', $id)
            ->update(['nome_curso' => $request->curso_criar,
                'descricao' => $request->curso_descricao,
                'qnt_pessoas' => $request->curso_capacidade,
                'modalidade_id' => $request->modalidade_curso]);
        
        DB::table('data_hora_curso')->where('curso_id', '=', $id)->delete();
        for ($i=0; $i < count($request->dias_Curso); $i++) { 
            DB::insert('insert into data_hora_curso (dias_aula, hora_inicio, hora_fim, curso_id) values (?, ?, ?, ?)', 
                [$request->dias_Curso[$i], $request->horaInicio_Curso[$i], $request->horaFim_Curso[$i],$id]);
        }

        DB::table('graduacao')->where('curso_id', '=', $id)->delete();
        for ($i=0; $i < count($request->nome_graduacao); $i++) {
            DB::insert('insert into graduacao (nome, curso_id) values (?, ?)', 
                [$request->nome_graduacao[$i], $id]);
        }

        $request->session()
            ->flash('mensagem',
            "Curso {$request->curso_criar} editado com sucesso!!!."
        );

        return redirect('/home/cursolista');
    }

    public function registrar(Request $request)
    {
        $idCurso = DB::table('curso')->insertGetId([
            'nome_curso' => $request->curso_criar,
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
            "Curso {$request->curso_criar} cadastrado com sucesso!!!."
        );

        return redirect('/home/cursolista');
    }
}

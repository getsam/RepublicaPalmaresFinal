<?php

namespace App\Http\Controllers;

use App\Pessoa;
use App\Modalidade;
use App\Curso;
use App\Graduacao;
use App\AlunoCurso;
use DB;
use Illuminate\Http\Request;

class AlunoController extends Controller
{   

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $pessoas = Pessoa::query()
            ->orderBy('nome')
            ->get();

        $modalidades = Modalidade::query()
            ->orderBy('modalidade')
            ->get();

        $cursos = Curso::query()
            ->orderBy('nome')
            ->get();

        $graduacoes = Graduacao::query()
            ->orderBy('nome')
            ->get();

        return view('aluno.aluno', compact('pessoas','modalidades','cursos','graduacoes'));
    }

    public function registrar(Request $request)
    {  
        $idPessoa = DB::table('pessoa')
        ->select('pessoa.id', 'pessoa.nome')
        ->where('id','=', "$request->nome_Aluno")
        ->get();
        
        $idCurso = DB::table('curso')
        ->select('curso.id')
        ->where('curso.id','=', "$request->curso_aluno")
        ->get();

        $idAlunoGet = DB::table('aluno')->insertGetId([
            'pessoa_id' => $idPessoa[0]->id,
            'nome_responsavel' => $request->responsavel_aluno
        ]);

        $aluno_curso = new AlunoCurso();
        $aluno_curso->curso_id = $idCurso[0]->id;
        $aluno_curso->aluno_id = $idAlunoGet;

        $aluno_curso->save();

        $request->session()
            ->flash('mensagem',
            "Aluno {$idPessoa[0]->nome} cadastrado com sucesso!!!."
        );

        return redirect('/home/alunolista');
    }

    public function alunos()
    {
        $aluno_cursos = DB::table('aluno_curso')
            ->join('aluno', 'aluno_curso.aluno_id', '=', 'aluno.id')
            ->join('pessoa', 'aluno.pessoa_id', '=', 'pessoa.id')
            ->join('curso', 'aluno_curso.curso_id', '=', 'curso.id')
            ->join('modalidade', 'curso.modalidade_id', '=', 'modalidade.id')
            ->select('curso.nome_curso','pessoa.*','aluno.nome_responsavel','modalidade.modalidade')
            ->orderBy('pessoa.nome')
            ->get();

        return view('aluno.alunolista',compact('aluno_cursos'));
    }
}
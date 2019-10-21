<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pessoa;
use App\Doacao;
use Date;
use DB;

class DoacaoController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {   
        $pessoas = Pessoa::query()
            ->select('pessoa.*')
            ->orderBy('pessoa.nome')
            ->get();

        $doacoes = Doacao::query()
            ->join('pessoa', 'doacao.pessoa_id', '=', 'pessoa.id')
            ->orderBy('pessoa.nome')
            ->get();
        
        return view('doacao.doacao', compact('pessoas','doacoes'));
    }

    public function registrar(Request $request)
    {
        
        $data = date('Y-m-d', strtotime($request->data_Doacao));

        $doacao = new Doacao();
        $doacao->dt_doacao = $data;
        $doacao->valor = $request->valor_Doacao;
        $doacao->observacao = $request->doacao_obcervacao;
        $doacao->pessoa_id = $request->nome_doador;

        $doacao->save();

        $request->session()
            ->flash('mensagem',
            "Doação cadastrado com sucesso!!!."
        );

        return redirect('/home/doacaolista');
    }

    public function doacoes()
    {
        $doacoes = Doacao::query()
            ->join('pessoa', 'doacao.pessoa_id', '=', 'pessoa.id')
            ->orderBy('pessoa.nome')
            ->get();
        
        return view('doacao.doacaoLista', compact('doacoes'));
    }
}

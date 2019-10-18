<?php

namespace App\Http\Controllers;


use App\Departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepartamentoController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        $departamentos = Departamento::query()
        ->orderBy('nome')
        ->get();
        return view('departamento.departamento', compact('departamentos'));
    }

    public function registrarDepartamento(Request $request)
    {
        $nome = $request->nome_dpto;
        $descricao = $request->descricao;

        $departamento = new Departamento();
        $departamento->nome = $nome;
        $departamento->descricao = $descricao;

        $departamento->save();

        $request->session()
            ->flash('mensagem',
                "Cadastro do {$departamento->nome} criado com sucesso"
        );

        return redirect('/home/departamento');


    }

    public function departamentos()
    {
        $cargos = DB::table('cargo')
        ->select(DB::raw('cargo.id ,cargo.nome, departamento.nome as departamento, cargo.descricao, cargo.observacao'))
        ->join('departamento', 'cargo.depto_id', '=', 'departamento.id')
        ->get();

        $departamentos = DB::table('departamento')
        ->get();      

        // return var_dump($cargos->first());
        return view('departamento.departamentoLista', compact('cargos', 'departamentos'));
    }
}

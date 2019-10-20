<?php

namespace App\Http\Controllers;

use App\Colaborador;
use App\ColaboradorCargo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ColaboradorController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {   
        $departamentos = DB::table('departamento')->get();
        $pessoas = DB::table('pessoa')->get();
        $cargos = DB::table('cargo')->get();
        return view('colaborador.colaborador', compact('pessoas','departamentos','cargos'));
    }

    public function registrar(Request $request)
    {
        //dados do form
        $departamento = $request->dpto_colaborador;
        $cargo = $request->cargo;
        $data_entrada = $request->data_entrada;
        $cpf = $request->cpf_colaborador;
        $nome = $request->nome_colab;
        $observacao = $request->observacao_cargo;

        $id_pessoa = DB::table('pessoa')
            ->where('cpf','=',"$cpf");

        $id_cargo = DB::table('cargo')
            ->where('nome', '=', "$cargo");
        
        $colaborador = new Colaborador();
        $colaborador->pessoa_id = $id_pessoa->first()->id;
        $colaborador->save();

        $colaborador_cargo = new ColaboradorCargo();
        $colaborador_cargo->colaborador_id = $id_pessoa->first()->id;
        $colaborador_cargo->cargo_id = $id_cargo->first()->id;
        $colaborador_cargo->dt_entrada = date('Y/m/d');

        $colaborador_cargo->save();

        return redirect('/home/colaboradorlista');
    }

    public function colaboradores()
    {   
        $colaboradores = DB::table('colaborador')
            ->join('pessoa', 'colaborador.pessoa_id', '=', 'pessoa.id')
            ->join('colaborador_cargo', 'colaborador.id', '=', 'colaborador_cargo.colaborador_id')
            ->join('cargo', 'cargo.id', '=', 'colaborador_cargo.cargo_id')
            ->join('departamento', 'departamento.id', '=', 'cargo.depto_id')
            ->select(DB::raw('colaborador.id, pessoa.cpf, pessoa.nome,
            departamento.nome as departamento,
            cargo.nome as cargo,
            colaborador_cargo.dt_entrada,
            cargo.observacao'))
            ->get();

        return view('colaborador.colaboradorlista', compact('colaboradores'));
        //return var_dump($colaboradores);
    }

    public function showeditar(Request $request, $id)
    {
        return view('colaborador.colaboradorEditar');
    }

    public function editar()
    {
        //
    }
}

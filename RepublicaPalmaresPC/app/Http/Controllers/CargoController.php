<?php

namespace App\Http\Controllers;

use App\Cargo;
use App\Departamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CargoController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function registrarCargo(Request $request)
    {
        $departamento = $request->departamento_colaborador;
        $nomeCargo = $request->nome_cargo;
        $descricaoCargo = $request->descricao_cargo;
        $observacaoCargo = $request->observacao_cargo;

        $departamentoId = DB::table('departamento')
            ->where('nome','=',"$departamento")
            ->get();

        
        $cargo = new Cargo();
        $cargo->nome = $nomeCargo;
        $cargo->descricao = $descricaoCargo;
        $cargo->observacao =$observacaoCargo;
        $cargo->dt_entrada = date('Y/m/d');
        $cargo->depto_id = $departamentoId->first()->id;

        $cargo->save();

        $request->session()
            ->flash('mensagem',
                "Cadastro do {$cargo->nome} criado com sucesso"
        );

        return redirect('/home/departamento');

        // return var_dump();

    }
}

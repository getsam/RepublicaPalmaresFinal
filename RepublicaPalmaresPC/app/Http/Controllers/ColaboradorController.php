<?php

namespace App\Http\Controllers;

use App\Cargo;
use App\Colaborador;
use App\ColaboradorCargo;
use App\Departamento;
use App\Pessoa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ColaboradorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

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
             
        $id = $id_pessoa->first()->id;

        $verificaPessoa = Pessoa::all()->where('id',"$id");

        $verificaColaborador = Colaborador::all();

        $encontrou = false;

        foreach( $verificaColaborador as $colaborador){
            if($colaborador->pessoa_id == $id_pessoa->first()->id){
                $encontrou = true;
                }
            }

        if (!$encontrou){
            $colaborador = new Colaborador();
            $colaborador->pessoa_id = $id_pessoa->first()->id;
            $colaborador->save();
        }

        

        $colaboradorNoCargo = false;
        $verificaCC = ColaboradorCargo::all();
        //percorrendo a base pra verificar a possivel existencia do mesmo registro na tabela
        foreach($verificaCC as $cc){
            if( ($cc->colaborador_id ==$id_pessoa->first()->id) && ($cc->cargo_id == $id_cargo->first()->id) ){
                $colaboradorNoCargo = true;
            }
        }

        if(!$colaboradorNoCargo){

            $colaborador_cargo = new ColaboradorCargo();
            $colaborador_cargo->colaborador_id = $id_pessoa->first()->id;
            $colaborador_cargo->cargo_id = $id_cargo->first()->id;
            $colaborador_cargo->dt_entrada = date('Y/m/d');
            $colaborador_cargo->save();
        }

        
        return redirect('/home/colaboradorlista');
    }

    public function colaboradores()
    {   

        //$colaboradores = Colaborador::all();

        //dd($colaboradores);
        //dd($colaboradores);
        $colaboradores = DB::table('colaborador_cargo')
            ->join('colaborador', 'colaborador.id', '=', 'colaborador_cargo.colaborador_id')
            ->join('pessoa', 'colaborador_cargo.colaborador_id', '=', 'pessoa.id')
            ->join('cargo', 'cargo.id', '=', 'colaborador_cargo.cargo_id')
            ->join('departamento', 'departamento.id', '=', 'cargo.depto_id')
            ->select(DB::raw('colaborador_cargo.id, pessoa.cpf, pessoa.nome,
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
        $colaborador = ColaboradorCargo::query()->where('colaborador_cargo.id','=',$id)
        ->join('colaborador', 'colaborador.id', '=', 'colaborador_cargo.colaborador_id')
        ->join('pessoa', 'colaborador_cargo.colaborador_id', '=', 'pessoa.id')
        ->join('cargo', 'cargo.id', '=', 'colaborador_cargo.cargo_id')
        ->join('departamento', 'departamento.id', '=', 'cargo.depto_id')
        ->select(DB::raw('colaborador_cargo.id, pessoa.cpf, pessoa.nome,
        departamento.nome as departamento,
        cargo.nome as cargo,
        colaborador_cargo.dt_entrada,
        cargo.observacao'))
        ->get();

        $departamentos = Departamento::all();
        $pessoas = DB::table('pessoa')->get();
        $cargos = DB::table('cargo')->get();

        return view('colaborador.colaboradorEditar', compact('colaborador','departamentos','cargos','pessoas'));
    }

    public function editar(Request $request, $id)
    {
        $dpto = $request->dpto_colab_editar;
        $cargo_editar = $request->cargo_editar;
        $dt_entrada = $request->dt_entrada;

        $cpf = $request->cpf;
        $nome = $request->nome;
        $observacao = $request->observacao;

        // $departamento = DB::table('departamento')
        //             ->select('departamento.id as departamento')
        //             ->join('cargo','departamento.id','=','cargo.departamento_id')
        //             ->where('departamento.nome','=', "$dpto")
        //             ->get();
        
        $colaborador = DB::table('colaborador')
                    ->select('colaborador.id as colaborador')
                    ->join('pessoa','pessoa.id','=','colaborador.pessoa_id')
                    ->join('colaborador_cargo','colaborador_cargo.colaborador_id', '=', 'pessoa.id')
                    ->where('pessoa.cpf','=', $cpf)
                    ->get();

        $pessoa = DB::table('pessoa')
                    ->select('pessoa.id as pessoa')
                    ->join('colaborador_cargo','colaborador_cargo.colaborador_id', '=', 'pessoa.id')
                    ->where('pessoa.cpf','=', "$cpf")
                    ->get();
        
        $cargo = Cargo::where('cargo.nome',$cargo_editar)
                ->join('colaborador_cargo','colaborador_cargo.cargo_id', '=', 'cargo.id');


        // dd($cargo->first()->id);

        ColaboradorCargo::where('id',$id)->update([
            'colaborador_id' => $colaborador->first()->colaborador,
            'cargo_id' => $cargo->first()->id,
            'dt_entrada' => $dt_entrada
        ]);

        Colaborador::where('id', $colaborador->first()->colaborador)->update([
            'pessoa_id' => $pessoa->first()->pessoa
        ]);

        Cargo::where('id', $cargo->first()->id)->update([
            'observacao' => $observacao
        ]);

        return redirect('/home/colaboradorlista');
        }
}
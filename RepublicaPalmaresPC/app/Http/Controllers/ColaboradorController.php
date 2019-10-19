<?php

namespace App\Http\Controllers;

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

    public function colaboradores()
    {
        return view('colaborador.colaboradorlista');
    }

    public function editar()
    {
        return view('colaborador.colaboradorEditar');
    }
}

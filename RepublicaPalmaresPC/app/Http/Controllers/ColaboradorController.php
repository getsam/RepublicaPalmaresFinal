<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('colaborador.colaborador');
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

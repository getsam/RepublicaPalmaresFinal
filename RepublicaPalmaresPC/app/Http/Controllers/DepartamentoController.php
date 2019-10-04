<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('departamento.departamento');
    }

    public function departamentos()
    {
        return view('departamento.departamentoLista');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modalidade;
use App\Curso;

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

    public function cursos()
    {
        return view('curso.cursoLista');
    }

    public function registrar(Request $request)
    {
        
    }
}

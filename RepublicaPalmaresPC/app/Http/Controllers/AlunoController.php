<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class AlunoController extends Controller
{   

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index()
    {
        $pessoa = Pessoa::query()->get();
        $pessoa1 = Pessoa::query()->get();

        return view('aluno.aluno', compact('pessoa','pessoa1'));
    }

    public function alunos()
    {
        return view('aluno.alunolista');
    }
}
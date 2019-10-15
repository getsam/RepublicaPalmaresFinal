<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{   

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
    public function index()
    {
        return view('aluno.aluno');
    }

    public function alunos()
    {
        return view('aluno.alunolista');
    }
}
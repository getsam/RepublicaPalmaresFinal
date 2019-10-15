<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoacaoController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('doacao.doacao');
    }

    public function doacoes()
    {
        return view('doacao.doacaoLista');
    }
}

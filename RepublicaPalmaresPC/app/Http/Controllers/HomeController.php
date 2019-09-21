<?php

namespace App\Http\Controllers;

use App\Pessoa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Palmares.homeRestrita');
    }
    
    public function ShowForm()
    {
        return view('cadastro.cadastro');
    }

    public function registrar(Request $request)
    {
        $pessoa = Pessoa::create($request->all());
    }

    public function listarpessoas()
    {
        $pessoas = Pessoa::all();
        
        return view('cadastro.cadastroLista', compact('pessoas'));
    }

    public function modalidade()
    {
        return view('Palmares.modalidade');
    }

    public function curso()
    {
        return view('Palmares.cursolista');
    }

    public function doacao()
    {
        return view('Palmares.doacaoLista');
    }

    
}

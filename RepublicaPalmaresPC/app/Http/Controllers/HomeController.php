<?php

namespace App\Http\Controllers;

use App\Evento;
use App\Pessoa;
use App\Interessado;
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
        $eventos = Evento::query()
            ->select('evento.*')
            ->orderBy('evento.nome_evento')
            ->get();

        return view('Palmares.homeRestrita', compact('eventos'));
    }
    

    public function modalidade()
    {
        return view('Palmares.modalidade');
    }

    public function doacao()
    {
        return view('Palmares.doacaoLista');
    }

    
}

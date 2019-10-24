<?php

namespace App\Http\Controllers;

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
        return view('Palmares.homeRestrita');
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

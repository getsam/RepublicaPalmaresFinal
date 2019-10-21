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

    public function registrar(Request $request)
    {
        $interessado = new Interessado();
        $interessado->nome = $request->nome_Interessado;
        $interessado->telefone = $request->telefone_Interessado;
        $interessado->email = $request->email_Interessado;
        $interessado->descricao = $request->mensagem_Interessado;
        $interessado->tipo_interessado = implode('',$request->interesse);

        $interessado->save();
        $request->session()
        ->flash('mensagem',
            "Obridado {$request->nome_Interessado}, seu cadastro já foi enviadao para nós, aguarde retorno"
        );

        return redirect('/home/modalidade');
    }

    
}

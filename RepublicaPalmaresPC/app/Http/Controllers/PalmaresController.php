<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalmaresController extends Controller
{
    public function index(Request $request){
        return view('Palmares.index');
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
            "Obrigado {$request->nome_Interessado}, seu cadastro já foi enviadao para nós, aguarde retorno"
        );

        return redirect('/home/modalidade');
    }
}
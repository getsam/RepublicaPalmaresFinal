<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modalidade;

class ModalidadeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function modalidade()
    {
        $modalidades = Modalidade::query()
        ->orderBy('modalidade')
        ->get();

        return view('modalidade.modalidade',compact('modalidades'));
    }

    public function showEditar(Request $request, $id)
    {
        $id = $id;
        $modalidade = Modalidade::query()
            ->where('id','=', "$id")
            ->get();
        foreach ($modalidade as $modalidade){
            $item = $modalidade;
        }
        return view('modalidade.modalidadeEditar',compact('item','id'));
    }

    public function registrar(Request $request)
    {
        $modalidade = new Modalidade();
        $modalidade->modalidade = $request->modalidade_criar;
        $modalidade->descricao = $request->modalidade_descricao;

        $modalidade->save();
        $request->session()
            ->flash('mensagem',
            "Modalidade {$request->modalidade_criar} cadastrada."
        );

        return redirect('/home/modalidade');
    }
}

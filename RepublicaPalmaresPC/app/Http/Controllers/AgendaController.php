<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class AgendaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('agenda.agenda');
    }

    public function registrar(Request $request)
    {
        $data = date('Y-m-d', strtotime($request->data_Evento));

        $evento = new Evento();
        $evento->nome_evento = $request->nome_evento;
        $evento->data_evento = $data;
        $evento->hora_inicio = $request->horaInicio_evento;
        $evento->hora_fim = $request->horaFim_evento;
        $evento->capacidade_evento = $request->capacidade_evento;
        $evento->local_evento = $request->local_evento;
        $evento->descricao = $request->descricao_evento;

        $evento->save();
        $request->session()
            ->flash('mensagem',
            "Evento {$request->nome_evento} cadastrado com sucesso."
        );

        return redirect('/home/agendaevento');

    }

    public function eventos()
    {
        $eventos = Evento::query()
            ->select('evento.*')
            ->orderBy('evento.nome_evento')
            ->get();

        return view('agenda.listaEvento',compact('eventos'));
    }
}

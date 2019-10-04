<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgendaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('agenda.agenda');
    }

    public function eventos()
    {
        return view('agenda.listaevento');
    }
}

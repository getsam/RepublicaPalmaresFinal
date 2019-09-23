<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalidadeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function modalidade()
    {
        return view('modalidade.modalidade');
    }
}

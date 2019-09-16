<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalmaresController extends Controller
{
    public function index(Request $request){
        return view('Palmares.index');
    }
}
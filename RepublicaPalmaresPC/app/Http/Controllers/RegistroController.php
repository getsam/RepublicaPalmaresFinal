<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function create()
    {
        return view('Palmares.index');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        //$data['password'] = Hash::make(($data['password'])); //mudar logica

        $user = User::create($data);

        Auth::login($user);
    }
}

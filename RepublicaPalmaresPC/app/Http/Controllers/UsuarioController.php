<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('usuario.usuario');
    }

    public function listarUsuarios()
    {
        $users = User::all();

        return view('usuario.usuarioLista',compact('users'));
    }

    public function showEditar(Request $request, $id)
    {
        $user = User::all()
        ->where('id','=',$id);

        
        foreach($user as $item){
            $pessoa = $item;
        }

        return view('usuario.usuarioEditar',compact('pessoa'));
    }
    
    public function editar(Request $request,$id)
    {
        //form
        $nome = $request->nomeUser;
        $email = $request->emailUser_editar;
        $senha = $request->senha_editar;

        //dd($request->all());
        User::where('id',$id)->update([
            'name' => $nome,
            'email' => $email,
            'password' => $senha
        ]);

        return redirect('/home/usuarioLista');

    }
}

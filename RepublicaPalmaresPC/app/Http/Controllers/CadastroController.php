<?php

namespace App\Http\Controllers;

use App\Pessoa;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function indexform()
    {
        return view('cadastro.cadastro');
    }

    public function registrar(Request $request)
    {   


        $cpf = $request->cpf;
        $tipo_documento = 'Pessoa Fisica';
        $nome = $request->nome;
        $Nascimento = $request->nascimento;
        $idade = '22';
        $nome_responsavel = 'Maria Lourdes';
        $genero = $request->genero;
        $endereco = $request->endereco;
        $bairro = $request->bairro;
        $cidade = $request->cidade;
        $uf = $request->uf;
        $cep = $request->cep;
        $DDD = '11';
        $fone1 = $request->fone1;
        $email = $request->email;

        $pessoa = new Pessoa();
        $pessoa->CPF = $cpf;
        $pessoa->Tipo_documento = $tipo_documento;
        $pessoa->nome = $nome;
        $pessoa->Nascimento = $Nascimento;
        $pessoa->idade = $idade;
        $pessoa->Nome_responsavel = $nome_responsavel;
        $pessoa->Genero = $genero;
        $pessoa->Endereço = $endereco;
        $pessoa->Bairro = $bairro;
        $pessoa->cidade = $cidade;
        $pessoa->uf = $uf;
        $pessoa->cep = $cep;
        $pessoa->DDD = $DDD;
        $pessoa->Fone1 = $fone1;
        $pessoa->email = $email;

        $pessoa->save();
        $request->session()
        ->flash('mensagem',
            "Cadastro de {$pessoa->nome} criado com sucesso"
        );

        return redirect('/homerestrita/listapessoas');

    }

    public function listarpessoas(Request $request)
    {
        $pessoas = Pessoa::query()
        ->orderBy('nome')
        ->get();
        $mensagem = $request->session()->get('mensagem');
        
        return view('cadastro.cadastroLista', compact('pessoas'));
    }

    public function showeditar(Request $request, $id)
    {
        $id = $id;
        $pessoa = Pessoa::query()
            ->where('id','=', "$id")
            ->get();
        return view('cadastro.cadastroEditar', compact('pessoa'));
    }

    public function editar(Request $request)
    {
        //
    }
}

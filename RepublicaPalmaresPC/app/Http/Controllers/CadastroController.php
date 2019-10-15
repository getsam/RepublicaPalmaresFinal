<?php

namespace App\Http\Controllers;

use DB;
use App\Endereco;
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

        //informações table endereço
        $logradouro = $request->logradouro;
        $numero = $request->numero;
        $complemento = $request->complemento;
        $bairro = $request->bairro;
        $cidade = $request->cidade;
        $cep = $request->cep;
        $uf = $request->uf;

        $idEndereco = DB::table('endereco')->insertGetId([
            'logradouro' => $logradouro,
            'numero' => $numero,
            'complemento' => $complemento,
            'bairro' => $bairro,
            'cidade' => $cidade,
            'cep' => $cep,
            'uf' => $uf
        ]);

        //informações table telefone
        $telefone1 = $request->telefone;
        $telefone2 = $request->telefone2;
        
        $idTelefone = DB::table('telefone')->insertGetId([
            'telefone' => $telefone1,
            'telefone2' => $telefone2
        ]);

        $cpf = $request->cpf;
        $tipo_documento = '1';
        $nome = $request->nome;
        $Nascimento = $request->nascimento;
        $genero = $request->genero;
        $email = $request->email;

        $pessoa = new Pessoa();
        $pessoa->cpf = $cpf;
        $pessoa->tipo_documento = $tipo_documento;
        $pessoa->nome = $nome;
        $pessoa->dt_nascimento = $Nascimento;
        $pessoa->genero = $genero;
        $pessoa->id_endereco = $idEndereco;
        $pessoa->id_telefone = $idTelefone;
        $pessoa->email = $email;   

       
        //salvando pessoa com seus
        $pessoa->save();


        $request->session()
        ->flash('mensagem',
            "Cadastro de {$pessoa->nome} criado com sucesso"
        );

        return redirect('/home/listapessoas');

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

        $pessoa = DB::table('pessoa')
            ->join('endereco', 'pessoa.id_endereco', '=', 'endereco.id')
            ->join('telefone', 'pessoa.id_telefone', '=', 'telefone.id')
            ->where('pessoa.id','=', "$id")
            ->get();

        $endereco = DB::table('endereco')
            ->join('pessoa', 'endereco.id', '=', 'pessoa.id_endereco')
            ->where('pessoa.id', '=', "$id")
            ->get();
        
        $telefone = DB::table('telefone')
            ->join('pessoa', 'telefone.id', '=', 'pessoa.id_telefone')
            ->where('pessoa.id', '=', "$id")
            ->get();

        return view('cadastro.cadastroEditar', compact('pessoa','endereco','telefone'));
    }

    public function editar(Request $request)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use DB;
use App\Endereco;
use App\Pessoa;
use App\Telefone;
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

    public function editar(Request $request, $id)
    {
        // form pessoa
        $cpf = $request->cpf_editar;
        $tipo_doc  = $request->tipo_doc;
        $nome_editar = $request->nome_editar;
        $dt_nascimento = $request->dt_nascimento;
        $genero_editar = $request->genero_editar;
        $email_editar = $request->email_editar;

        // form endereco
        $logradouro_editar = $request->logradouro_editar;
        $numero_editar = $request->numero_editar;
        $complemento_editar = $request->complemento_editar;
        $bairro_editar = $request->bairro_editar;
        $cidade_editar = $request->cidade_editar;
        $uf_editar = $request->uf_editar;
        $cep_editar = $request->cep_editar;

        // form numero 
        $telefone_editar = $request->telefone_editar;
        $telefone2_editar = $request->telefone2_editar; 

        // query para pegar id de endereco, telefone 
        //return dd($request->all());
        
        $id_endereco = DB::table('pessoa')
                    ->select('endereco.id as endereco')
                    ->join('endereco','endereco.id','=','pessoa.id_endereco')
                    ->where('pessoa.id','=', "$id")
                    ->get();

        $id_telefone = DB::table('pessoa')
                    ->select('telefone.id as telefone')
                    ->join('telefone','telefone.id','=','pessoa.id_telefone')
                    ->where('pessoa.id','=', "$id")
                    ->get();

        Pessoa::where('id' , $id)
            ->update(['cpf' => $cpf,
                    'tipo_documento' => '1',
                    'nome' => $nome_editar,
                    'dt_nascimento' => $dt_nascimento,
                    'genero' => $genero_editar,
                    'email' => $email_editar]);
        
        Endereco::where('id',$id_endereco->first()->endereco)
                ->update(['logradouro' => $logradouro_editar,
                            'numero' => $numero_editar,
                            'complemento' => $complemento_editar,
                            'bairro' => $bairro_editar,
                            'cidade' => $cidade_editar,
                            'uf' => $uf_editar,
                            'cep' => $cep_editar ]);

        Telefone::where('id',$id_telefone->first()->telefone)
                ->update(['telefone' => $telefone_editar,
                        'telefone2' => $telefone2_editar]);
        
        
        return redirect('/home/listapessoas');

        //return var_dump($id_telefone->first()->telefone);
    }
}

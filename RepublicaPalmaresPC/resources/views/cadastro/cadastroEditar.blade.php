@extends('layouthome')

@section('link')
    <!-- switchery -  mascara -->
    <link href="<?php echo asset('css/plugins/switchery/switchery.css')?>" rel="stylesheet">
@endsection    

@section('conteudo')            
    <div class="wrapper wrapper-content animated fadeInRight"> 
        
        <div class="row m-b-lg">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active" ><a data-toggle="tab" href="#tab-1"> Usúario</a></li>
                    <!-- <li><a data-toggle="tab" href="#tab-2">Informações de acesso</a></li> -->
                </ul>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane active">
                        <div class="panel-body">
                            <div class="row">
                                @foreach ($pessoa as $pessoa)
                                @foreach ($endereco as $endereco)
                                @foreach ($telefone as $telefone)
                            
                                <form method="post" >
                                @csrf
                                @method('PUT')
                                    <div class="col-sm-12 ">
                                        <h3 class="text-center m-t-lg">Dados Básicos</h3>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="cpf" class="label-control">CPF/CNPJ</label>
                                            <input value="{{ $pessoa->cpf }}" type="text" placeholder="Preencha com o CPF" class="form-control" id="cpf" name="cpf_editar" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="tipo_doc" class="label-control">Tipo Pesooa</label>
                                            <select value="{{ $pessoa->tipo_documento }}" class="form-control m-b" name="tipo_doc" id="tipo_doc">
                                                <option value="">Selecione</option>
                                                <option value="0">Pessoa Fisíca</option>
                                                <option value="1">Pessoas Juridíca</option>
                                            </select> 
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="nome_editar" class="label-control">Nome/Razão Social</label>
                                            <input value="{{ $pessoa->nome }}" type="text" placeholder="Prencher com o nome" class="form-control" name="nome_editar" id="nome_editar" required>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group" id="data_1">
                                            <label class="label-control" for="dt_nascimento">Nascimento/Abertura</label>
                                            <div class="input-group date" >
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input value="{{ $pessoa->dt_nascimento }}" type="text" class="form-control" id="dt_nascimento" name="dt_nascimento" >
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="genero_editar" class="label-control">Gênero</label>
                                            <select value="{{ $pessoa->genero }}" class="form-control m-b" name="genero_editar" id="genero_editar" >
                                                <option value="0">Masculino</option>
                                                <option value="1">Feminino</option>
                                            </select>                                                   
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6" hidden>
                                        <div class="form-group">
                                            <label for="" class="label-control">Porte</label>
                                            <select class="form-control m-b" name="" id="">
                                                <option value="0">MEI</option>
                                                <option value="1">ME</option>
                                                <option value="2">Pequena</option>
                                                <option value="3">Média</option>
                                                <option value="4">Grande</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <h3 class="text-center m-t-sm">Endereço</h3>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="logradouro_editar" class="label-control">Logradouro</label>
                                            <input value="{{ $endereco->logradouro }}"type="text" placeholder="Prenche com o logradouro" class="form-control" id="logradouro_editar" name="logradouro_editar">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="numero_editar">Número</label>
                                        <input value="{{ $endereco->numero }}" type="text" placeholder="Prenche com o número" class="form-control" id="numero_editar" name="numero_editar">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="complemento_editar">Complemento</label>
                                        <input value="{{ $endereco->complemento }}" type="text" placeholder="Prenche com o complemento" class="form-control" id="complemento_editar" name="complemento_editar">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="bairro_editar">Bairro</label>
                                            <input value="{{ $endereco->bairro }}"type="text" placeholder="Prenche com o bairro" class="form-control" id="bairro_editar" name="bairro_editar">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="cidade_editar">Cidade</label>
                                            <input value="{{ $endereco->cidade }}" type="text" placeholder="Prenche com o cidade" class="form-control" id="cidade_editar" name="cidade_editar">
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="uf_editar">UF</label>
                                            <input value="{{ $endereco->uf }}"type="text" placeholder="Prenche com o UF" class="form-control" id="uf_editar" name="uf_editar">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="cep_editar">cep</label>
                                            <input value="{{ $endereco->cep }}" type="text" placeholder="Prenche com o UF" class="form-control" id="cep_editar" name="cep_editar">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <h3 class="text-center m-t-md">Telefones</h3>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="telefone_editar">Telefone 1</label>
                                            <input value="{{ $telefone->telefone }}"type="text" placeholder="Prenche com o telefone" class="form-control" id="telefone_editar" name="telefone_editar">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="telefone2_editar">Telefone 2</label>
                                        <input value="{{ $telefone->telefone2 }}" type="text" placeholder="Prenche com o telefone" class="form-control" id="telefone2_editar" name="telefone2_editar">
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-12">
                                        <div class="hr-line-dashed"></div>
                                    </div>
                                    <div class="col-sm-12 ">
                                        <h3 class="text-center m-t-md">E-mail</h3>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="email_editar">E-mail</label>
                                            <input value="{{ $pessoa->email }}" type="email" placeholder="Prenche com o e-mail" class="form-control" id="email_editar" name="email_editar">
                                        </div>
                                    </div>
                                    
                                    <div class="m-t-lg m-b-lg  col-sm-12 ">
                                        <div class="text-center">
                                            <button class="btn  btn-primary" type="submit" value="Enviar"> Salvar</button>
                                            <button class="btn  btn-danger" type="reset" value="Enviar"> Cancelar</button>
                                        </div>
                                    </div>
                                </form>
                                @endforeach
                                @endforeach
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection
        
@section('scripts')
    <!-- Switchery -->
    <script src="<?php echo asset('js/plugins/switchery/switchery.js')?>"></script>
    <script src="<?php echo asset('js/plugins/datapicker/bootstrap-datepicker.js')?>"></script>
    <!-- Jquery Validate -->
    <script src="<?php echo asset('js/plugins/validate/jquery.validate.min.js')?>"></script>
    <script src="<?php echo asset('js/plugins/jqmask/jquery_mask.js')?>"></script>
    <script src="<?php echo asset('js/pages/validator.js')?>"></script>
    <script src="<?php echo asset('js/pages/cadastroEditar.js')?>"></script>
@endsection
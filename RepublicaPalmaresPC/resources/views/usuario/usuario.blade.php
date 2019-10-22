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
                    

                    <div id="tab-2" class="tab-pane active">
                        <div class="panel-body">
                            <div class="p-sm">
                                <div class="row m-b-md">
                                    <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <h3 class="font-bold text-uppercase text-center m-b-md">Usúario de acesso</h3>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="name">Nome</label>
                                            <input type="text" placeholder="Ex. Fulano de tal" class="form-control"  id="name" name="name" required>
                                        </div>
                                    </div> 
                                    
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" placeholder="Ex. email@site.com" class="form-control"  id="email" name="email" required>
                                        </div>
                                    </div> 
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="password">Senha</label>
                                            <input type="password" placeholder="Cadastre uma password" class="form-control"  id="password" name="password" required>
                                        </div>
                                    </div> 
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="password-confirm">Confirma Senha</label>
                                            <input type="password" placeholder="Confirme sua senha" class="form-control"  id="password-confirm" name="password_confirmation" required>
                                        </div>
                                    </div> 
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Salvar
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                </div>
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
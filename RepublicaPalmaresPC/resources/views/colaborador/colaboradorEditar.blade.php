@extends('layouthome')

@section('link')
    <link rel="stylesheet" href="<?php echo asset('css/plugins/dataTables/datatables.min.css')?>">
    <link href="<?php echo asset('css/plugins/switchery/switchery.css')?>" rel="stylesheet">
    <link href="<?php echo asset('css/plugins/clockpicker/clockpicker.css')?>" rel="stylesheet">
    <link href="<?php echo asset('css/plugins/chosen/chosen.css')?>" rel="stylesheet">
@endsection

@section('conteudo')
    <div class="wrapper wrapper-content animated fadeInRight"> 
        <div class="row m-b-lg">
            <div class="ibox-content panel-body">
                <div class="col-sm-12 m-b-lg">
                    <h2 class="text-uppercase text-center">
                        Editar Colaborador
                    </h2>
                </div>
                <div class="p-sm">
                   <div class="row">

                        <form method="POST" action="#" id="cadastrar_Colaborador">
                            @method('PUT')
                            @csrf
                            @foreach ($colaborador as $colaborador)
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="dpto_colab_editar" class="label-control">Departamento</label>
                                    <select data-placeholder="Selecione a Departamento..." id="dpto_colab_editar" name="dpto_colab_editar" class="chosen-select form-control"  tabindex="1">
                                        <option selected value="{{ $colaborador->departamento }}">{{ $colaborador->departamento }}</option>
                                        @foreach ($departamentos as $departamento)
                                        <option value="{{ $departamento->nome }}">{{ $departamento->nome }}</option>
                                        @endforeach
                                    </select>   
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="cargo_editar" class="label-control">Cargo</label>
                                    <select data-placeholder="Selecione o Cargo..." id="cargo_editar" name="cargo_editar" class="chosen-select form-control"  tabindex="1">
                                        <option selected value="{{ $colaborador->cargo }}">{{ $colaborador->cargo }}</option>
                                        @foreach ($cargos as $cargo)
                                        <option value="{{ $cargo->nome }}">{{ $cargo->nome }}</option>     
                                        @endforeach
                                    </select>   
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group" id="data_1">
                                    <label for="dt_entrada" class="label-control">Data de entrada</label>
                                    <div class="input-group date">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span> 
                                        <input value="{{ $colaborador->dt_entrada }}" type="text" id="dt_entrada" class="form-control" value="03/09/2017">
                                    </div>
                                </div>
                            </div>     

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="cpf" class="label-control">CPF/ CNPJ</label>
                                    <select data-placeholder="Selecione o documento..." id="cpf" name="cpf" class="chosen-select form-control"  tabindex="1">
                                        <option selected value="{{ $colaborador->cpf }}">{{ $colaborador->cpf }}</option>
                                        @foreach ($pessoas as $pessoa)
                                            <option value="{{ $pessoa->cpf }}">{{ $pessoa->cpf }}</option>    
                                        @endforeach
                                    </select>   
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="nome" class="label-control">Colaboador</label>
                                    <select data-placeholder="Selecione o aluno..." id="nome" name="nome" class="chosen-select form-control"  tabindex="1">
                                        <option selected value="">{{ $colaborador->nome }}</option>
                                        @foreach ($pessoas as $pessoa)
                                        <option value="{{ $pessoa->nome }}">{{ $pessoa->nome }}</option>    
                                        @endforeach
                                    </select>   
                                </div>
                            </div>                         

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="label-control" for="observacao">Observação</label>
                                    <textarea name="observacao" class="form-control m-b" id="observacao" placeholder="Observação" cols="30" rows="5" required>{{ $colaborador->observacao }}}}</textarea> 
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="text-center m-b-md m-t-sm">
                                    <button id="cancelar_modalidade" class="btn btn-warning text-uppercase" type="reset" value="Cancelar">Cancelar</button>

                                    <button class="btn  btn-primary text-uppercase" type="submit" value="Adicionar">Salvar</button>
                                </div>
                            </div>
                            @endforeach
                        </form>

                    </div>
                </div>
            </div>                    
        </div>
    </div>    
@endsection

@section('scripts')
    <script src="<?php echo asset('js/plugins/switchery/switchery.js')?>"></script>
    <script src="<?php echo asset('js/plugins/datapicker/bootstrap-datepicker.js')?>"></script>
    <!-- Chosen -->
    <script src="<?php echo asset('js/plugins/chosen/chosen.jquery.js')?>"></script>

    <!-- Jquery Validate -->
    <script src="<?php echo asset('js/plugins/validate/jquery.validate.min.js')?>"></script>
    <script src="<?php echo asset('js/plugins/jqmask/jquery_mask.js')?>"></script>
    <script src="<?php echo asset('js/pages/validator.js')?>"></script>      
@endsection

@section('scriptUnico')
    <script>
        $(document).ready(function(){
            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
            var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:30},
                '.chosen-select-no-results': {no_results_text:'Não encontrado'},
                '.chosen-select-width'     : {width:"100%"},
                }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }
        })
    </script>    
@endsection
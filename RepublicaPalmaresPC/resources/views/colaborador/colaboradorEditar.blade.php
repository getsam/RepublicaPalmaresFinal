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

                        <form action="#" id="cadastrar_Colaborador">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="dpto_colab_editar" class="label-control">Departamento</label>
                                    <select data-placeholder="Selecione a Departamento..." id="dpto_colab_editar" name="dpto_colab_editar" class="chosen-select form-control"  tabindex="1">
                                        <option value="">Selecione..</option>
                                        <option value="1">Recepção</option>
                                        <option value="2">Aulas</option>
                                        <option value="3">Financeiro</option>
                                        <option value="4">Depto Geral</option>
                                    </select>   
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="depto_cargo_editar" class="label-control">Cargo</label>
                                    <select data-placeholder="Selecione o Cargo..." id="depto_cargo_editar" name="depto_cargo_editar" class="chosen-select form-control"  tabindex="1">
                                        <option value="">Selecione..</option>
                                        <option value="1">Recepicionista</option>
                                        <option value="2">Professor(a)</option>
                                        <option value="3">Tesoureiro</option>
                                        <option value="4">Ajudante geral</option>
                                    </select>   
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group" id="data_1">
                                    <label for="data_matricula_editar" class="label-control">Data de entrada</label>
                                    <div class="input-group date">
                                        <span class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </span> 
                                        <input type="text" id="data_matricula_editar" class="form-control" value="03/09/2017">
                                    </div>
                                </div>
                            </div>     

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label for="doc_colab" class="label-control">CPF/ CNPJ</label>
                                    <select data-placeholder="Selecione o documento..." id="doc_colab" name="doc_colab" class="chosen-select form-control"  tabindex="1">
                                        <option value="">Selecione..</option>
                                        <option value="1">725.234.432-07</option>
                                        <option value="2">010.234.098-98</option>
                                        <option value="3">456.123.654.00</option>
                                        <option value="4">123.321.123-32</option>
                                        <option value="5">010.101.123-01</option>
                                    </select>   
                                </div>
                            </div>

                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="nome_colab" class="label-control">Colaboador</label>
                                    <select data-placeholder="Selecione o anluno..." id="nome_colab" name="nome_colab" class="chosen-select form-control"  tabindex="1">
                                        <option value="">Selecione..</option>
                                        <option value="1">João Batista da Silva</option>
                                        <option value="2">Maria Aparecida dos Santos</option>
                                        <option value="3">Claudio Marques Soares</option>
                                        <option value="4">Alan Rocha</option>
                                        <option value="5">Jorge Albano</option>
                                    </select>   
                                </div>
                            </div>                         

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="label-control" for="curso_descricao">Observação</label>
                                    <textarea name="curso_descricao" class="form-control m-b" id="curso_descricao" placeholder="Observação" cols="30" rows="5" required></textarea> 
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="text-center m-b-md m-t-sm">
                                    <button id="cancelar_modalidade" class="btn btn-warning text-uppercase" type="reset" value="Cancelar">Cancelar</button>

                                    <button class="btn  btn-primary text-uppercase" type="button" value="Adicionar">Salvar</button>
                                </div>
                            </div>

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
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
                        Cadastrar Doação
                    </h2>
                </div>
                <div class="p-sm">
                    <div class="" id="inserirCurso" >
                        <div class="row">     
                            <form action="#" id="cadastrar_doacao">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="doc_Doador" class="label-control">CPF/ CNPJ</label>
                                        <select data-placeholder="Choose a Country..." id="doc_Doador" name="doc_Doador" class="chosen-select form-control"  tabindex="1">
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
                                        <label for="nome_doador" class="label-control">Doador</label>
                                        <select data-placeholder="Choose a Country..." id="nome_doador" name="nome_doador" class="chosen-select form-control"  tabindex="1">
                                            <option value="">Selecione..</option>
                                            <option value="1">João Batista da Silva</option>
                                            <option value="2">Maria Aparecida dos Santos</option>
                                            <option value="3">Claudio Marques Soares</option>
                                            <option value="4">Alan Rocha</option>
                                            <option value="5">Jorge Albano</option>
                                        </select>   
                                    </div>
                                </div>
                                
                                <div class="col-sm-6">
                                    <div class="form-group" id="data_1">
                                        <label for="data_Doacao" class="label-control">Data Doação</label>
                                        <div class="input-group date">
                                            <span class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </span> 
                                            <input type="text" id="data_Doacao" class="form-control" value="03/04/2019">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="valor_Doacao" class="control-label">Valor Doação</label>
                                        <input type="text" id="valor_Doacao" class="form-control text-right" data-mask="R$ 999,999,999,99" placeholder="">
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
                                <!-- tabela de doações anteriores -->
                                <div class="col-sm-12">
                                    <div class="hr-line-dashed"></div>
                                    <h3 class="font-bold text-uppercase text-center">Doações anteriores</h3>
                                </div>
                                
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover lista_doacoes" >
                                            <thead>
                                                <tr>
                                                    <th class="text-center">ID</th>
                                                    <th class="text-center">Doador</th>
                                                    <th class="text-center">Data Doação</th>
                                                    <th class="text-center">Valor Doação</th>
                                                    <th class="text-center">Observação</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="">
                                                    <td>003</td>
                                                    <td>
                                                        Joao Batista da Silva
                                                    </td>
                                                    <td>
                                                        15/05/2019
                                                    </td>
                                                    <td class="text-right">
                                                       <span class="pull-left">R$</span>
                                                       <span>1.500,00</span>
                                                    </td>
                                                    <td>
                                                        Enviar recibo de Doação até 17/05/2019
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>002</td>
                                                    <td>
                                                        Joao Batista da Silva
                                                    </td>
                                                    <td>
                                                        
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="pull-left">R$</span>
                                                        <span>1.500,00</span>
                                                    </td>
                                                    <td>
                                                        
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>001</td>
                                                    <td>
                                                        Joao Batista da Silva
                                                    </td>
                                                    <td>
                                                        15/03/2019
                                                    </td>
                                                    <td class="text-right">
                                                        <span class="pull-left">R$</span>
                                                        <span>1.500,00</span>
                                                    </td>
                                                    <td>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!--Fim da doações-->  

                            </form>
                            
                        </div>
                    </div> <!--Fim do Cadastro-->
                </div>
            </div>                    
        </div>
    </div>
@endsection

@section('scripts')
    <script src="<?php echo asset('js/plugins/switchery/switchery.js')?>"></script>
    <script src="<?php echo asset('js/plugins/datapicker/bootstrap-datepicker.js')?>"></script>
    <script src="<?php echo asset('js/plugins/dataTables/datatables.min.js')?>"></script>
    <script src="<?php echo asset('js/plugins/clockpicker/clockpicker.js')?>"></script>
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
            
            $('.clockpicker').clockpicker();
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
                '.chosen-select-width'     : {width:"100%"}
                }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }
            $('.lista_doacoes').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'excel', title: 'Lista de cadastro'},
                    {extend: 'pdf', title: 'Lista de cadastro'},
                    {extend: 'print',
                        customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '14px');
                            $(win.document.body).find('table')
                            .addClass('compact')
                            .css('font-size', 'inherit');
                        }
                    }
                ],
                searching: true,
                ordering: true,
                info: false,
                pageLength: 20,
                lengthChange: true,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json'
                },
                columnDefs: [{
                    targets: [4],
                    render: function (data, type, row) {
                        return type === 'display' && data.length > 40 ?
                            data.substr(0, 40) + '…' :
                            data;
                    },
                }],
            });
        })
    </script>    
@endsection
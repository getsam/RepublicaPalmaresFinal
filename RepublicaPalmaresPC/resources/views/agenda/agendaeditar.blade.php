@extends('layouthome')


@section('link')
    <link rel="stylesheet" href="<?php echo asset('css/plugins/dataTables/datatables.min.css')?>">
    <!-- switchery -  mascara -->
    <link href="<?php echo asset('css/plugins/switchery/switchery.css')?>" rel="stylesheet">
    <link href="<?php echo asset('css/plugins/clockpicker/clockpicker.css')?>" rel="stylesheet")>
    <script src ="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection

@section('conteudo') 
    @if(!empty(Session::has('mensagem')))
    <script> swal({ title : " Cadastrada!!! " ,
                    text: '{{Session::get('mensagem')}}',
                    icon: "success",
                    button: "Okay",
        }); 
    </script>
    @endif
    <div class="wrapper wrapper-content animated fadeInRight"> 
     
        <div class="row m-b-lg">
            
            <div class="ibox-content panel-body">
                    
                <div class="col-sm-12 m-b-lg">
                    <h2 class="text-uppercase text-center">
                        Cadastrar Evento
                    </h2>
                </div>

                <div class="p-sm">
                    <div class="" id="inserirCurso" >
                        <div class="row">
                            <!-- <div class="col-sm-12 m-b-md">
                                <h3 class="text-center m-t-lg"></h3>
                            </div> -->
                            <form method="POST" id="cadastrar_evento">
                                @csrf
                                @foreach ($eventos as $evento)
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="nome_evento" class="label-control">Nome do evento</label>
                                            <input type="text" class="form-control"name="nome_evento" id="nome_evento" value="{{ $evento->nome_evento}}">
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group" id="data_2">
                                            <label for="data_Evento" class="label-control">Data Evento</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                </span> 
                                                <input type="text" id="data_Evento" name="data_Evento" class="form-control" value="{{ $evento->data_evento }}" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="horaInicio_evento" class="label-control">Horário inicial</label>
                                        <div class="input-group clockpicker" data-autoclose="true">
                                                
                                            <input type="text" class="form-control" id="horaInicio_evento" name="horaInicio_evento" value="09:30">
                                            <span class="input-group-addon">
                                                <span class="fa fa-clock-o"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <label for="horaFim_evento" class="label-control">Horário Final</label>
                                        <div class="input-group clockpicker" data-autoclose="true">
                                                
                                            <input type="text" class="form-control" id="horaFim_evento" name="horaFim_evento" value="09:30">
                                            <span class="input-group-addon">
                                                <span class="fa fa-clock-o"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label class="label-control" for="capacidade_evento">Capacidade máxima</label>
                                            <input type="number" class="form-control m-b"name="capacidade_evento" id="capacidade_evento" placeholder="Qtd máxima"value=""/> 
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="local_evento" class="label-control">Local do evento</label>
                                            <input type="text" class="form-control"name="local_evento" id="local_evento" >
                                        </div>
                                    </div>

                                

                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="label-control" for="descricao_evento">Descrição do Evento</label>
                                            <textarea name="descricao_evento" class="form-control m-b" id="descricao_evento" placeholder="Descreva o evento" cols="30" rows="5" required></textarea> 
                                        </div>
                                    </div>

                                    
                                    <div class="col-sm-12">
                                        
                                        <div class="text-center m-b-md m-t-sm">
                                            <button id="cancelar_modalidade" class="btn btn-warning text-uppercase" type="reset" value="Cancelar">Cancelar</button>

                                            <button class="btn  btn-primary text-uppercase" type="submit" value="Adicionar">Salvar</button>
                                        </div>
                                    </div>

                                </form>
                            @endforeach
                        </div>
                    </div> <!--Fim de inserir novo Curso-->
                </div>
            </div>                    
        </div>
    </div>    
@endsection

@section('scripts')
    <script src="<?php echo asset('js/plugins/dataTables/datatables.min.js')?>"></script>
    <script src="<?php echo asset('js/plugins/clockpicker/clockpicker.js')?>"></script>
    <script src="<?php echo asset('js/plugins/validate/jquery.validate.min.js')?>"></script>
    <script src="<?php echo asset('js/plugins/jqmask/jquery_mask.js')?>"></script>
    <script src="<?php echo asset('js/pages/validator.js')?>"></script>
@endsection

@section('scriptUnico')
    <script>
        $(document).ready(function(){
            
            $('.clockpicker').clockpicker();
            $('#data_2 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });
        })
    </script>    
@endsection
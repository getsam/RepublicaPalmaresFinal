@extends('layouthome')
    
    
@section('link')
    <link rel="stylesheet" href="<?php echo asset('css/plugins/dataTables/datatables.min.css')?>">
    <!-- switchery -  mascara -->
    <link href="<?php echo asset('css/plugins/switchery/switchery.css')?>" rel="stylesheet">
    <link href="<?php echo asset('css/plugins/clockpicker/clockpicker.css')?>" rel="stylesheet">
    <script src ="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection

@section('conteudo')

    <div class="wrapper wrapper-content animated fadeInRight"> 
        
        <div class="row m-b-lg">

            <div class="ibox-content panel-body">

                <div class="col-sm-12 m-b-lg">
                    <h2 class="text-uppercase text-center">
                        Cadastrar Novo Curso
                    </h2>
                </div>

                <div class="p-sm">
                    <div class="" id="inserirCurso" >
                        <div class="row">
                            <!-- <div class="col-sm-12 m-b-md">
                                <h3 class="text-center m-t-lg"></h3>
                            </div> -->
                            <form action="criarcurso" id="cadastrar_modalidade" method="POST">
                                @csrf
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="modalidade_curso" class="label-control">Modadlidade</label>
                                        <select class="form-control m-b" name="modalidade_curso" id="modalidade_curso">
                                            <option value="">Selecione</option>
                                            @foreach ($modalidades as $modalidade)
                                                <option value="{{$modalidade->id}}">{{$modalidade->modalidade}}</option>
                                            @endforeach
                                        </select> 
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="label-control" for="curso_capacidade">Capacidade máxima de Alunos</label>
                                        <input type="number" class="form-control m-b"name="curso_capacidade" id="curso_capacidade" placeholder="Preencher somente se houver quantidade máxima"value=""/> 
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="label-control"for="curso_criar">Nome Curso</label>
                                        <input type="text" class="form-control m-b"name="curso_criar" id="curso_criar" required/>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="label-control" for="curso_descricao">Descrição do Curso</label>
                                        <textarea name="curso_descricao" class="form-control m-b" id="curso_descricao" placeholder="Descreva o curso" cols="30" rows="5" required></textarea> 
                                    </div>
                                </div>


                                <div class="col-sm-12 m-t-md">
                                        <div class="hr-line-dashed"></div>
                                </div>                                        
                                <h3 class="font-bold text-uppercase text-center m-b-sm">Dias e horários</h3>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="dias_Curso" class="label-control">Dias de Aula</label>
                                        <select class="form-control m-b" name="dias_Curso" id="dias_Curso">
                                            <option value="">Selecione</option>
                                            <option value="Segunda-Feira">Segunda-Feira</option>
                                            <option value="Terça-feira">Terça-feira</option>
                                            <option value="Quarta-feira">Quarta-feira</option>
                                            <option value="Quinta-feira">Quinta-feira</option>
                                            <option value="Sexta-feira">Sexta-feira</option>
                                            <option value="Sábado">Sábado</option>
                                            <option value="Domingo">Domingo</option>
                                            <option value="Diariamente (exceto finais de semana)">Diariamente (exceto finais de semana)</option>
                                            <option value="Diariamente">Diariamente</option>
                                        </select> 
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <label for="horaInicio_Curso" class="label-control">Horário inicial</label>
                                    <div class="input-group clockpicker" data-autoclose="true">

                                        <input type="text" class="form-control" id="horaInicio_Curso" value="09:30">
                                        <span class="input-group-addon">
                                            <span class="fa fa-clock-o"></span>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <label for="horaFim_Curso" class="label-control">Horário Final</label>
                                    <div class="input-group clockpicker" data-autoclose="true">

                                        <input type="text" class="form-control" id="horaFim_Curso" value="09:30">
                                        <span class="input-group-addon">
                                            <span class="fa fa-clock-o"></span>
                                        </span>
                                    </div>
                                </div>

                                <div class="col-sm-2">
                                    <div class="text-center m-b-md m-t-md">

                                        <button class="btn  btn-primary btn-rounded text-uppercase" type="button" value="Adicionar" onclick="AddLinhaTabelaHora()">
                                            <span class="fa fa-plus"></span>
                                            adicionar
                                        </button>
                                    </div>
                                </div>

                                <!-- tabela de cursos que o individuo pertence -->
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover lista_editar" >
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Dia</th>
                                                    <th class="text-center">Horário Inicio</th>
                                                    <th class="text-center">Hórario Final</th>
                                                    <th class="text-center">Remover</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tabela-hora">
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!--Fim da tabela dias e horarios-->  

                                <div class="col-sm-12 m-t-md">
                                    <div class="hr-line-dashed"></div>
                                </div>                                        
                                <h3 class="font-bold text-uppercase text-center m-b-sm">Graduações/ Níveis</h3>
                                <div class="col-sm-2">
                                    <div class="form-group">
                                        <label for="idGraduacao_Curso" class="label-control">ID Graduação</label>
                                        <input type="text" class="form-control m-b"name="idGraduacao_Curso" id="idGraduacao_Curso" disabled>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                        <div class="form-group">
                                            <label for="nomeGraduacao_Curso" class="label-control">Nome Graduação</label>
                                            <input type="text" class="form-control m-b"name="nomeGraduacao_Curso" id="nomeGraduacao_Curso" required>
                                        </div>
                                    </div>


                                <div class="col-sm-2">
                                    <div class="text-center m-b-md m-t-md">

                                        <button class="btn  btn-primary btn-rounded text-uppercase" type="button" value="Adicionar" onclick="AddLinhaTabelaGraduaco()">
                                            <span class="fa fa-plus"></span>
                                            adicionar
                                        </button>
                                    </div>
                                </div>

                                <!-- tabela de Graduação  -->
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover lista_editar" >
                                            <thead>
                                                <tr>
                                                    <th class="text-center">ID</th>
                                                    <th class="text-center">Graduação/ Nível</th>
                                                    <th class="text-center">Remover</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tabela-graduacao">
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!--Fim da tabela-->  

                                <div class="col-sm-12">

                                    <div class="text-center m-b-md m-t-sm">
                                        <button id="cancelar_modalidade" class="btn btn-warning text-uppercase" type="reset" value="Cancelar">Cancelar</button>

                                        <button class="btn  btn-primary text-uppercase" type="submit" value="Adicionar">Salvar</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div> <!--Fim de inserir novo Curso-->
                </div>
            </div>                    
        </div>
    </div>
@endsection
        



@section('scripts')
    <script src="<?php echo asset('js/plugins/switchery/switchery.js')?>"></script>
    <script src="<?php echo asset('js/plugins/datapicker/bootstrap-datepicker.js')?>"></script>

    <!-- data table -->
    <script src="<?php echo asset('js/plugins/dataTables/datatables.min.js')?>"></script>

    <script src="<?php echo asset('js/plugins/clockpicker/clockpicker.js')?>"></script>
    <script src="<?php echo asset('js/plugins/validate/jquery.validate.min.js')?>"></script>
    <script src="<?php echo asset('js/plugins/jqmask/jquery_mask.js')?>"></script>
    <script src="<?php echo asset('js/pages/validator.js')?>"></script>
@endsection

@section('scriptUnico') 
    <script>
        var id = 0
        $(document).ready(function(){
            
        $('.clockpicker').clockpicker();
        })

        function RemoveLinhaTabela(item) {
                var tr = $(item).closest('tr');

                tr.fadeOut(400, function() {
                tr.remove();  
                });

                return false;
        }

        function AddLinhaTabelaHora(){

            var novaLinha = $("<tr>");
            var itemCelula = "";
            var dias_Curso = $('#dias_Curso').val();
            var horaInicio_Curso = $('#horaInicio_Curso').val();
            var horaFim_Curso = $('#horaFim_Curso').val();

            itemCelula += '<td><input readonly name="dias_Curso[]" style="border:none;" value="'+dias_Curso+'"></td>';
            itemCelula += '<td><input name="horaInicio_Curso[]" readonly style="border:none;" value="'+horaInicio_Curso+'"></td>';
            itemCelula += '<td><input name="horaFim_Curso[]" readonly style="border:none;" value="'+horaFim_Curso+'"></td>';
            itemCelula += '<td class="text-center">';
            itemCelula += '<button type="button" onclick="RemoveLinhaTabela(this)" class="btn-danger btn btn-xs">';
            itemCelula += '<i class="fa fa-lg fa-close"></i>';
            itemCelula += '</button>';
            itemCelula += '</td>';

            novaLinha.append(itemCelula);
            $("#tabela-hora").append(novaLinha);

            return false;
            }
        
            function AddLinhaTabelaGraduaco(){

                var novaLinha = $("<tr>");
                var itemCelula = "";
                if ($('#idGraduacao'+id).html() == undefined){
                    idGraduacao_Curso = 0;
                }else{
                    idGraduacao_Curso = $('#idGraduacao'+id).html();
                }                
                var nomeGraduacao_Curso = $('#nomeGraduacao_Curso').val();

                itemCelula += '<td id="idGraduacao'+(id+1)+'">'+(parseInt(idGraduacao_Curso)+1)+'</td>';
                itemCelula += '<td><input readonly name="nome_graduacao[]" style="border:none;" value="'+nomeGraduacao_Curso+'"></td>';
                itemCelula += '<td class="text-center">';
                itemCelula += '<button type="button" onclick="RemoveLinhaTabela(this)" class="btn-danger btn btn-xs">';
                itemCelula += '<i class="fa fa-lg fa-close"></i>';
                itemCelula += '</button>';
                itemCelula += '</td>';
                console.log(idGraduacao_Curso);
                novaLinha.append(itemCelula);
                $("#tabela-graduacao").append(novaLinha);
                id++;
                return false;
            }
    </script>
@endsection

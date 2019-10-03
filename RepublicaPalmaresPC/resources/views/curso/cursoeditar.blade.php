@extends('layouthome')

@section('link')
    <link rel="stylesheet" href="<?php echo asset('css/plugins/dataTables/datatables.min.css')?>">
    <link href="<?php echo asset('css/plugins/switchery/switchery.css')?>" rel="stylesheet">
    <link href="<?php echo asset('css/plugins/clockpicker/clockpicker.css'?>" rel="stylesheet')">
@endsection

@section('conteudo')
    <div class="wrapper wrapper-content animated fadeInRight"> 
                
        <div class="row m-b-lg">
            
            <div class="ibox-content panel-body">
                    
                <div class="col-sm-12 m-b-lg">
                    <h2 class="text-uppercase text-center">
                       Editar Curso
                    </h2>
                </div>

                <div class="p-sm">
                    <div class="" id="inserirCurso" >
                        <div class="row">
                            <!-- <div class="col-sm-12 m-b-md">
                                <h3 class="text-center m-t-lg"></h3>
                            </div> -->
                            <form action="#" id="cadastrar_modalidade">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="modalidade_curso" class="label-control">Modadlidade</label>
                                        <select class="form-control m-b" name="modalidade_curso" id="modalidade_curso">
                                            <option value="0">Arte Marcial</option>
                                        </select> 
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="label-control" for="curso_capacidade">Capacidade máxima de Alunos</label>
                                        <input type="number" class="form-control m-b"name="curso_capacidade" id="curso_capacidade" placeholder="Preencher somente se houver qtd máxima"value="30"/> 
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="label-control"for="curso_criar">Nome Curso</label>
                                        <input type="text" class="form-control m-b"name="curso_criar" id="curso_criar" value="Capoeirade combate" required/>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="label-control" for="curso_descricao">Descrição do Curso</label>
                                        <textarea name="curso_descricao" class="form-control m-b" id="curso_descricao" placeholder="Capoeira regional e Angola, toques tradionais de berimbau, atabaque e pandeiro. Luta marcial." cols="30" rows="5" required></textarea> 
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
                                            <option value="0">Segunda-Feira</option>
                                            <option value="1">Terça-feira</option>
                                            <option value="2">Quarta-feira</option>
                                            <option value="1">Quinta-feira</option>
                                            <option value="1">Sexta-feira</option>
                                            <option value="1">Sábado</option>
                                            <option value="1">Domingo</option>
                                            <option value="1">Diariamente (exceto finais de semana)</option>
                                            <option value="1">Diariamente</option>
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
                                        
                                        <button class="btn  btn-primary btn-rounded text-uppercase" type="button" value="Adicionar">
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
                                            <tbody>
                                                <tr class="">
                                                    <td>Segunda-Feira</td>
                                                    <td>
                                                        19:30
                                                    </td>
                                                    <td>
                                                        21:00
                                                    </td>
                                                    <td class="text-center">
                                                        <button class="btn-danger btn btn-xs">
                                                            <i class="fa fa-lg fa-close"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>Quarta-feira</td>
                                                    <td>
                                                        19:30
                                                    </td>
                                                    <td>
                                                        21:00
                                                    </td>
                                                    <td class="text-center ">
                                                        <button class="btn-danger btn btn-xs">
                                                            <i class="fa fa-lg fa-close"></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr class="">
                                                    <td>Sexta-feira</td>
                                                    <td>
                                                        19:30
                                                    </td>
                                                    <td>
                                                        21:00
                                                    </td>
                                                    <td class="text-center ">
                                                        <button class="btn-danger btn btn-xs">
                                                            <i class="fa fa-lg fa-close"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                
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
                                        
                                        <button class="btn  btn-primary btn-rounded text-uppercase" type="button" value="Adicionar">
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
                                            <tbody>
                                                <tr class="">
                                                    <td>001</td>
                                                    <td>
                                                        Cordão Verde
                                                    </td>
                                                   
                                                    <td class="text-center">
                                                        <button class="btn-danger btn btn-xs">
                                                            <i class="fa fa-lg fa-close"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                
                                                <tr class="">
                                                    <td>002</td>
                                                    <td>
                                                        Cordão Verde-Amarelo
                                                    </td>
                                                   
                                                    <td class="text-center">
                                                        <button class="btn-danger btn btn-xs">
                                                            <i class="fa fa-lg fa-close"></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr class="">
                                                    <td>003</td>
                                                    <td>
                                                        Cordão Amarelo
                                                    </td>
                                                   
                                                    <td class="text-center">
                                                        <button class="btn-danger btn btn-xs">
                                                            <i class="fa fa-lg fa-close"></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr class="">
                                                    <td>004</td>
                                                    <td>
                                                        Cordão Amarelo-Azul
                                                    </td>
                                                   
                                                    <td class="text-center">
                                                        <button class="btn-danger btn btn-xs">
                                                            <i class="fa fa-lg fa-close"></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr class="">
                                                    <td>005</td>
                                                    <td>
                                                        Cordão Azul
                                                    </td>
                                                   
                                                    <td class="text-center">
                                                        <button class="btn-danger btn btn-xs">
                                                            <i class="fa fa-lg fa-close"></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr class="">
                                                    <td>006</td>
                                                    <td>
                                                        Cordão Trançado
                                                    </td>
                                                   
                                                    <td class="text-center">
                                                        <button class="btn-danger btn btn-xs">
                                                            <i class="fa fa-lg fa-close"></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr class="">
                                                    <td>007</td>
                                                    <td>
                                                        Cordão Branco-Verde (Mestre 1º nível)
                                                    </td>
                                                   
                                                    <td class="text-center">
                                                        <button class="btn-danger btn btn-xs">
                                                            <i class="fa fa-lg fa-close"></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr class="">
                                                    <td>008</td>
                                                    <td>
                                                        Cordão Branco-Amarelo (Mestre 2º nível)
                                                    </td>
                                                   
                                                    <td class="text-center">
                                                        <button class="btn-danger btn btn-xs">
                                                            <i class="fa fa-lg fa-close"></i>
                                                        </button>
                                                    </td>
                                                </tr>

                                                <tr class="">
                                                    <td>009</td>
                                                    <td>
                                                        Cordão Branco-Azul (Mestre 3º nível)
                                                    </td>
                                                    
                                                    <td class="text-center">
                                                        <button class="btn-danger btn btn-xs">
                                                            <i class="fa fa-lg fa-close"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                                
                                                <tr class="">
                                                    <td>010</td>
                                                    <td>
                                                        Cordão Branco (Grão Mestre)
                                                    </td>
                                                    
                                                    <td class="text-center">
                                                        <button class="btn-danger btn btn-xs">
                                                            <i class="fa fa-lg fa-close"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div> <!--Fim da tabela-->  

                                <div class="col-sm-12">
                                    
                                    <div class="text-center m-b-md m-t-sm">
                                        <button id="cancelar_modalidade" class="btn btn-warning text-uppercase" type="reset" value="Cancelar">Cancelar</button>

                                        <button class="btn  btn-primary text-uppercase" type="button" value="Adicionar">Salvar</button>

                                        <a href="cursoLista.html" class="btn  btn-success text-uppercase" type="button" value="Adicionar">
                                            <span class="fa fa-arrow-left"></span>
                                            Voltar
                                        </a>
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
        })
    </script>    
@endsection
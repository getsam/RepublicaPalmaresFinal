@extends('layouthome')
    
@section('link')
    <link rel="stylesheet" href="<?php echo asset('css/plugins/dataTables/datatables.min.css')?>">
    <link href="<?php echo asset('css/plugins/switchery/switchery.css')?>" rel="stylesheet"> 
    <script src ="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection
    
@section('conteudo')
    <div class="wrapper wrapper-content animated fadeInRight"> 
        
        <div class="row m-b-lg">
            <div class="ibox-content panel-body">
                @if(!empty(Session::has('mensagem')))
                    <script> swal({ title : " Cadastrada!!! " ,
                                    text: '{{Session::get('mensagem')}}',
                                    icon: "success",
                                    button: "Okay",
                        }); 
                    </script>
                @endif
                <div class="col-sm-12 m-b-lg">
                    <h2 class="text-uppercase text-center">
                        Modalidades
                    </h2>
                </div>

                <div class="p-sm">
                    
                    <div class="row">
                            
                        <!-- tabela de cursos que o individuo pertence -->
                        <div class="col-sm-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover " id="modalidades_cadastro" >
                                    <thead>
                                        <tr>
                                            <th class="text-center">ID</th>
                                            <th class="text-center">Modalidade</th>
                                            <th class="text-center">Descrição modalidade</th>
                                            <th class="text-center">Editar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($modalidades as $modalidade)
                                        <tr>
                                                <td>
                                                    {{$modalidade->id}}
                                                </td>
                                                <td>
                                                    {{$modalidade->modalidade}}
                                                </td>
                                                <td>
                                                    {{$modalidade->descricao}}
                                                </td>
                                                <td class="text-center ">
                                                <a href="{{url("/home/listarModalidade/$modalidade->id")}}">
                                                    <button class="btn-info btn btn-xs">
                                                        <i class="fa fa-lg fa-pencil"></i>
                                                    </button>
                                                </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div> <!--Fim da tabela-->
                        <div class="col-sm-12">
                                <div class="text-right m-b-md m-t-sm">
                                    <button id="adicionar_modalidade" class="btn  btn-primary text-uppercase" type="button" value="Adicionar">Adicionar modalidade</button>
                                </div>
                            </div>
                    </div>

                    <div class="hidden" id="inserirModalidade" >

                        <div class="hr-line-dashed"></div>

                        <div class="row">
                            <div class="col-sm-12 m-b-md">
                                <h3 class="text-center m-t-lg">Cadastrar Nova Modalidade</h3>
                            </div>
                            <form action="criarmodalidade" method="POST" id="cadastrar_modalidade">
                                @csrf
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label class="label-control" for="Id_modalidade_criar">ID da Modalidade</label>
                                        <input type="text" class="form-control m-b"name="Id_modalidade_criar" id="Id_modalidade_criar" value="" disabled/>
                                                                                            
                                    </div>
                                </div>

                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <label class="label-control"for="modalidade_criar">Nome Modalidade</label>
                                        <input type="text" class="form-control m-b"name="modalidade_criar" id="modalidade_criar" required/>
                                                                                            
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="label-control" for="modalidade_descricao">Descrição da Modalidade</label>
                                        <textarea name="modalidade_descricao" class="form-control m-b" id="modalidade_descricao" placeholder="Descreva a modalidade" cols="30" rows="10" required></textarea>                                                  
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    
                                    <div class="text-center m-b-md m-t-sm">
                                        <button id="cancelar_modalidade" class="btn btn-warning text-uppercase" type="reset" value="Cancelar">Cancelar</button>

                                        <button class="btn  btn-primary text-uppercase" type="submit" value="Adicionar">Salvar</button>
                                    </div>
                                </div>

                            </form>
                            
                        </div>
                    </div> <!--Fim de inserir novo registro-->
                        
                </div>
            </div>                    
        </div>
    </div>
@endsection 

@section('scripts')
        <!-- Switchery -->

   <script src="<?php echo asset('js/plugins/switchery/switchery.js')?>"></script>
    
   <script src="<?php echo asset('js/plugins/datapicker/bootstrap-datepicker.js')?>"></script>

   <!-- data table -->
   <script src="<?php echo asset('js/plugins/dataTables/datatables.min.js')?>"></script>
   
   <!-- Jquery Validate -->
   <script src="<?php echo asset('js/plugins/validate/jquery.validate.min.js')?>"></script>
   <script src="<?php echo asset('js/plugins/jqmask/jquery_mask.js')?>"></script>
   <script src="<?php echo asset('js/pages/validator.js')?>"></script>
   
@endsection

@section('scriptUnico')
    <script>
        $(document).ready(function(){
            $('#modalidades_cadastro').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'excel', title: 'Clientes Excel'},
                    {extend: 'pdf', title: 'Clientes PDF'},
                    {extend: 'print',
                         customize: function (win){
                                $(win.document.body).addClass('white-bg');
                                $(win.document.body).css('font-size', '10px');

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
                lengthChange: false,
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json'
                },
                columnDefs: [{
                    targets: [2],
                    render: function (data, type, row) {
                        return type === 'display' && data.length > 100 ?
                            data.substr(0, 100) + '…' :
                            data;
                    },
                }],
            });


            $('#adicionar_modalidade').on("click", function(){
                $('#inserirModalidade').removeClass('hidden');
                $('#modalidade_criar').focus();
            });

            $('#cancelar_modalidade').on("click", function(){
               $('#inserirModalidade').addClass('hidden');
            })
        });
        
    </script>
@endsection
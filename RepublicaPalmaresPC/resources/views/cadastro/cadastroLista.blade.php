@extends('layouthome')

@section('link')
    <link rel="stylesheet" href="<?php echo asset('js/plugins/dataTables/datatables.min.js')?>">    
    <script src ="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection

@section('conteudo')   
    <div class="row border-bottom">
    <!-- envelope do Conteúdo das views     -->
        <div class="wrapper wrapper-content animated fadeInRight">
            
            <!-- ESPAÇO CONTEUDO DA PAGINA -->
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            @if(!empty(Session::has('mensagem')))
                                <script> swal({ title : " Cadastrada!!! " ,
                                                text: '{{Session::get('mensagem')}}',
                                                icon: "success",
                                                button: "Okay",
                                    }); 
                                </script>
                            @endif
                            <div class="ibox-title">
                                <h5>Lista de Cadastros</h5>
                            </div>
                            <div class="ibox-content">
        
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover lista_cadastros" >
                                        <thead>
                                            <tr>
                                                <th>CPF/CNPJ</th>
                                                <th>Nome/Razão</th>
                                                <th>E-mail</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pessoas as $pessoa)   
                                                <tr class="">
                                                    <td>{{ $pessoa->cpf }}</td>
                                                    <td>{{ $pessoa->nome }}</td>
                                                    <td>{{ $pessoa->email }}</td>
                                                    <td class="text-center ">
                                                        <a href="{{url("/home/editar/$pessoa->id")}}">
                                                            <button class="btn-primary btn btn-xs">
                                                                <i class="fa fa-lg fa-pencil"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach                                                   
                                        </tbody>
                                    </table>
                                </div>
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div> <!-- FIM - envelope do Conteúdo das views     -->
@endsection            

@section('scripts')    
    <!-- data table -->
    <script src="<?php echo asset('js/plugins/dataTables/datatables.min.js')?>"></script>
@endsection

@section('scriptUnico')
    <script>
        $(document).ready(function(){
            $('.lista_cadastros').DataTable({
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
                ]
            });
        });
        
    </script>
@endsection
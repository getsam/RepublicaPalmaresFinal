@extends('layouthome')

@section('link')
    <link rel="stylesheet" href="<?php echo asset('css/plugins/dataTables/datatables.min.css')?>">    
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
                                <div class="ibox-title">
                                    <h5>Lista de Colaboradores</h5>
                                </div>
                                <div class="ibox-content">

                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover lista_Colab" >
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>CPF</th>
                                                    <th>Colaborador</th>
                                                    <th>Depto</th>
                                                    <th>Cargo</th>
                                                    <th>Data da entrada</th>
                                                    <th>Observação</th>
                                                    <th>Editar</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($colaboradores as $colaborador)
                                                    <tr class="">
                                                        <td>{{ $colaborador->id }}</td>
                                                        <td>{{ $colaborador->cpf }}</td>
                                                        <td>{{ $colaborador->nome }}</td>
                                                        <td>{{ $colaborador->departamento }}</td>
                                                        <td>{{ $colaborador->cargo }}</td>
                                                        <td>{{ $colaborador->dt_entrada }}</td>
                                                        <td>{{ $colaborador->observacao }}</td>
                                                        <td class="text-center ">
                                                            <a href="{{url("/homerestrita/colaborador/editar/$colaborador->id")}}">
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
    <script src="<?php echo asset('js/plugins/dataTables/datatables.min.js')?>"></script>
@endsection

@section('scriptUnico')
    <script>
        $(document).ready(function(){
            $('.lista_Colab').DataTable({
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
                    targets: [2, 6],
                    render: function (data, type, row) {
                        return type === 'display' && data.length > 25 ?
                            data.substr(0, 25) + '…' :
                            data;
                    },
                }],
            });
        });
        
    </script>
@endsection
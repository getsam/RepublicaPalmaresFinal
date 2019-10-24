@extends('layouthome')

@section('conteudo')            

@section('link')
    <link rel="stylesheet" href="<?php echo asset('css/plugins/dataTables/datatables.min.css')?>">
@endsection
        
    <div class="row m-b-lg">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="/home/usuario">
                        <div class="widget style1 navy-bg">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Inserir novo </span>                                    
                                        <h2 class="font-bold">Usúario</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="/home/aluno">
                        <div class="widget style1 navy-bg">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <i class="fa fa-users fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Inserir novo</span>
                                        <h2 class="font-bold">Aluno</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="/home/modalidade">
                        <div class="widget style1 navy-bg">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <i class="fa fa-shield fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Consultar</span>
                                    
                                        <h2 class="font-bold">Modalidade</h2>
                                    
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a href="/home/cursolista">
                        <div class="widget style1 navy-bg">
                            <div class="row">
                                <div class="col-xs-4 text-center">
                                    <i class="fa fa-diamond fa-5x"></i>
                                </div>
                                <div class="col-xs-8 text-right">
                                    <span> Consultar</span>
                                        <h2 class="font-bold">Cursos</h2>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="widget  no-padding">
                        <div class="p-m">
                            <!-- <h1 class="m-xs">Eventos</h1> -->

                            <h3 class="font-bold no-margins">
                                Eventos
                            </h3>
                            <small>Lista de atividades e eventos da Ong.</small>
                        </div>
                        <div class="p-m">
                            <div class="table-responsive m-t-n-md">
                                <table class="table table-striped table-bordered table-hover lista_eventos" >
                                    <thead>
                                        <tr>
                                            <th>Evento</th>
                                            <th>Data</th>
                                            <th>Ínicio</th>
                                            <th>Fim</th>
                                            <th>Local/ Endereço</th>
                                            <th>Descricao</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($eventos as $evento)
                                                <tr class="">
                                                    <td>{{ $evento->nome_evento }}</td>
                                                    <td>{{ date('d/m/Y', strtotime($evento->data_evento)) }}</td>
                                                    <td>{{ $evento->hora_inicio }}</td>
                                                    <td>{{ $evento->hora_fim}}</td>
                                                    <td>{{ $evento->local_evento }}</td>
                                                    <td>{{ $evento->descricao }}</td>
                                                    <td>{{ $evento->capacidade_evento }}</td>
                                                    <td class="text-center ">
                                                        <a href="EventosEditar.html">
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
@endsection

@section('scripts')
    <script src="<?php echo asset('js/plugins/dataTables/datatables.min.js')?>"></script>    
@endsection

@section('scriptUnico')
    <script>
        $(document).ready(function(){
            $('.lista_eventos').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json'
                },
                columnDefs: [{
                    targets: [0, 4, 5],
                    render: function (data, type, row) {
                        return type === 'display' && data.length > 35 ?
                            data.substr(0, 35) + '…' :
                            data;
                    },
                }],
                buttons: [
                    {extend: 'excel', title: 'Lista de usúarios'},
                    {extend: 'pdf', title: 'Lista de usúarios'},

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
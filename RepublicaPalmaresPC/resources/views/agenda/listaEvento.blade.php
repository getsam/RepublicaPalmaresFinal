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
                                <h5>Lista de Eventos</h5>
                            </div>
                            <div class="ibox-content">
        
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover lista_eventos" >
                                        <thead>
                                            <tr>
                                                <th>Evento</th>
                                                <th>Data</th>
                                                <th>Ínicio</th>
                                                <th>Fim</th>
                                                <th>Local/ Endereço</th>
                                                <th>Descricao</th>
                                                <th>Capacidade Pessoas</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($eventos as $evento)
                                                <tr class="">
                                                    <td>{{ $evento->nome_evento }}</td>
                                                    <td>{{ date('d-m-Y', strtotime($evento->data_evento)) }}</td>
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
    </div> <!-- FIM - envelope do Conteúdo das views     -->
@endsection

@section('scripts')
    <script src="<?php echo asset('js/plugins/dataTables/datatables.min.js')?>"></script>
@endsection

@section('scriptUnico')
    <script>
        $(document).ready(function(){
            $('.lista_cadastros').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                language: {
                    url: '//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json'
                },
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
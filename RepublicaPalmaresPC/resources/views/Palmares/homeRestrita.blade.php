@extends('layouthome')

@section('conteudo')            

@section('link')
    <link rel="stylesheet" href="<?php echo asset('css/plugins/dataTables/datatables.min.css')?>">
@endsection
        
    <div class="row m-b-lg">
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-3">
                    <div class="widget style1 navy-bg">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-user fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> Inserir novo </span>
                                <a href="#">
                                    <h2 class="font-bold">Usúario</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget style1 navy-bg">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-users fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> Inserir novo</span>
                                <a href="#">
                                    <h2 class="font-bold">Aluno</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget style1 navy-bg">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-shield fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> Consultar</span>
                                <a href="#">
                                    <h2 class="font-bold">Modalidade</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="widget style1 navy-bg">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-diamond fa-5x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> Consultar</span>
                                <a href="#">
                                    <h2 class="font-bold">Cursos</h2>
                                </a>
                            </div>
                        </div>
                    </div>
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
                                        <tr class="">
                                            <td>Festival de capoeira</td>
                                            <td>15/10/2019</td>
                                            <td>10:00</td>
                                            <td>15:00</td>
                                            <td>Av. Gal Newton Stilac 1775 Jd das Flores Osasco SP</td>
                                            <td>Encontro de confraternização entre Capoeiristas de Sp</td>
                                            <td class="text-center ">
                                                <a href="EventosEditar.html">
                                                    <button class="btn-primary btn btn-xs">
                                                        <i class="fa fa-lg fa-eye"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="">
                                            <td>Café da manhã com Professores e Mestre</td>
                                            <td>15/10/2019</td>
                                            <td>8:00</td>
                                            <td>12:00</td>
                                            <td>Av. Gal Newton Stilac 1775 Jd das Flores Osasco SP</td>
                                            <td>Encontro de confraternização entre Capoeiristas de SP, com a presença de ilustres autoridades da capoeira</td>
                                            <td class="text-center ">
                                                <a href="EventosEditar.html">
                                                    <button class="btn-primary btn btn-xs">
                                                        <i class="fa fa-lg fa-eye"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
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
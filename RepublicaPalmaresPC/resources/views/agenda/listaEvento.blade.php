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
                                                            <i class="fa fa-lg fa-pencil"></i>
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
                                                            <i class="fa fa-lg fa-pencil"></i>
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
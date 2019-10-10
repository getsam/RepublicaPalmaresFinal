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
                                                <tr class="">
                                                    <td>01</td>
                                                    <td>27101925607</td>
                                                    <td>Joao Batista de Souza</td>
                                                    <td>Financeiro</td>
                                                    <td>Tesoureiro</td>
                                                    <td>10/03/2019</td>
                                                    <td></td>
                                                    <td class="text-center ">
                                                        <a href="{{url('/homerestrita/colaboradoreditar')}}">
                                                            <button class="btn-primary btn btn-xs">
                                                                <i class="fa fa-lg fa-pencil"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr class="">
                                                    <td>02</td>
                                                    <td>27101925603</td>
                                                    <td>Maria Batista de Souza</td>
                                                    <td>Recpeção</td>
                                                    <td>Recepcionista</td>
                                                    <td>10/04/2019</td>
                                                    <td>

                                                    </td>
                                                    <td class="text-center ">
                                                        <a href="colaboradorEditar.html">
                                                            <button class="btn-primary btn btn-xs">
                                                                <i class="fa fa-lg fa-pencil"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                                {{-- <tr class="">
                                                    <td>03</td>
                                                    <td>27101925609</td>
                                                    <td>Eduardo Batista de Souza</td>
                                                    <td>Aula</td>
                                                    <td>Professor</td>
                                                    <td>10/04/2019</td>
                                                    <td>
                                                        Professor de Capoeira (em fase de estágio (cordão azul)
                                                    </td>
                                                    <td class="text-center ">
                                                        <a href="colaboradorEditar.html">
                                                            <button class="btn-primary btn btn-xs">
                                                                <i class="fa fa-lg fa-pencil"></i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr> --}}
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
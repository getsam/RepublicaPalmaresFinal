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
                                <h5>Lista de Doações</h5>
                            </div>
                            <div class="ibox-content">
        
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover lista_cadastros" >
                                        <thead>
                                            <tr>
                                                <th>CPF/CNPJ</th>
                                                <th>Nome/Razão</th>
                                                <th>Doação</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="">
                                                <td>353.345.123-07</td>
                                                <td>Leonardo da Silva</td>
                                                <td>Cesta Basica</td>
                                                <td class="text-center ">
                                                    <a href="cadastroEditar.html">
                                                        <button class="btn-primary btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>623.361.121-07</td>
                                                <td>Maria da Silva</td>
                                                <td>Roupas</td>
                                                <td class="text-center ">
                                                    <a href="cadastroEditar.html">
                                                        <button class="btn-primary btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>653.321.122-07</td>
                                                <td>Joao da Silva</td>
                                                <td>Equipamento Ginastica</td>
                                                <td class="text-center ">
                                                    <a href="cadastroEditar.html">
                                                        <button class="btn-primary btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>223.321.112-07</td>
                                                <td>Alex oliveira</td>
                                                <td>300 R$</td>
                                                <td class="text-center ">
                                                    <a href="cadastroEditar.html">
                                                        <button class="btn-primary btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>479.751.146-07</td>
                                                <td>João Lucas</td>
                                                <td>Instrumentos Musicais</td>
                                                <td class="text-center ">
                                                    <a href="cadastroEditar.html">
                                                        <button class="btn-primary btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>343.321.843-07</td>
                                                <td>Pedro Alvarez</td>
                                                <td>Materiais para Costura</td>
                                                <td class="text-center ">
                                                    <a href="cadastroEditar.html">
                                                        <button class="btn-primary btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>124.345.298-07</td>
                                                <td>Fabio Mesquita</td>
                                                <td>Roupas de frio</td>
                                                <td class="text-center ">
                                                    <a href="cadastroEditar.html">
                                                        <button class="btn-primary btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>153.451.143-07</td>
                                                <td>Julian Brandt</td>
                                                <td>Cordões Para Graduação</td>
                                                <td class="text-center ">
                                                    <a href="cadastroEditar.html">
                                                        <button class="btn-primary btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>567.355.455-07</td>
                                                <td>Everson Bastos</td>
                                                <td>Equipamentos Esportivos</td>
                                                <td class="text-center ">
                                                    <a href="cadastroEditar.html">
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
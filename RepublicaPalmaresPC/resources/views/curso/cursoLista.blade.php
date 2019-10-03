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
                                <h5>Lista de Cursos</h5>
                            </div>
                            <div class="ibox-content">
        
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover lista_cadastros" >
                                        <thead>
                                            <tr>
                                                <th>Modalidade</th>
                                                <th>Nome Curso</th>
                                                <th>Descrição</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="">
                                                <td>Artes Marciais</td>
                                                <td>Capoeira</td>
                                                <td>Arte marcial praticada principalmente com os pés</td>
                                                <td class="text-center ">
                                                    <a href="cadastroEditar.html">
                                                        <button class="btn-primary btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Artes Marciais</td>
                                                <td>Muay Thay</td>
                                                <td>Arte marcial que utiliza principalmente cotovelos e joelhos</td>
                                                <td class="text-center ">
                                                    <a href="cadastroEditar.html">
                                                        <button class="btn-primary btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Musica</td>
                                                <td>Violão</td>
                                                <td>A guitarra clássica (conhecida no Brasil como violão ) é uma guitarra acústica com cordas de nylon ou aço,
                                                    concebida inicialmente para a interpretação de peças de música erudita.
                                                    O corpo é oco e chato, em forma de oito, e feito de várias madeiras diferentes. </td>
                                                <td class="text-center ">
                                                    <a href="cadastroEditar.html">
                                                        <button class="btn-primary btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Artesanato</td>
                                                <td>Costura</td>
                                                <td>Este curso é voltado para aqueles que possuem interesse em aprender noções básicas de costura,
                                                    tais como o funcionamento da máquina de costura, além de cortar,montar e modelar uma peça de roupa.</td>
                                                <td class="text-center ">
                                                    <a href="cadastroEditar.html">
                                                        <button class="btn-primary btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Artesanato</td>
                                                <td>Pintura</td>
                                                <td>Este curso oferece  uma das mais clássicas
                                                        técnicas das artes plásticas ao acesso de todos.
                                                        Aprenda a pintar de maneira fácil e divertida,
                                                        utilizando diversas técnicas, podendo transferir
                                                        diversos desenhos a sua pintura, a partir da sua imaginação. </td>
                                                <td class="text-center ">
                                                    <a href="cadastroEditar.html">
                                                        <button class="btn-primary btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>
                                            <tr class="">
                                                <td>Artes Marciais</td>
                                                <td>Capoeira</td>
                                                <td>Arte marcial praticada principalmente com os pés</td>
                                                <td class="text-center ">
                                                    <a href="cadastroEditar.html">
                                                        <button class="btn-primary btn btn-xs">
                                                            <i class="fa fa-lg fa-pencil"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            </tr>

                                            <tr class="">
                                                    <td>Artes Marciais</td>
                                                    <td>Capoeira</td>
                                                    <td>Arte marcial praticada principalmente com os pés</td>
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

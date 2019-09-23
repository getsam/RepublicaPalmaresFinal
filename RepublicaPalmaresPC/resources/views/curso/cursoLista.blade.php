<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ONG Republica de palmares </title>

    <link href="<?php echo asset('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo asset('css/font-awesome/css/font-awesome.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo asset('css/plugins/dataTables/datatables.min.css')?>">

    <link href="<?php echo asset('css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo asset('css/style.css')?>" rel="stylesheet">

</head>

<body>
    <!-- Conteúdo princial página -->
    <div id="wrapper">
        <!-- Menu lateral links de navegação -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
               <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> 
                            <a href="{{url('/homerestrita')}}">
                                <h1 class="text-muted">Republica de Palmares</h1>
                            </a>
                        </div>
                        <div class="logo-element">
                            RCP
                        </div>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user"></i> <span class="nav-label">Cadastro</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ url('homerestrita/criar') }}">Criar</a></li>
                            <li><a href="{{url('homerestrita/listapessoas')}}">Editar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/homerestrita/modalidade')}}"><i class="fa fa-shield"></i> <span class="nav-label">Modalidade</span> </a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Cursos</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">

                            <li><a href="{{url('/homerestrita/cursolista')}}">Lista Cursos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Doações</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{url('/homerestrita/doacao')}}">Doar</a></li>
                            <li><a href="{{url('/homerestrita/doacaolista')}}">Ver</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Agenda</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{url('/homerestrita/agenda')}}">Criar</a></li>
                            <li><a href="{{url('homerestrita/listaevento')}}">Editar</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>  <!-- FIM - Menu lateral links de navegação -->

        <!-- Corpo conteudo -->
        <div id="page-wrapper" class="gray-bg">

            <!-- Barra superior header da pagina -->
            <div class="row border-bottom">
                
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <!-- botão hamburguer de esconder/expandir mennu -->
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#">
                            <i class="fa fa-bars"></i>
                         </a>            
                    </div><!-- FIM -botão hamburguer de esconder/expandir mennu -->
                    <!-- botão Sair do sitema -->
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <a href="{{url('/homerestrita')}}">
                                <i class="fa fa-sign-out"></i> Sair
                            </a>
                        </li>
                    </ul><!-- FIM - botão Sair do sitema -->
                </nav>
            </div> <!-- FIM - Barra superior header da pagina -->
            
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

            <!-- Rodapé -->
            <div class="footer">
                <strong>República Cultural </strong> &copy; - Copyright  
                <div class="pull-right">
                    Assossiação Cultural República de Palmares - 2019.
                </div>
            </div><!--FIM - Rodapé -->
        </div><!--FIM Corpo conteudo -->
    </div><!-- FIM - Conteúdo princial pagina -->

    <!-- Principais scripts -->
    <script src="<?php echo asset('js/jquery-2.1.1.js')?>"></script>
    <script src="<?php echo asset('js/bootstrap.min.js')?>"></script>
    <script src="<?php echo asset('js/plugins/metisMenu/jquery.metisMenu.js')?>"></script>
    <script src="<?php echo asset('js/plugins/slimscroll/jquery.slimscroll.min.js')?>"></script>

    <!-- Customização da Página -->
    <script src="<?php echo asset('js/inspinia.js')?>"></script>
    <script src="<?php echo asset('js/plugins/pace/pace.min.js')?>"></script>

    <!-- data table -->
    <script src="<?php echo asset('js/plugins/dataTables/datatables.min.js')?>"></script>
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
    
</body>
</html>

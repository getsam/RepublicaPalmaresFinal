<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ONG Republica de palmares | Login </title>

    <link href="<?php echo asset('css/bootstrap.min.css')?>" rel="stylesheet">



    <!-- Animation CSS -->
    <link href="<?php echo asset('css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo asset('css/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
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
                            <a href="homerestrita.html">
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
                            <li><a href="{{url('homerestrita/listacadastro')}}">Editar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="modalidade.html"><i class="fa fa-shield"></i> <span class="nav-label">Modalidade</span> </a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Cursos</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="curso.html">Criar</a></li>
                            <li><a href="cursoLista.html">Editar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Doações</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="doacao.html">Doar</a></li>
                            <li><a href="doacaoLista.html">Ver</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Agenda</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="agenda.html">Criar</a></li>
                            <li><a href="listaEvento.html">Editar</a></li>
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

                                    <a class="fa fa-sign-out" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Sair
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            
                        </li>
                    </ul><!-- FIM - botão Sair do sitema -->
                </nav>
            </div> <!-- FIM - Barra superior header da pagina -->
            
            <div class="row border-bottom">
            <!-- envelope do Conteúdo das views     -->
                <div class="wrapper wrapper-content animated fadeInRight">
                
                    <!-- ESPAÇO CONTEUDO DA PAGINA -->
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


    
</body>
</html>

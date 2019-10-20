<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Republica Cultural de Palmares</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo asset('css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Animation CSS -->
    <link href="<?php echo asset('css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo asset('css/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    {{-- <script src ="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> --}}
    @yield('link')
    

    <!-- Custom styles for this template -->
    <link href="<?php echo asset('css/style.css')?>" rel="stylesheet">
</head>
<body>
    <div id="wrapper">
        <!-- Menu lateral links de navegação -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
               <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> 
                            <a href="{{url('/home')}}">
                                <div class="content_img">
                                    <img src="{{ asset('storage/img/Logo_Republica_Cultural.png')}}" alt="" 
                                    class="logo-responsive">
                                </div>
                            </a>
                        </div>
                        <div class="logo-element">
                            <img src="{{ asset('storage/img/Logo_capoeira_vetorizado_finalizado_normal-01.png')}}" alt="" 
                            class="logo-responsive">
                        </div>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-list-alt"></i> <span class="nav-label">Cadastro</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{ url('home/criar') }}">Criar</a></li>
                            <li><a href="{{url('home/listapessoas')}}">Editar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-user "></i> <span class="nav-label">Usúario</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="#">Criar</a></li>
                            <li><a href="#">Editar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('/home/modalidade')}}"><i class="fa fa-shield"></i> <span class="nav-label">Modalidade</span> </a>
                    </li>
                    
                    <li>
                        <a href="#"><i class="fa fa-diamond"></i> <span class="nav-label">Cursos</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{url('/home/curso')}}">Criar</a></li>
                            <li><a href="{{url('/home/cursolista')}}">Editar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Alunos</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{url('/home/aluno')}}">Criar</a></li>
                            <li><a href="{{url('/home/alunolista')}}">Editar</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-institution"></i> <span class="nav-label">Depto/ Cargo</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{url('/home/departamento')}}">Criar</a></li>
                            <li><a href="{{url('/home/departamentolista')}}">Editar</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-briefcase"></i> <span class="nav-label">Colaborador</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{url('/home/colaborador')}}">Criar</a></li>
                            <li><a href="{{url('/home/colaboradorlista')}}">Editar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-money"></i> <span class="nav-label">Doações</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{url('/home/doacao')}}">Doar</a></li>
                            <li><a href="{{url('/home/doacaolista')}}">Ver</a></li>
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-calendar"></i> <span class="nav-label">Agenda</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{url('/home/agenda')}}">Criar</a></li>
                            <li><a href="{{url('home/agendaevento')}}">Editar</a></li>
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
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out" aria-hidden="true"></i>Sair
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                            
                        </li>
                    </ul><!-- FIM - botão Sair do sitema -->
                </nav>
            </div> <!-- FIM - Barra superior header da pagina -->
            
            @yield('conteudo')

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
    @yield('scripts') <!-- scripts adicionais de cada pagina -->
    <!-- Customização da Página -->
    <script src="<?php echo asset('js/inspinia.js')?>"></script>
    <script src="<?php echo asset('js/plugins/pace/pace.min.js')?>"></script>

    @yield('scriptUnico')
</body>
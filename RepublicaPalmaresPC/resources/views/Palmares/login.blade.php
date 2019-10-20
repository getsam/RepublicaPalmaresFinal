<!DOCTYPE html>
<html>

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>ONG Republica de palmares | Login </title>
    
    {{-- JS do laravel --}}
    {{-- <!--<script src="{{ asset('js/app.js') }}" defer></script>--> --}}

    <link href="<?php echo asset('css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo asset('css/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo asset('css/plugins/materialize/material-icons.css')?>">

    <!-- Sweet Alert -->
    <link href="<?php echo asset('css/plugins/sweetalert/sweetalert.css')?>" rel="stylesheet">


    <link href="<?php echo asset('css/animate.css')?>" rel="stylesheet">
    <link href="<?php echo asset('css/style.css')?>" rel="stylesheet">
    
</head>

<body class="gray-bg">
    
    <div class="loginColumns animated fadeInDown">
        <div class="row">

            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        
                    @endforeach
                </ul>
            </div>
               <script></script>
            @endif

            <div class="col-md-6">
                <h2 class="font-bold">República Cultural</h2>
                <h3>Assossiação Cultural República de Palmares</h3>
                <p>
                Ao longo destes anos criamos uma pedagogia e metodologia própria, capaz de transmitir nossas experiencias e reflexões sem limite de idade, as crianças, jovens e adultos.
                </p>
                
                <p>
                O que era para ser uma simples academia de capoeira engajada se transformou em um espaço de reflexão e produção cultural, possibilitando o diálogo entre diversas práticas educativas.
                </p>
                
                <p>
                Deste entrosamento comprometido com mudanças, evoluímos para uma República Cultural
                </p>
                
            </div>
            

            <div class="col-md-6">
                <div class="ibox-content">
                    <!-- formulario  de acesso do usuario -->
                    <form  method="post" id="entrar_sistema">
                        @csrf
                        <div class="form-group">

                            <input type="email" name="email "class="form-control" placeholder="Usuário" id="usuario_login" required aria-invalid="false">
                        </div>
                        
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Senha" id="senha_login" required aria-invalid="false">
                        </div>
                        <input type="submit" id="btn-login" class="btn btn-primary block full-width m-b" value="Entrar">
                        
                        <a href="#" data-toggle="modal" data-target="#myModal" class="pull-left">
                            <small>Esqueceu sua Senha?</small>
                        </a>
                        
                        <p class="text-muted text-right">
                            <small>Não possui uma conta?</small>
                        </p>
                        <button class="btn btn-sm btn-white btn-block">
                        <a href="/home"></a> Criar uma conta</button>
                    </form> <!--Fim - formulario -->
                    <p >
                        <small>Desenvolvido por alunos da FIT &copy; 2019</small>
                    </p>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                República Cultural
                &copy; <small>2019</small>
            </div>
        </div>
    </div>
    
    <div class="modal inmodal in" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated bounceInRight">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                
                    <h4 class="modal-title">Esqueci minha senha</h4>
                </div>
                <form action="" id="recuperar_senha">
                    <div class="modal-body">
                    
                        <div class="form-group">
                            <label for="esqueci-email">Informe no campo abaixo o e-mail cadastrado.</label>
                            <input type="email" id="esqueci-email" name="esqueci_email" placeholder="E-mail"class="form-control">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-white" data-dismiss="modal">cancelar</button>
                        <button type="submit" id="enviar-senha" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    

    <script src="<?php echo asset('js/jquery-2.1.1.js')?>"></script>
    <script src="<?php echo asset('js/bootstrap.min.js')?>"></script>

     <!-- Sweet alert -->
     <script src="<?php echo asset('js/plugins/sweetalert/sweetalert.min.js')?>"></script>

    <!-- Custom and plugin javascript -->
    <script src="<?php echo asset('js/inspinia.js')?>"></script>
    <script src="<?php echo asset('js/plugins/validate/jquery.validate.min.js')?>"></script>
    <script src="<?php echo asset('js/pages/login.js')?>"></script>

</body>
</html>

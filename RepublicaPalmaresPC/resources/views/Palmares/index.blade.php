<!DOCTYPE html>
<html lang="pt-br">
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

    <link rel="stylesheet" href="<?php echo asset('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css')?>">

    <!-- Custom styles for this template -->
    <link href="<?php echo asset('css/style.css')?>" rel="stylesheet">
</head>
<body id="page-top" class="landing-page">
<div class="navbar-wrapper">
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header page-scroll">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('/')}}">
                        REPÚBLICA CULTURAL
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="page-scroll" href="#page-top">Home</a></li>
                        <li><a class="page-scroll" href="#features">Sobre Nós</a></li>
                        <li><a class="page-scroll" href="#testimonials">Testemunhos</a></li>
                        <li><a class="page-scroll" href="#teste">Programas</a></li>
                        <li><a class="page-scroll" href="#contact">Fale Consoco</a></li>
                        <li><a class="" href="{{ url('/login')}}">Entrar</a></li>
                    </ul>
                </div>
            </div>
        </nav>
</div>
<div id="inSlider" class="carousel carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#inSlider" data-slide-to="0" class="active"></li>
        <li data-target="#inSlider" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
       
        <div class="item active">
            <div class="container">
                <div class="carousel-caption">
                    <div class="carousel-content">
                        <h1>O que  era para ser uma simples  academia de capoeira   engajada se transformo em um espaço de reflexão e produção cultural,  possibilitando o diálogo entre  diversas práticas educativas.
                        </h1>

                        
                        <p class="m-t-lg">
                            <a class="btn btn-lg btn-primary" href="#contact" role="button">Saiba mais</a>
                        </p>
                    </div>
                </div> 
                <!-- <div class="carousel-image wow zoomIn">
                    <img src="img/landing/laptop.png" alt="laptop"/>
                </div> -->
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back one" style="background: url({{ asset('storage/img/landing/header_one.jpg')}})  50% 0 no-repeat;"></div>

        </div>
        <div class="item">
            <div class="container">
                <div class="carousel-caption blank">
                    <div class="carousel-content">
                        <h1>A profundidade de nossas ações<br/>
                            fizeram de nossa associação<br/>
                            uma entidade muito além<br/>
                            de uma simples academia de capoeira.</h1>
                        <p class="m-t-lg">
                            <a class="btn btn-lg btn-primary" href="#contact" role="button">Saiba mais</a>
                        </p>
                    </div>
                </div>
            </div>
            <!-- Set background for slide in css -->
            <div class="header-back two" style="background: url({{ asset('storage/img/landing/header_two.jpg')}})  50% 0 no-repeat;"></div>
        </div>
    </div>
    <a class="left carousel-control" href="#inSlider" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#inSlider" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<section id="features" class="container services">
    <div class="row">
        <div class="col-sm-12">
            <h2>NOssa história</h2>
            <p>A nossa associação nasceu entre o final da década de setenta e o início dos anos oitenta. A motivação que nos levou a fundar esta entidade foi basicamente três coisas: em primeiro lugar a nossa paixão Pela cultura e arte genuína de nosso povo que por si só é um gesto de rebeldia de questionamento do que esta posto. Em segundo lugar, tratava-se de demonstrar na pratica e de um modo formal o nosso grau de compromisso e envolvimento com a capoeira e a arte folclore brasileiro, para nós uma arma de libertação e finalmente, víamos nesta associação uma espécie de “templo” onde a vivência na e com a capoeira ganhava um sentido ideológico, político e sobretudo filosófico.</p>
            <p> Tratava-se de perceber e demonstrar a dimensão aglutinadora e libertadora de nossa arte. Desde o começo de nossas atividades, homens, mulheres, jovens e crianças da periferia se identificavam com a capoeira e lotavam os espaços onde oferecíamos os nossos cursos. Cada instrutor, Professor ou mestre percebeu esta atitude das pessoas é  uma escolha e se é uma escolha, é uma atitude política na sua essência. E ai? As pessoas escolheram a sua arte, a capoeira para si ou para alguém de sua família e o que você tem para oferecer? Pancada? Violência? Defesa pessoal?</p>
            <p>A resposta que nos da Associação de Capoeira República de Palmares (ACRP) oferecemos foram projetos de trabalho dando a cada aluno a oportunidade de conhecer um outro lado de nossa historia, uma historia não contada; a historia dos quilombos, dos negros, de suas crenças, de seus cantos, de seus heróis como Zumbi, Canga Zumba, Mestre Bimba, Mestre Pastinha e tantos outros. Foi assim no projeto Expanção da Capoeira em Osasco, que atendia cerca de 450 pessoas nos centros de vivencia e que priorizava menores em situação de risco entre 1982 e 1986.</p>
           
            <p>A profundidade de nossas ações fizeram de nossa associação uma entidade muito além de uma simples academia de capoeira e os novos projetos apontam para um novo caráter com muito mais amplitude aprofundando a dimensão cultural de nossa casa. Queremos ir mais longe e mais fundo nas questões, nos nossos aportes. Temos uma história que aponta nesta direção e o momento cobra esta decisão</p>
            <p>Decidimos em Assembléia no final de 2007 que não podemos nos contentar em sermos apenas “Associação de Capoeira República de Palmares”, somos agora uma Associação Cultural República de Palmares e faremos de nossas experiências uma Republica Cultural onde a Capoeira tem seu espaço mas abre as portas para outros projetos que complementarão o sentido de ser de nossa nova entidade.</p>
            <!-- <p>
            <a class="navy-link" href="#contact" role="button">Saiba Mais &raquo;</a>
            </p> -->
        </div>
        
    </div>
</section>

<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
            
                <div class="navy-line m-b-lg"></div>
                
                <h1 class="m-b-n-xxs">Capoeira</h1>
                <small>Nosso carro chefe</small>
                
                <p class="m-t-lg">Mestre Bimba, Mestre Pastinha entre  outros anônimos, são figuras que se transformaram em ícones mundiais, em verdadeiras vergas de sustentação, e, porque não dizer raízes das duas vertentes da Capoeira do Brasil para o mundo; Bimba com a Regional e Pastinha com a capoeira Angola, um voando e marcializando e o outro se resguardando e serpenteando. Ambos na roda, na ginga, nos toques de berimbau verdadeiros tripés de nossa arte. Depois de tantas lutas dentro e fora da roda, nossa memória e nosso saber vão aos poucos sendo reconhecido e valorizado. A Capoeira é hoje, patrimônio histórico e material do povo brasileiro tombado pelo IPHAM*.</p>
                <p>A capoeira é fruto de uma experiência, de uma vivência histórica e tradicional de nosso povo, e sobreviveu praticamente tendo como base a oralidade. É hora de darmos um salto de qualidade para isto, este conhecimento, esta experiência educativa, precisa ser sistematizada e transformada em conteúdo histórico e pedagógico a ser trabalhado em ambientes que vão além das rodas de capoeira, nas salas de aulas até as universidades. Cabe a nós, o papel de protagonistas do destino da capoeira em nossa história. Não temos o direito de abandonar a capoeira como “um barco solto nas ondas do mar” sem direção.</p>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-lg-3 features-text wow fadeInLeft">
                <small>Capoeira</small>
                <h2>Angola </h2>
                <p>Os negros vindos para o Brasil eram em sua maioria de Angola, diziam ser mais ágeis, por terem estatura mediana e por isto tinham mais aproveitamento no trabalho e no jogo da Capoeira. O nome “CAPOEIRA” deu-se pelo motivo dos escravos ao fugirem para as matas, cujo nome é Capoeira. Os senhores mandavam os capitães-do-mato buscarem os escravos, que os atacavam com pés, mãos e cabeça, dando-lhes surras ou até mesmo matando-os, porém os que sobreviviam voltavam para os seus patrões indignados. Então os Senhores perguntavam: -”Cadê os negros?” e a resposta era: – Nos pegaram na Capoeira”, referindo-se ao local onde formam vencidos</p>
                <!-- <a href="" class="btn btn-primary">Learn more</a> -->
            </div>
            <div class="col-lg-6  col-md-6 logo-content-sobre wow zoomIn">
                <div class="logo-container">
                <img src="{{ asset('storage/img/Logo_capoeira_vetorizado_finalizado_normal-01.png')}}" class="img-responsive" alt="Capoeira republica de Palmares"/>
                </div>
                
            </div>
            
            <div class="col-lg-3 features-text text-right wow fadeInRight">
                <small>Capoeira</small>
                <h2>Regional </h2>
                <p>Afluente da Capoeira Angola, a Capoeira Regional é caracterizada pela agilidade de seus movimentos, bem como a variedade bem maior do que os da Capoeira Angola. Digo “afluente da Capoeira Angola” porque foi a partir dela que Manoel dos Reis Machado criou a Capoeira Regional. Inspirado nos movimentos da Angola mesclados com os do batuque, uma dança africana na qual o pai de Manoel dos Reis Machado, o senhor Luiz Cândido Machado era campeão, foi criada a “luta regional baiana”, um dos títulos que a capoeira regional teve. O estilo regional de jogar capoeira é marcado pela rapidez de seus golpes e contra-golpes e pelo ritmo acelerado dos toques do berimbau.</p>
                <!-- <a href="" class="btn btn-primary">Learn more</a> -->
            </div>
        </div>
    </div>

</section>


<section id="testimonials" class="navy-section testimonials" style="margin-top: 40px">

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center wow zoomIn">
                <i class="fa fa-comment big-icon"></i>
                <h1>
                   Palavra de Mestre
                </h1>
                <div class="testimonials-text">
                    <i>"ser mestre é ser antes de mais nada, ser um educador e assumir este papel na sociedade em que vivemos."</i>
                </div>
                <small>
                    <strong>Luiz Carlos - Meste Azambuja</strong>
                    
                </small>
                <br>
                <small>Fundador do Grupo Itambé da Bahia e Mestre de Capoeira</small>
            </div>
        </div>
    </div>

</section>

<section class="comments gray-section" style="margin-top: 0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1>Assim como o berimbau...</h1>
                <p>O Berimbau é o maior representante não apenas da capoeira, durante uma roda de capoeira ele troca de mãos a fim de manter sempre o axé e toda a mandiga da capoeira; com o conhecimento e a informação deve se adotar o mesmo procedimento, ou seja, compartilhar divulgar difundir, disseminar, pois o conhecimento é uma grande arma e deve ser usado sempre com a intenção de construir uma sociedade melhor, um ser humano melhor e com isso um mundo melhor. </p>
            </div>
        </div>
        <div class="row features-block">
            <div class="col-lg-4">
                <div class="bubble">
                    "Quem não pode com mandiga não  carrega patuá, Quem não vive, não pesquisa, Não tem nada pra falar"
                </div>
                <div class="comments-avatar">
                    <a href="" class="pull-left">
                        <img alt="image" src="{{ asset('storage/img/landing/avatar3.jpg')}}">
                    </a>
                    
                    <div class="media-body">
                        <div class="commens-name">
                            Mauro Sergio dos Santos - Mestre Falcão
                        </div>
                        <small class="text-muted">Mestrado em química e Mestre de capoeira</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bubble">
                    "Capoeirista não é aquele que sabe movimentar o corpo, e sim aquele que se deixa movimentar pela alma"
                </div>
                <div class="comments-avatar">
                    <a href="" class="pull-left">
                        <img alt="image" src="{{ asset('storage/img/landing/avatar1.jpg')}}">
                    </a>
                    
                    <div class="media-body">
                        <div class="commens-name">
                            José Carlos da Silva - Mestre Borboleta
                        </div>
                        <small class="text-muted">Presidente da ACRP e Mestre de Capoeira</small>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="bubble">
                "Quem não pode com mandiga não  carrega patuá, Quem não vive, não pesquisa, Não tem nada pra falar"
                </div>
                <div class="comments-avatar">
                    <a href="" class="pull-left">
                        <img alt="image" src="{{ asset('storage/img/landing/avatar2.jpg')}}">
                    </a>
                    <div class="media-body">
                        <div class="commens-name">
                            Hélio Dionisio - Mestre Bambam
                        </div>
                        <small class="text-muted">Professor de Ed. Física e Mestre de Capoeira</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="features" id="teste">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center p-w-xl">
                <div class="navy-line"></div>
                <h1>Capoeira como filosofia de vida.</h1>
                <div class="p-w-xl m-t-md">
                <p>O que  era para ser uma simples academia de capoeira engajada se transformou em um espaço de reflexão e produção cultural, possibilitando o diálogo entre  diversas práticas educativas. Deste entrosamento comprometido com mudanças, evoluímos para uma República Cultura ou seja; ambiente aberto às diferentes práticas e experiências culturais, tendo como referência um  compromisso social focado na construção de um novo homem e uma nova sociedade. </p> 
                </div>
                


            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 features-text">
                <small>Pratique</small>
                <h2 class="font-bold text-info">Artes Marciais</h2>
                <i class="fa fa-bar-chart big-icon pull-right"></i>
                <p>Existem centenas de estilos diferentes de artes marciais e cada uma desenvolve técnicas de luta e métodos de treinamento que garantem a eficiência do estilo. Nosso carro chefe é a capoeira mas, abrimos espaço para diversas outra modalidades tais como: Boxe, Judô, Muay-Tay entre outras.</p>
            </div>
            <div class="col-lg-5 features-text">
                <small>Toque e cante</small>
                <h2 class="font-bold text-info">Música</h2>
                <i class="fa fa-bolt big-icon pull-right"></i>
                <p>Boas Músicas muitas vezes refletem o ambiente e o tempo de sua criação. A música em si é história, e cada uma normalmente tem o seu próprio plano de fundo e um enredo. Baseado nesta linha de pensamento que oferecemos diversos cursos de música, entre eles pode mos citar: Percusão, cordas e cantos.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-5 col-lg-offset-1 features-text">
                <small>Aprenda</small>
                <h2 class="font-bold text-info">Teatro</h2>
                <i class="fa fa-clock-o big-icon pull-right"></i>
                <p>O teatro é uma das manifestações artísticas mais poderosas, principalmente por ser uma das mais completas, o estudante pode passar por várias experiências e formas de vida distintas e acaba melhorando o seu próprio repertório, tornando-se uma pessoa mais flexível, interessante, inteligente e autoconfiante.</p>
            </div>
            <div class="col-lg-5 features-text">
                <small>Faça</small>
                <h2 class="font-bold text-info">Artesanato </h2>
                <i class="fa fa-users big-icon pull-right"></i>
                <p>Artesanato existe desde a idade média quando trabalhadores qualificados eram necessários para produzir itens de necessidade básica. Hoje em dia, a maioria das mercadorias é feita em uma linha de produção de fábrica, então artesãos talentosos e capazes de exibir suas habilidades podem ter uma carreira reconhecida e lucrativa.</p>
            </div>
        </div>
    </div>

</section>

<!-- seção fale conosco -->
<section id="contact" class="gray-section contact">
    <div class="container">
        <div class="row m-b-lg">
            <div class="col-lg-12 text-center">
                <div class="navy-line"></div>
                <h1 class="m-b-lg">Fale conosco</h1>
                
                <form action="cadInteressado" class="m-t-xl" id="fale-conosco" method="POST">
                    @csrf
                    <div class=" col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="nome_Interessado" class="label-control pull-left">
                                        Nome
                                    </label>
                                    <input id="nome_Interessado" type="text"  name="nome_Interessado" class="form-control" required placeholder="Ex: joao da silva">
                                </div>

                                <div class="form-group">
                                    <label for="telefone_Interessado" class="label-control pull-left ">
                                        Telefone
                                    </label>
                                    <input type="tel" name="telefone_Interessado" id="telefone_Interessado" required class="form-control celphones" placeholder="Ex: (99)99999-9999" >
                                </div>

                                <div class="form-group">
                                    <label for="email_Interessado" class="label-control pull-left">
                                        E-mail
                                    </label>
                                    <input type="email" name="email_Interessado" id="email_Interessado" required class="form-control" placeholder="Ex: joao@silva.com">
                                </div>

                                <div class="form-group ">
                                    <h3 class="text-navy">
                                        Assuntos de Interesse
                                    </h3>
                                    <div class="d-flex-between">
                                        <div class="checkbox checkbox-inline checkbox-info">
                                            <input type="checkbox" name="interesse[]" id="interesse_Aula" value="1">
                                            <label for="interesse_Aula"><strong class="text-uppercase">Aluno</strong></label>
                                        </div>
    
                                        <div class="checkbox checkbox-inline checkbox-info">
                                            <input type="checkbox" name="interesse[]" id="interesse_Colaborador" value="2">
                                            <label for="interesse_Colaborador">
                                                <strong class="text-uppercase">Colaboradores</strong>
                                            </label>
                                        </div>
    
                                        <div class="checkbox checkbox-inline checkbox-info">
                                            <input type="checkbox" name="interesse[]" id="interesse_Doador" value="3">
                                            <label for="interesse_Doador">
                                                <strong class="text-uppercase">Doação</strong>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <textarea id="texto_Interessado" name="mensagem_Interessado" cols="30" rows="12" required placeholder="Escreva seu texto aqui" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="col-md-12">
                        <button id="enviar-form" type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row m-b-lg">
            <div class="col-lg-6 col-lg-offset-3 text-center">
                <address>
                    <strong><span class="navy">Assossiação Cultural República de Palmares</span></strong><br/>
                    Av. Gal. Newtom Stilac Leal, 1375<br/>
                    Cidade das Flores, Osasco <br/>
                    São Paulo CEP: 06180-000 <br/>
                    <a href="tel:(11)34979553" title="Phone">Tel: (11) 3497-9553</a>
                </address>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center">
               
                <p class="m-t-sm">
                    Siga-nos em nossas redes sociais
                </p>
                <ul class="list-inline social-icon">
                    <li><a href="https://www.instagram.com/oficial_acrepublicadepalmares" target="_blank"><i class="fa fa-instagram"></i></a>
                    </li>
                    <li><a href="https://www.facebook.com/RepublicadePalmares" target="_blank"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li><a href="https://www.youtube.com/channel/UCJE9y-cZd862V3GLphtLd7Q" target="_blank"><i class="fa fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center m-t-lg m-b-lg">
                <p><strong>&copy; 2019 Associação Cultural republica de Palmares</strong></p>
            </div>
        </div>
    </div>
</section>


<!-- Mainly scripts -->
<script src="<?php echo asset('js/jquery-2.1.1.js')?>"></script>
<script src="<?php echo asset('js/bootstrap.min.js')?>"></script>
<script src="<?php echo asset('js/plugins/metisMenu/jquery.metisMenu.js')?>"></script>
<script src="<?php echo asset('js/plugins/slimscroll/jquery.slimscroll.min.js')?>"></script>

<!-- Custom and plugin javascript -->
<script src="<?php echo asset('js/inspinia.js')?>"></script>
<script src="<?php echo asset('js/plugins/pace/pace.min.js')?>"></script>
<script src="<?php echo asset('js/plugins/wow/wow.min.js')?>"></script>

<script src="<?php echo asset('js/plugins/validate/jquery.validate.min.js')?>"></script>
<!-- <script src="js/plugins/jasny/jasny-bootstrap.min.js"></script> -->


<script src="<?php echo asset('js/plugins/jqmask/jquery_mask.js')?>"></script>
<script src="<?php echo asset('js/pages/validator.js')?>"></script>
<script src="<?php echo asset('js/pages/index.js')?>"></script>
</body>
</html>

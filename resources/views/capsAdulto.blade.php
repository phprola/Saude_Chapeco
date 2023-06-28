<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Sistema de Saúde e Atenção Psicossocial - Chapecó (SC)</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href= "{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top">Saúde Mental - Chapecó (SC)</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="./">Início</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="CapsDrogas">Caps Álcool e Drogas</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="CapsAdulto">Caps Adulto </a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="CapsInf">Caps Infantil</a></li>
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="outros">Outros</a></li>
                    </ul>
                </div>
            </div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-5 px-5 py-2 sm:block navbar-nav">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="nav-link text-uppercase">Painel</a>
                    @else
                        <a href="{{ route('login') }}" class="nav-link text-uppercase">Entrar</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-link text-uppercase">Cadastrar</a>
                        @endif
                    @endauth
                </div>
            @endif
        </nav>
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-6 text-center">
                <h1 class="fw-bolder"> Bem-vindo! Parabéns por estar buscando ajuda.</h1><br>
                <img src="img/3.png" width="100%" height="20%">
                <h6>Descrição de imagem: CAPS, RECONSTRUINDO UMA HISTÓRIA JUNTOS. O banner possui o fundo de uma parede branca, e bem ao centro está escrito CAPS 2, em letras grandes azuis. Logo abaixo está escrita a frase: "reconstruindo uma história juntos". Nos dois lados da imagem há três peças de lego sendo encaixadas, feito um jogo de quebra-cabeças. No canto inferior da imagem estão 7 Girassóis amarelos e iguais.</h6>
            </div><br>
        </header>
        <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Quando buscar o CAPS Adulto?</h2>
                        <br>
                        <h5>O Centro de Acolhimento Psicossocial (CAPS) Unidade II no município de Chapecó (SC) desde 2002 e é  responsável pelo atendimento de pessoas com transtornos mentais graves e persistentes, como transtornos psicóticos (esquizofrenia, trastorno delirante persistente, transtorno psicótico breve, transtorno esquizoafetivo e psicose), transtornos afetivos graves (transtorno bipolar tipo 1 e 2, depressão recorrente grave, transtornos de personalidade (antissocial, histriônica, emocionalmente instável, personalidade dependente) e transtornos impulsivos-compulsivos(TOC e transtornos alimentares).</h5>

                    </div>
                </div>
            </div>
        </section>


        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Quem pode me atender? </h2>
                        </p>
                        <h5>Esta unidade conta com mais de 20 servidores públicos efetivados. Foram realizos mais de 7700 atendimentos entre os meses de Janeiro e Julho de 2022.</h5>
            <br>
            <ul>


            <li>7 Auxiliares de Enfermagem</li>
            <li>5 Psicólogos Clínicos</li>
            <li>4 Médicos Psiquiatras</li>
            <li>2 Médicos Clínicos</li>
            <li>2 Enfermeiros</li>
            <li>1 Assistente Social</li>
            <li>Auxiliar em Saúde Bucal</li>
            <li>1 Farmacêutico</li>

        </div>
                </div>
            </div>
        </section>

<section>
        <div class="container px-6 text-center">
            <h1 class="fw-bolder">Seguro, Completo, Gratuito e de Qualidade</h1><br>
            <img src="img/12.png" width="100%" height="20%">
            <h6>Descrição de Imagem: Está escrito ATENDIMENTO HUMANIZADO E DIGNO ao centro e há um coração rosa claro abaixo. O fundo do banner possui uma textura branca, similar a uma porcelana rachada, e ao lado do texto está um desenho em preto e branco de uma gaiola, e logo ao lado um passarinho, também em formato de sombra, preto e branco. O passarinho está a voar, e mais adiante há um bando de passarinhos no mesmo estilo de desenho.</h6>
        </div>
    </div>
</section>



   <!-- Footer-->
   <footer class="py-5 bg-dark botton-0">
    <div class="container px-4"><p class="m-0 text-center text-white">Projeto IFSC &copy; Participação de Giordano Ritter Parisotto, Pedro Henrique Pedroso Prola, Vitor Luis de Souza, Marcos Alessandro Ambrozio</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>

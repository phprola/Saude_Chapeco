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
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-6 text-center">
                <h1 class="fw-bolder"> Bem-vindo! Parabéns por estar buscando ajuda.</h1>
                <br>
                <!-- ======= WELCOME SECTION ======= -->


                  <div>
                      <img src="img/2.png" width="100%" height="20%">
                     <h6>Descrição de imagem: UM DIA DE CADA VEZ. O fundo do banner é branco, simulando uma folha de papel amassada, e sob ela está uma faixa azul clara, e escrito: "Um dia de Cada Vez…", que é lema do grupo Alcoólatras Anônimos. Abaixo da faixa, está o desenho de um sorriso, com um traço preto representando duas covinhas nas bochechas. No canto inferior do banner, está escrito "O SUS cuida, o SUS melhora, o SUS ajuda".</h6>
                  </div>

                  <!-- ======= WELCOME SECTION END  ======= -->
        </header>
        <!-- About section-->
         <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Para quem é o CAPS AD?</h2>
                        O CAPS Álcool e Drogas é um serviço ambulatorial humanizado que realiza ações de assistência (medicação, atendimento individual, oficinas terapêuticas, grupos de apoio, atenção familiar), de prevenção e capacitação de profissionais visando a reinserção social e familiar de dependentes químicos. Atende especialmente mas não exclusivamente maiores de 18 anos.

<br>
<br>
<br>
<br>
<br>
                        <div class="col-lg-8">
                            <h2>Nosso atendimento</h2>
                        </div>
                            <p class="lead">
                                O CAPS AD III dispõe de 12 leitos de acolhimento noturno, onde os usuários podem permanecer acolhidos por até 14 dias, conforme prevê a portaria do Plano de Saúde Municipal.
                                Dentro da rede de acolhimento existe a  Unidade de Acolhimento (UA) foi implementada em 2013 a partir da demanda do CAPS AD em alterar sua modalidade para CAPS AD III (24 horas).                        </p>
                                <br>Como parte dos SUS, os CAPS são financiados com recursos do Ministério da Saúde e, diferentemente do que ocorre em instituições psiquiátricas de modelo asilar, como hospitais psiquiátricos e comunidades terapêuticas, suas abordagens consideram a singularidade, a história, a cultura e o cotidiano de cada sujeito, com o objetivo de garantir cuidado em liberdade, cidadania, autonomia e inclusão social a seus usuários e familiares. <br>

                    </div>
                </div>
            </div>
            <br>
            <br>
            <div>
                <div class="container px-6 text-center">
                <h1 class="fw-bolder">
                    Seguro, Completo, Gratuito e de Qualidade</h1>
                <br>
                <img src="img/12.png" width="100%" height="20%">
                <h6>Descrição de Imagem: Está escrito ATENDIMENTO HUMANIZADO E DIGNO ao centro e há um coração rosa claro abaixo. O fundo do banner possui uma textura branca, similar a uma porcelana rachada, e ao lado do texto está um desenho em preto e branco de uma gaiola, e logo ao lado um passarinho, também em formato de sombra, preto e branco. O passarinho está a voar, e mais adiante há um bando de passarinhos no mesmo estilo de desenho.</h6>


        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Perguntas Frequentes </h2>
                        <br>
                        <p class="lead">Quanto tempo dura o tratamento?</h2>
                        </p>
                        <br>O tratamento varia muito de pessoa a pessoa, conforme os sintomas e o diagnóstico. O melhor é consultar um médico, que fornecerá mais informações de acordo com sua situação.

                        <br>

                        <br>
                        <p class="lead">O paciente é obrigado a seguir no tratamento até o final?</h2>
                        </p>
                        <br>A equipe de profissionais do SUS incentiva a concluir e seguir com os tratamentos psicológicos e psiquiátricos até que o paciente receba alta médica. Nem sempre será fácil, pois cada organismo é diferente e possui uma adaptação diferente a cada tratamento. ATENÇÃO! Se estiver em tratamento e pensa em desistir, o melhor é conversar com seu médico ou outro profissional da área de saúde que possa orientá-lo melhor para evitar crises futuras. <br>


                        <br>
                        <p class="lead">O paciente é obrigado a seguir no tratamento até o final?</h2>
                        </p>
                        <br>A equipe de profissionais do SUS incentiva a concluir e seguir com os tratamentos psicológicos e psiquiátricos até que o paciente receba alta médica. Nem sempre será fácil, pois cada organismo é diferente e possui uma adaptação diferente a cada tratamento. ATENÇÃO! Se estiver em tratamento e pensa em desistir, o melhor é conversar com seu médico ou outro profissional da área de saúde que possa orientá-lo melhor para evitar crises futuras. <br>


                </div>
                <br>
                <br>
            </div>
            <br>


        <!-- Footer-->
        <footer class="py-5 bg-dark">
        <div class="container px-4"><p class="m-0 text-center text-white">Projeto IFSC &copy; Participação de Giordano Ritter Parisotto, Pedro Henrique Pedroso Prola, Vitor Luis de Souza, Marcos Alessandro Ambrozio</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/scripts.js')}}"></script>
    </body>
</html>


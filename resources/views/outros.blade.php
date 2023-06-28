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


                <!-- =======CONTEUDO SECTION ======= -->
                <div class="container px-4">

                    <div>
                        <img src="img/10.png" width="100%" height="20%">
                        <h6>Descrição de Imagem: Depressão não é frescura. Banner de fundo azul escuro e texto escrito em letras grandes, brancas, garrafais. Está em destaque sob uma faixa rosa a frase “Depressão é uma doença” e possui tratamento.  EM letras menores, escrito abaixo: “Não abandone o seu bem estar. Visite a unidade Básica de Saúde mais próxima”.  Ao lado da frase principal há o símbolo médico de “frequência cardíaca” e um coração rosa ao lado.
                            </h6>
                        </header>
                    </div>

                <br>


                    <div class="container px-4">
                    <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                            <h2>Serviços da Unochapecó</h2>
                            <p> Para ter acesso aos atendimentos da Unochapecó e contato com profissionais e estagiários da área de psicologia, precisa realizar cadastro contatando via e-mail, whatsapp ou então presencialmente na diretoria do curso. Os custos variam conforme o serviço disponível e a renda familiar do paciente.</p>
                        </div>
                    </div><br>
                    <div class="row  gx-4 justify-content-center">
                        <div class="col-lg-8">
                            <div class="col-lg-8">
                            <h4>Contato: (49) 98437-1402</h4>
                            </div></div></div> </div> <br> <br>


                     <div class="container px-4">
                     <div class="row gx-4 justify-content-center">
                     <div class="col-lg-8">

                                <h2>Serviços da UNOESC </h2>
                                <p> A Universidade do Oeste de Santa Catarina (UNOESC) possui um programa de estágio supervisionado que prevê o acolhimento psicológico e serviços como: atendimento infantil, adolescente e adulto, atendimento de família, atendimento de casal, acolhimento em grupo, orientação profissional, plantão psicológico e avaliação psicológica. Ao contatar a equipe de serviços de Atendimento Psicológico da universidade, recebemos a informação de que é necessário realizar o primeiro contato com os serviços através do plantão psicológico.</p>
                                </div>
                                </div><br>

                                <div class="row  gx-4 justify-content-center">
                                <div class="col-lg-8">
                                <h4>Contato: sap.cco@unoesc.edu.br ou (49) 3319-2683
                                </h4>
                                </div> </div></div>

            <!-- Services section-->
            <section class="bg-light" id="services">
                <div class="container px-4">
                    <div class="row gx-4 justify-content-center">
                        <div class="col-lg-8">
                            <h2>Como funciona?</h2>
                            <p class="lead">    O paciente  será recebido no plantão, passa por avaliação psicológica e será encaminhado à fila de espera ou ao atendimento necessário conforme gravidade da enfermidade. O acompanhamento é impreterivelmente realizado de forma semanal por tempo indefinido.</p><br>

                        </div>
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


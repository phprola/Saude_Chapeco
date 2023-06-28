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
                <div>
                    <img src="img/6.png" width="100%" height="20%">
                    <h6>Descrição de imagem: SAÚDE DA CRIANÇA, FIQUE ATENTO AOS SINAIS. O banner possui fundo azul escuro e letras claras. Bem grande e ao centro está escrito: SAÚDE DA CRIANÇA. e logo abaixo uma baixa azul claro, escrito “FIQUE ATENTO AOS SINAIS”.</h6>
                </div><br>
            </div>
        </header>
        <section>
            <section id="about">
                <div class="container px-4">
                    <div class="row gx-4 justify-content-center">
                        <div class="col-lg-8">
                            <h2>Como funciona o CAPS para crianças e adolescentes?</h2>
                            <p> O CAPS infantil ou CAPSi recebe crianças acima de dois anos, pré-adolescentes e adolescentes com transtornos mentais graves e persistentes, incluindo o uso de drogas e psicoativos. Difere-se do atendimento CAPS Adulto por possuir acompanhamento de neuropsicólogos especializados em infância, pediatras e psicopedagogos na equipe profissional. Está em funcionamento desde 2005 em Chapecó.</p>
                        </div>
                    </div><br><br><br><br><br>
                    <div class="row  gx-4 justify-content-center">
                        <div class="col-lg-8">
                            <div class="col-lg-8">
                                <h2>Saúde mental na infância e adolescência</h2>
                            </div>

                            <p class="lead">
                                Assim como os adultos, as crianças e os adolescentes também podem desenvolver transtornos mentais, sendo mais recorrentes os transtornos do desenvolvimento psicológico e transtornos de comportamento e emocionais.

                Os transtornos mentais em crianças e adolescentes costumam ser motivados por fatores específicos que podem ser divididos entre genéticos, relacionados ao histórico familiar de transtorno mental; psicossociais, relacionados a casos de disfunções na vida familiar e situações indutoras de estresse; biológicos, relacionados a situações de anormalidades do sistema nervoso central, que podem ser causadas por lesões, infecções, desnutrição ou exposição a toxinas; e ambientais, relacionados a problemas enfrentados na comunidade, por exemplo, violência urbana ou abusos.

                Identificar transtornos mentais durante a infância e adolescência pode ser um desafio, tendo em vista que muitas crianças costumam ter dificuldades para expressarem seus sentimentos ou conseguirem compreender suas emoções.</h5>
                          </p>  <br>
                    </div>
                </div>

                <div class="container px-6">
                    <div>
                        <img src="img/8.png" width="100%" height="20%">
                            <h6>Descrição de imagem: Em fundo rosa claro, está escrito em preto: 75% dos transtornos mentais se iniciam na infância e adolescência e metade deles ocorrem até os 14 anos. A adolescência é um momento crítico, mas a infância tem um protagonismo importante nesses casos. A frase "adolescência é um momento crítico” está escrita em destaque sob uma faixa azul-ciano. A imagem logo abaixo aparece suas parceiras, o Portal de Boas Práticas em Saúde da Mulher, Criança e do Adolescente. O Instituto Nacional Fernandes Figueira e a Fundação Oswaldo Cruz Fiocruz do Ministério da Saúde e o Sistema Único de Saúde SUS.</h6>
                        </div>
                 </section>

            <!-- Services section-->
            <section class="bg-light" id="services">
                <div class="container px-4">
                    <div class="row gx-4 justify-content-center">
                        <div class="col-lg-8">
                            <h2>Quando devo buscar ajuda para meu filho?</h2>
                              <p class="lead">    Nas suas diferentes modalidades os CAPS oferecem atendimento clínico em regime de atenção diária à população, com equipe multiprofissional que reúne médicos, assistentes sociais, psicólogos, psiquiatras, enfermeiros, terapêutas ocupacionais, entre outros agentes da rede pública. Aqui você encontra:</p><br>
                                <ul>
                                <li>Dificuldades no desenvolvimento e aprendizado escolar</li>
                                <li>Diminuição no rendimento escolar</li>
                                <li>Agressividade</li>
                                <li>Apresenta dificuldades para dormir ou tem muitos pesadelos</li>
                                <li>Dificuldades com a alimentação</li>
                                <li>Dores no corpo frequentes</li>
                                <li>Evita amigos e familiare</li>
                                <li> Passa por mudanças constantes de humor</li>
                                <li>Agitação, hiperatividade, medos e tristezas profundas</li>
                                <li>Tenta se machucar com frequência;</li>
                                <li>Comportamento suicida na infância e automutilação</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container px-6">
            <div>
                <img src="img/5.png" width="100%" height="20%">
                <h6>Descrição de imagem: CRIANÇA E ADOLESCENTE. ACOLHIMENTO PSICOLÓGICO E PSIQUIÁTRICO PARA PRÉ-ADOLESCENTES.
                   O banner possui fundo azul ciano, e a partir da metade existe uma borda simulando um papel rasgado, branco. Em cima do fundo, está escrito, em letras grandes e garrafais: CRIANÇA E ADOLESCENTE, centralizado.  No canto esquerdo inferior, está escrito "Acolhimento Psicológico e Psiquiátrico para Pré-Adolescentes".  Mais à direita, temos vários traços rosas e uma lista com escrito: equipe de neuropsicólogos especializados em infância, psicopedagogos e pediatras.
             </h6>

             </div>
             <br>


            <section class="bg-light" id="services">
                <div class="container px-4">
                    <div class="row gx-4 justify-content-center">
                        <div class="col-lg-8">
                            <h2>Cuidados importantes</h2>
                <div class="container px-4">
                    <div class="row gx-4 justify-content-center">
                            <ul>
                                <li>Realizar atividades prazerosas e que tenham valor para a criança ou o adolescente, como ler, cantar, praticar algum esporte, entre outras</li>
                                <li>Estabelecer horários e rotina para as atividades do dia a dia</li>
                                <li>Explicar sobre os sentimentos e as emoções para as crianças</li>
                                <li> Promover conversas abertas e sem julgamentos sobre possíveis problemas que a criança ou o adolescente esteja enfrentando</li>
                                <li>Manter a alimentação e o sono saudáveis</li>
                                <li> Praticar exercícios físicos regularmente</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </section>

        <br>
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">

            <h1>CONHEÇA MAIS SUA CRIANÇA:</h1>

            <br>
            <a href="https://farbnanda.wixsite.com/maozinhasquefalam">1- Projeto: “Mãozinhas que Falam - introdução à linguagem de sinais para bebês, pais e crianças”</a><br>
            <a href="https://drauziovarella.uol.com.br/doencas-e-sintomas/tdah-transtorno-do-deficit-de-atencao-com-hiperatividade/">2- Identificando Transtorno do Déficit de Atenção e Hiperatividade na criança </a><br>
            <a href="https://www.youtube.com/watch?v=da5ZEMzi8rE">3- Automutilação em Jovens: como lidar?  - Mariana Xavier e Psicóloga Ana Café</a><br>
            <a href="https://www.cvv.org.br/quero-conversar/">4- Site do CVV - Centro de Valorização à Vida </a><br>
            <a href="https://www.autismoemdia.com.br/blog/mitos-do-autismo-saiba-o-que-e-verdade-e-o-que-nao-e/">5- Mitos sobre O Transtorno do Espectro Autista - TEA</a>

                    </div></div> </div> </div>
        <br>
        </section> </section>


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

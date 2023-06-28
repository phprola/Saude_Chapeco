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
                <h1 class="fw-bolder"> Bem-vindo! Parabéns por estar buscando ajuda.</h1><br>
                <!-- ======= WELCOME SECTION ======= -->
                <div>
                    <img src="img/1.png" width="100%" height="20%">
                    <h6>Descrição de imagem: CUIDAR DA SAÚDE É CUIDAR DA FAMÍLIA. O banner possui fundo azul escuro e as letras são brancas. Ao canto esquerdo superior, está escrito: CUIDAR DA SAÚDE É CUIDAR DA FAMÍLIA. E entre a frase há uma grande família, formada por 10 pessoas em formato de sombra em preto. Nela, há uma criança segurando a mão de seu pai e sua mãe, mais dois irmãos menores, uma pessoa sentada em uma cadeira de rodas e mais um casal que segura a mão de duas crianças.  Ao lado direito da imagem, está escrito, também em branco: "DISQUE 136 - SUS". O Disque saúde para emergências do Sistema Único de Saúde.</h6>
                </div>
                  <!-- ======= WELCOME SECTION END  ======= -->
            </div>
        </header>
        <!-- About section-->
        <section id="about">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>O QUE É O CAPS?</h2>
                        <p> Centros de Atenção Psicossocial (CAPS) são unidades de saúde pública de caráter comunitário nos municípios, e contam com profissionais habilitados para atender diversas demandas, tais quais a reabilitação neuropsicológica para dependentes químicos, acolhimento com psicoterapia e psiquiatria, terapia ocupacional, medicação assistida e atendimento humanizado ao núcleo familiar e domiciliar para os pacientes, sempre buscando reinserção e integração social.</p>
                    </div>
                </div><br><br><br><br><br>
                <div class="row  gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <div class="col-lg-8">
                            <h2>NOSSO SISTEMA</h2>
                        </div>
                        <p class="lead">
                            Temos como objetivo informar a população local sobre onde, como e porquê buscar auxílio psicológico quando necessário. Somos responsáveis por:</h5>
                        </p>
                        <ul>
                            <li>Conectar os serviços de saúde do município de Chapecó com a população local;</li>
                            <li>Orientar e tirar dúvidas a respeito do tema de saúde mental;</li>
                            <li>Organizar informações importantes para facilitar o alcance dos cidadãos aos serviços de saúde;</li>
                            <li>Conscientizar os municípedes da importância da saúde mental da família;</li>
                            <li>Previnir transtornos, doenças e vícios dentro do ambiente familiar.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>SERVIÇOS</h2>
                        <p class="lead">    Nas suas diferentes modalidades os CAPS oferecem atendimento clínico em regime de atenção diária à população, com equipe multiprofissional que reúne médicos, assistentes sociais, psicólogos, psiquiatras, enfermeiros, terapêutas ocupacionais, entre outros agentes da rede pública. Aqui você encontra:</p><br>
                        <ul>
                            <li>UNIDADE DE SAÚDE MENTAL PARA CRIANÇAS E ADOLESCENTES</li>
                            <li>UNIDADE DE SAÚDE MENTAL PARA DEPENDENTES DE ÁLCOOL E OUTRAS DROGAS</li>
                            <li>UNIDADE DE SAÚDE MENTAL PARA ADULTOS</li>
                            <li>SERVIÇOS DE ATENTIMENTO DE SAÚDE COMUNITÁRIO PELAS UNIVERSIDADES COMUNITÁRIAS</li>
                        </ul>
                    </div>
                </div>
            </div>



        <!-- Services section-->
        <section class="bg-light" id="services">
            <div class="container px-4">
                <div class="row gx-4 justify-content-center">
                    <div class="col-lg-8">
                        <h2>Perguntas Frequentes </h2><br>
                        <p class="lead">Quanto tempo dura o tratamento?</p><br>
                        <p>
                            O tratamento varia muito de pessoa a pessoa, conforme os sintomas e o diagnóstico. O melhor é consultar um médico, que fornecerá mais informações de acordo com sua situação.
                        </p><br>
                        <p class="lead">O paciente é obrigado a seguir no tratamento até o final?</p><br>
                        <p>
                            A equipe de profissionais do SUS incentiva a concluir e seguir com os tratamentos psicológicos e psiquiátricos até que o paciente receba alta médica. Nem sempre será fácil, pois cada organismo é diferente e possui uma adaptação diferente a cada tratamento. ATENÇÃO! Se estiver em tratamento e pensa em desistir, o melhor é conversar com seu médico ou outro profissional da área de saúde que possa orientá-lo melhor para evitar crises futuras. <br>
                        </p><br>
                        <p class="lead">O paciente é obrigado a seguir no tratamento até o final?</p><br>
                        <p>
                            A equipe de profissionais do SUS incentiva a concluir e seguir com os tratamentos psicológicos e psiquiátricos até que o paciente receba alta médica. Nem sempre será fácil, pois cada organismo é diferente e possui uma adaptação diferente a cada tratamento. ATENÇÃO! Se estiver em tratamento e pensa em desistir, o melhor é conversar com seu médico ou outro profissional da área de saúde que possa orientá-lo melhor para evitar crises futuras. <br>
                        </p>
                    </div>
                </div>
            </div>
        </section>

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

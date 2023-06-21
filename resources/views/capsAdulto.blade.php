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
                        <li class="nav-item px-lg-4"><a class="nav-link text-uppercase" href="outros"></a>Outros</li>
                    </ul>
                </div>
            </div>
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/dashboard') }}" class="text-lg text-gray-900 dark:text-gray-400">Painel</a>
                @else
                    <a href="{{ route('login') }}" class="text-lg text-gray-900 dark:text-gray-400">Entrar</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 text-lg text-gray-400 dark:text-gray-400">Cadastrar</a>
                    @endif
                @endauth
            </div>
        @endif
        </nav>

    </head>
    <body>

        <br>
        <div>
            <h1>CAPS Adulto</h1>
            <h2>O Centro de Acolhimento Psicossocial (CAPS) Unidade II no município de Chapecó (SC) desde 2002 e é  responsável pelo atendimento de pessoas com transtornos mentais graves e persistentes, como transtornos psicóticos (esquizofrenia, trastorno delirante persistente, transtorno psicótico breve, transtorno esquizoafetivo e psicose), transtornos afetivos graves (transtorno bipolar tipo 1 e 2, depressão recorrente grave, transtornos de personalidade (antissocial, histriônica, emocionalmente instável, personalidade dependente) e transtornos impulsivos-compulsivos(TOC e transtornos alimentares).</h2>

        </div>
        <br>
        <div>
            <img src="img/3.png" width="100%" height="20%">
            <h4>Descrição de imagem: CAPS, RECONSTRUINDO UMA HISTÓRIA JUNTOS. O banner possui o fundo de uma parede branca, e bem ao centro está escrito CAPS 2, em letras grandes azuis. Logo abaixo está escrita a frase: "reconstruindo uma história juntos". Nos dois lados da imagem há três peças de lego sendo encaixadas, feito um jogo de quebra-cabeças. No canto inferior da imagem estão 7 Girassóis amarelos e iguais.</h4>
        </div>
        <br>
        <div>
            <h1>Estrutura</h1>
            <h2>Esta unidade conta com mais de 20 servidores públicos efetivados e realizou mais de 7700 atendimentos entre os meses de Janeiro e Julho de 2022.</h2>
            <center>
            <h1>Informações sobre o CAPS Adulto</h1>
            <h2>Profissional           |     |Quantidade</h2>
            <h2>Auxiliar de Enfermagem |     |    7</h2>
            <h2>psicólogo Clinico      |     |    5</h2>
            <h2>Médico Psiquiatra      |     |    4</h2>
            <h2>Médico Clinico         |     |    2</h2>
            <h2>Enfermeiro             |     |    2</h2>
            <h2>assistente Social      |     |    1</h2>
            <h2>Auxiliar em Saúde bucal|     |    1</h2>
            <h2>Farmacêutico           |     |    1</h2>

        </center>
        </div>
        <br>
        <div>
            <h1>DÚVIDAS FREQUENTES</h1>
            <br>
            <h2>1)Quanto tempo dura o tratamento?</h2>
            <h3>O tratamento varia muito de pessoa a pessoa, conforme os sintomas e o diagnóstico. O melhor é consultar um médico, que fornecerá mais informações de acordo com sua situação.</h3>
            <h2>2)O paciente é obrigado a seguir no tratamento até o final?</h2>
            <h3> A equipe de profissionais do SUS incentiva a concluir e seguir com os tratamentos psicológicos e psiquiátricos até que o paciente receba alta médica. Nem sempre será fácil, pois cada organismo é diferente e possui uma adaptação diferente a cada tratamento. ATENÇÃO! Se estiver em tratamento e pensa em desistir, o melhor é conversar com seu médico ou outro profissional da área de saúde que possa orientá-lo melhor para evitar crises futuras.</h3>

        </div>
        <br>
        <div>
            <h1>Pandemia de COVID-19 desencadeia aumento de 25% na prevalência de ansiedade e depressão em todo o mundo</h1>
            <h2>Uma das principais explicações para esse aumento é o estresse sem precedentes causado pelo isolamento social decorrente da pandemia. Ligados a isso estavam as restrições à capacidade das pessoas de trabalhar, busca de apoio dos entes queridos e envolvimento em suas comunidades.
            Solidão, medo de se infectar, sofrimento e morte de entes queridos, luto e preocupações financeiras também foram citados como estressores que levam à ansiedade e à depressão. Entre os profissionais de saúde, a exaustão tem sido um importante gatilho para o pensamento suicida.</h2>
            <br>
            <h1>Estudo sobre o aumento dos transtornos mentais durante a pandemia</h1>
            <h2>O estudo publicado na Lancet avalia os impactos globais da pandemia no transtorno depressivo maior e transtornos de ansiedade, quantificando a prevalência e a carga dos transtornos por idade, sexo e localização em 204 países e territórios em 2020.</h2>
            <h2>Os pesquisadores realizaram uma revisão sistemática da literatura para identificar dados de pesquisa populacional publicados entre 1º de janeiro de 2020 e 29 de janeiro de 2021. Usando uma ferramenta de meta-análise, os dados de estudos foram usados ​​para estimar as mudanças na prevalência dos distúrbios de acordo com os diferentes indicadores populacionais.</h2>
            <h2>A análise indicou que o aumento da taxa de infecção por Covid-19 e a redução do movimento de pessoas foram associados ao aumento da prevalência dos transtornos, sugerindo que os países mais afetados pela pandemia em 2020 tiveram os maiores aumentos na prevalência dos transtornos.</h2>
            <h2>Na ausência da pandemia, as estimativas do modelo sugerem que teria havido 193 milhões de casos de depressão (2.471 casos por 100 mil habitantes) globalmente em 2020. No entanto, a análise mostrou 246 milhões de casos (3.153 por 100 mil habitantes), um aumento de 28% (mais 53 milhões de casos). Mais de 35 milhões dos casos adicionais foram em mulheres, em comparação com cerca de 18 milhões em homens.</h2>
            <h2>Em relação à ansiedade, as estimativas sugerem que teria havido 298 milhões de casos de transtornos associados à condição (3.825 por 100 mil habitantes) em todo o mundo em 2020, se a pandemia não tivesse acontecido. A análise indica que houve uma estimativa de 374 milhões de casos (4.802 por 100 mil habitantes) no ano passado, um aumento de 26% (mais 76 milhões de casos). Quase 52 milhões dos casos adicionais foram em mulheres, em comparação com cerca de 24 milhões em homens.</h2>


            <br>
            <h1>LINKS PARA LER REPORTAGENS:</h1>
            <br>
            <a href="https://www.paho.org/pt/noticias/2-3-2022-pandemia-covid-19-desencadeia-aumento-25-na-prevalencia-ansiedade-e-depressao-em">Pandemia de COVID-19 desencadeia aumento de 25% na prevalência de ansiedade e depressão em todo o mundo</a>
            <a href="https://pebmed.com.br/ansiedade-e-o-transtorno-mais-comum-entre-os-brasileiros-durante-a-pandemia/?utm_source=artigoportal&utm_medium=copytext">Ansiedade é o transtorno mais comum entre os brasileiros durante a pandemia</a>
        </div>
        <br>
        <div>
            <h1>Seguro, Completo, Gratuito e de Qualidade</h1>

            <br>
            <img src="img/10.png" width="100%" height="20%">
            <h4>Descrição de Imagem: Depressão não é frescura.
                Banner de fundo azul escuro e texto escrito em letras grandes, brancas, garrafais. Está em destaque sob uma faixa rosa a frase “Depressão é uma doença” e possui tratamento.  EM letras menores, escrito abaixo: “Não abandone o seu bem estar. Visite a unidade Básica de Saúde mais próxima”.  Ao lado da frase principal há o símbolo médico de “frequência cardíaca” e um coração rosa ao lado.
                </h4>
        </div>
        <br>
        <div>
            <a href="https://www.google.com/maps/place/CAPS+II+Adulto/@-27.079518,-52.6042254,15z/data=!4m5!3m4!1s0x0:0x606fa89de841a4d6!8m2!3d-27.0795185!4d-52.6042273">Localização Aqui</a>
            <br>
            <li><a href="index.html">Inicio</a></li>
            <li><a href="caps.html">CAPS AD</a></li>
            <li><a href="capsi.html">CAPS infantil</a></li>
            <li><a href="outros.html">Outros Atendimentos</a></li>
        </div>
        <footer>
            <p>Autores: Giordano Parisotto e Marcos A. Ambrozio</p>

        </footer>
    </body>
</html>

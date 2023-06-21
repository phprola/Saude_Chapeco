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

        <div>
            <h1>O que é o CAPS infantil?</h1>
            <h2>O CAPS infantil ou CAPSi recebe crianças acima de dois anos, pré-adolescentes e adolescentes com transtornos mentais graves e persistentes, incluindo o uso de drogas e psicoativos. Difere-se do atendimento CAPS Adulto por possuir acompanhamento de neuropsicólogos especializados em infância, pediatras e psicopedagogos na equipe profissional. Está em funcionamento desde 2005 em Chapecó.</h2>

        </div>
        <br>
        <div>
            <img src="img/6.png" width="100%" height="20%">
            <h4>Descrição de imagem: SAÚDE DA CRIANÇA, FIQUE ATENTO AOS SINAIS. O banner possui fundo azul escuro e letras claras. Bem grande e ao centro está escrito: SAÚDE DA CRIANÇA. e logo abaixo uma baixa azul claro, escrito “FIQUE ATENTO AOS SINAIS”.</h4>
        </div>
        <br>
        <div>
            <h1>Saúde mental na infância e adolescência</h1>
            <br>
            <h2>Assim como os adultos, as crianças e os adolescentes também podem desenvolver transtornos mentais, sendo mais recorrentes os transtornos do desenvolvimento psicológico e transtornos de comportamento e emocionais.

                Os transtornos mentais em crianças e adolescentes costumam ser motivados por fatores específicos que podem ser divididos entre genéticos, relacionados ao histórico familiar de transtorno mental; psicossociais, relacionados a casos de disfunções na vida familiar e situações indutoras de estresse; biológicos, relacionados a situações de anormalidades do sistema nervoso central, que podem ser causadas por lesões, infecções, desnutrição ou exposição a toxinas; e ambientais, relacionados a problemas enfrentados na comunidade, por exemplo, violência urbana ou abusos.

                Identificar transtornos mentais durante a infância e adolescência pode ser um desafio, tendo em vista que muitas crianças costumam ter dificuldades para expressarem seus sentimentos ou conseguirem compreender suas emoções.</h2>
            <br>
            <h1>Quando devo buscar ajuda para meu filho?</h1>
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
            <br>
            <h1>Como cuidar da saúde mental das crianças e dos adolescentes</h1>
            <br>
            <ul>
                <li>Realizar atividades prazerosas e que tenham valor para a criança ou o adolescente, como ler, cantar, praticar algum esporte, entre outras</li>
                <li>Estabelecer horários e rotina para as atividades do dia a dia</li>
                <li>Explicar sobre os sentimentos e as emoções para as crianças</li>
                <li> Promover conversas abertas e sem julgamentos sobre possíveis problemas que a criança ou o adolescente esteja enfrentando</li>
                <li>Manter a alimentação e o sono saudáveis</li>
                <li> Praticar exercícios físicos regularmente</li>
            </ul>
        </div>
        <br>

        <div>
            <img src="img/5.png" width="100%" height="20%">
            <h4>Descrição de imagem: CRIANÇA E ADOLESCENTE. ACOLHIMENTO PSICOLÓGICO E PSIQUIÁTRICO PARA PRÉ-ADOLESCENTES.

                O banner possui fundo azul ciano, e a partir da metade existe uma borda simulando um papel rasgado, branco. Em cima do fundo, está escrito, em letras grandes e garrafais: CRIANÇA E ADOLESCENTE, centralizado.  No canto esquerdo inferior, está escrito "Acolhimento Psicológico e Psiquiátrico para Pré-Adolescentes".  Mais à direita, temos vários traços rosas e uma lista com escrito: equipe de neuropsicólogos especializados em infância, psicopedagogos e pediatras.
                </h4>
        </div>
        <br>
        <div>
            <h1>DISQUE 136</h1>
            <br>
            <a href="https://farbnanda.wixsite.com/maozinhasquefalam">1- Projeto: “Mãozinhas que Falam - introdução à linguagem de sinais para bebês, pais e crianças”</a><br>
            <a href="https://drauziovarella.uol.com.br/doencas-e-sintomas/tdah-transtorno-do-deficit-de-atencao-com-hiperatividade/">2- Identificando Transtorno do Déficit de Atenção e Hiperatividade na criança </a><br>
            <a href="https://www.youtube.com/watch?v=da5ZEMzi8rE">3- Automutilação em Jovens: como lidar?  - Mariana Xavier e Psicóloga Ana Café</a><br>
            <a href="https://www.cvv.org.br/quero-conversar/">4- Site do CVV - Centro de Valorização à Vida </a><br>
            <a href="https://www.autismoemdia.com.br/blog/mitos-do-autismo-saiba-o-que-e-verdade-e-o-que-nao-e/">5- Mitos sobre O Transtorno do Espectro Autista - TEA</a>

        </div>
        <br>
        <div>
            <h1>Seguro, Completo, Gratuito e de Qualidade</h1>
            <img src="img/8.png" width="100%" height="20%">
            <h4>Descrição de imagem: Em fundo rosa claro, está escrito em preto: 75% dos transtornos mentais se iniciam na infância e adolescência e metade deles ocorrem até os 14 anos. A adolescência é um momento crítico, mas a infância tem um protagonismo importante nesses casos. A frase "adolescência é um momento crítico” está escrita em destaque sob uma faixa azul-ciano. A imagem logo abaixo aparece suas parceiras, o Portal de Boas Práticas em Saúde da Mulher, Criança e do Adolescente. O Instituto Nacional Fernandes Figueira e a Fundação Oswaldo Cruz Fiocruz do Ministério da Saúde e o Sistema Único de Saúde SUS.</h4>

        </div>
        <br>
        <div>
            <a href="https://www.google.com/search?q=caps%20infantil%20chapec%C3%B3%20-%20sc&sxsrf=ALiCzsZD-lm1FkdEWzHLO1REBrZtU926_Q:1669052917314&ei=_Lh7Y9n7CZbM1sQP5reYgAQ&oq=caps++infaChapec%C3%B3+-+SC&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQARgAMgoIIRDDBBAKEKABMgoIIRDDBBAKEKABOgoIABBHENYEELADOgsILhCABBDHARCvAToNCC4QgAQQxwEQrwEQDUoECEEYAEoECEYYAFD2B1iIHmCkNmgBcAF4AIABmAKIAdcJkgEFMC40LjKYAQCgAQHIAQjAAQE&sclient=gws-wiz-serp&tbs=lf:1,lf_ui:2&tbm=lcl&rflfq=1&num=10&rldimm=7247779885803481197&lqi=ChtjYXBzIGluZmFudGlsIGNoYXBlY8OzIC0gc2NaIyIZY2FwcyBpbmZhbnRpbCBjaGFwZWPDsyBzYyoGCAIQABABkgEIaG9zcGl0YWw&ved=2ahUKEwjYlf3R6r_7AhV2t5UCHZ6zBGgQvS56BAgcEAE&sa=X&rlst=f#rlfi=hd:;si:7247779885803481197,l,ChtjYXBzIGluZmFudGlsIGNoYXBlY8OzIC0gc2NaIyIZY2FwcyBpbmZhbnRpbCBjaGFwZWPDsyBzYyoGCAIQABABkgEIaG9zcGl0YWw;mv:[[-27.077946899999997,-52.5812661],[-27.115116399999998,-52.6286693]];tbs:lrf:!1m4!1u3!2m2!3m1!1e1!1m4!1u2!2m2!2m1!1e1!2m1!1e2!2m1!1e3!3sIAE,lf:1,lf_ui:2">Localização CAPS Jardim Itália</a>
           <br>
            <a href="https://www.google.com/search?q=caps%20infantil%20chapec%C3%B3%20-%20sc&sxsrf=ALiCzsZD-lm1FkdEWzHLO1REBrZtU926_Q:1669052917314&ei=_Lh7Y9n7CZbM1sQP5reYgAQ&oq=caps++infaChapec%C3%B3+-+SC&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQARgAMgoIIRDDBBAKEKABMgoIIRDDBBAKEKABOgoIABBHENYEELADOgsILhCABBDHARCvAToNCC4QgAQQxwEQrwEQDUoECEEYAEoECEYYAFD2B1iIHmCkNmgBcAF4AIABmAKIAdcJkgEFMC40LjKYAQCgAQHIAQjAAQE&sclient=gws-wiz-serp&tbs=lf:1,lf_ui:2&tbm=lcl&rflfq=1&num=10&rldimm=7247779885803481197&lqi=ChtjYXBzIGluZmFudGlsIGNoYXBlY8OzIC0gc2NaIyIZY2FwcyBpbmZhbnRpbCBjaGFwZWPDsyBzYyoGCAIQABABkgEIaG9zcGl0YWw&ved=2ahUKEwjYlf3R6r_7AhV2t5UCHZ6zBGgQvS56BAgcEAE&sa=X&rlst=f#rlfi=hd:;si:10306924814331859970,l,ChtjYXBzIGluZmFudGlsIGNoYXBlY8OzIC0gc2NaIyIZY2FwcyBpbmZhbnRpbCBjaGFwZWPDsyBzYyoGCAIQABABkgEGc2Nob29s;mv:[[-27.077946899999997,-52.5812661],[-27.115116399999998,-52.6286693]]">Localização CAPS Santa Maria</a>
            <br>

            <li><a href="index.html">Inicio</a></li>
            <li><a href="caps2.html">CAPS 2</a></li>
            <li><a href="caps.html">CAPS AD</a></li>
            <li><a href="outros.html">Outros Atendimentos</a></li>

        </div>
        <footer>
            <p>Autores: Giordano Parisotto e Marcos A. Ambrozio</p>

        </footer>
    </body>
</html>

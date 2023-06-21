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

        <header class="bg-primary bg-gradient text-white">
            <div class="container px-6 text-center">
                <h1 class="fw-bolder"> Bem-vindo! Parabéns por estar buscando ajuda.</h1>
                <br>
                <!-- ======= WELCOME SECTION ======= -->
            </head>
            <body>
                <div>
                <img src="img/1.png" width="100%" height="20%">
                    <h6>Descrição de imagem: UM DIA DE CADA VEZ. O fundo do banner é branco, simulando uma folha de papel amassada, e sob ela está uma faixa azul clara, e escrito: "Um dia de Cada Vez…", que é lema do grupo Alcoólatras Anônimos. Abaixo da faixa, está o desenho de um sorriso, com um traço preto representando duas covinhas nas bochechas. No canto inferior do banner, está escrito "O SUS cuida, o SUS melhora, o SUS ajuda".</h6>
                </div>

                <br>
                <div>
                    <h1>Para quem é o CAPS AD?</h1>
                    <h2>O CAPS Álcool e Drogas é um serviço ambulatorial humanizado que realiza ações de assistência (medicação, atendimento individual, oficinas terapêuticas, grupos de apoio, atenção familiar), de prevenção e capacitação de profissionais visando a reinserção social e familiar de dependentes químicos. Atende especialmente mas não exclusivamente maiores de 18 anos. </h2>
                </div>
                <br>
                <div>

                <br>
                <div>
                    <h1>Estrutura</h1>
                    <h2>O CAPS AD III dispõe de 12 leitos de acolhimento noturno, onde os usuários podem permanecer acolhidos por até 14 dias, conforme prevê a portaria do Plano de Saúde Municipal.</h2>
                    <h2>Dentro da rede de acolhimento existe a  Unidade de Acolhimento (UA) foi implementada em 2013 a partir da demanda do CAPS AD em alterar sua modalidade para CAPS AD III (24 horas). </h2>
                    <h1>Atendimento</h1>
                    <h2>Como parte dos SUS, os CAPS são financiados com recursos do Ministério da Saúde e, diferentemente do que ocorre em instituições psiquiátricas de modelo asilar, como hospitais psiquiátricos e comunidades terapêuticas, suas abordagens consideram a singularidade, a história, a cultura e o cotidiano de cada sujeito, com o objetivo de garantir cuidado em liberdade, cidadania, autonomia e inclusão social a seus usuários e familiares.</h2>
                    <img src="img/11.png" width="100%" height="20%">
                    <h4>Descrição de imagem: Imagem de manifestação em rua, marcha do movimento antimanicomial. Não se tem registro de datas. O cartaz à frente está escrito: “NEM UM PASSO ATRÁS! MANICÔMIO NUNCA MAIS!” confeccionado pelo Conselho Regional de Psicologia do Rio Grande do Sul.  A maior parte das pessoas usa óculos de sol, há na foto em torno de 50  pessoas, mas o foco na imagem está nas três primeiras fileiras da marcha. Pode-se notar pessoas de diversas idades, jovens e idosos, homens e mulheres, a pé ou em bicicleta, a maioria portando algum cartaz.</h4>
                </div>
                <br>
                <div>
                    <h1>Perguntas Frequentes</h1>
                    <br>
                    <h2>1) Quanto tempo dura o tratamento?</h2>
                    <h2>O tratamento varia muito de pessoa a pessoa, conforme os sintomas e o diagnóstico. O melhor é consultar um médico, que fornecerá mais informações de acordo com sua situação.</h2>
                    <h2>2) O paciente é obrigado a seguir no tratamento até o final?</h2>
                    <h2> A equipe de profissionais do SUS incentiva a concluir e seguir com os tratamentos psicológicos e psiquiátricos até que o paciente receba alta médica. Nem sempre será fácil, pois cada organismo é diferente e possui uma adaptação diferente a cada tratamento. ATENÇÃO! Se estiver em tratamento e pensa em desistir, o melhor é conversar com seu médico ou outro profissional da área de saúde que possa orientá-lo melhor para evitar crises futuras.</h2>
                   <br>
                    <h1>MITOS E VERDADES SOBRE O USO DE PSICOTRÓPICOS</h1>
                    <br>
                    <h2>Todos já devem ter percebido o quanto de preconceito se tem em relação aos tratamentos voltados à doença mental, principalmente quando se trata do uso de medicação para tratamento de transtornos psiquiátricos. Seja sincero e pergunte a você mesmo: Será que eu tenho algum preconceito em relação às pessoas que necessitam de tratamento para algum problema psiquiátrico?</h2>
                    <h2>Isso é consequência muitas vezes da desinformação sobre o tema, e, consequentemente, dos diversos mitos que o cercam. Objetivando principalmente a informação correta e de qualidade, a fim de desmistificar o assunto, seguem abaixo alguns dos principais mitos que envolvem as medicações de uso para o tratamento de transtornos psiquiátricos ou em saúde mental:</h2>
                    <br>
                    <h2>1° MITO – Se eu começar a usar medicação, vou ficar viciado e nunca mais vou conseguir parar!</h2>
                    <h2>A maior parte dos psicotrópicos não possui potencial para dependência e até aqueles que são chamados de “tarja preta”, que possuem um potencial para dependência, se usados de forma correta, possuem segurança, mesmo a longo prazo.
                        A maior parte dos transtornos psiquiátrico é crônico, ou seja, a medicação serve mais para controle dos sintomas, do que curar o paciente em questão. Transtornos como a esquizofrenia, por exemplo, possuem apenas controle com o tratamento medicamentoso, necessitando de uso contínuo e “para sempre” da medicação, já que a suspensão da mesma pode resultar em crises graves. Já outros transtornos que são mais comuns, como a depressão e a ansiedade, possuem um tratamento por período determinado, com planejamento de retirada da medicação após um tempo de tratamento – ou seja, nestes casos, que são a maioria dos pacientes, não há necessidade de uso da medicação “para sempre”.
                        Portanto, não é porque iniciou um tratamento, que aquele indivíduo vai usar medicação para toda a vida! A maioria dos tratamentos possui um início, meio e fim.
                        E, caso haja necessidade de uso de medicações com “tarja preta” (risco de dependência), este risco é baixíssimo, se usado conforme lhe foi orientado.</h2>
                    <h2>2° MITO – Antidepressivos a longo prazo vão danificar meu cérebro ou vão causar algum problema no meu corpo.</h2>
                    <h2>Os antidepressivos são amplamente e constantemente estudados e, até o momento, não temos qualquer pesquisa séria que comprove que os antidepressivos causam qualquer tipo de lesão ao cérebro ou ao organismo, desde que utilizados com acompanhamento adequado.
                        Recentemente aprendemos que a depressão causa um processo inflamatório cerebral, lesionando-o a cada episódio e ao longo de cada episódio. Alguns estudos têm demonstrado que o uso ao longo prazo de antidepressivos podem até prevenir quadros demenciais, como a doença de Alzheimer.</h2>
                        <a href="https://jornal.usp.br/radio-usp/estudo-sugere-beneficio-de-antidepressivo-para-prevencao-de-alzheimer/">link do site sobre tratamento primário de Alzheimer com o uso de Antidepressivos</a>
                    <h2>3° MITO – Se eu tomar medicação para tratamento de um transtorno psiquiátrico vou ficar “lesada”, vou ter efeitos colaterais, ou até mudar minha personalidade ou meu jeito de ser.</h2>
                    <h2>Todos os efeitos adversos dos antidepressivos costumam ser transitórios, desaparecendo em cerca de 10 a 15 dias após início da medicação, e geralmente são suportáveis. Caso estes efeitos colaterais sejam muito acentuados, e até atrapalharem as atividades diárias do indivíduo, nada mais justo e certo do que haver uma troca de medicação, dentro da possibilidade do transtorno mental que apresenta, sua gravidade e relação risco-benefício – ou seja, o benefício da troca sempre deve ser maior do que o risco desta.
                        Alguns efeitos colaterais mais incômodos, como questões relacionados ao peso e às questões sexuais geralmente resolvem após esta troca, podendo o indivíduo levar uma vida normal e saudável.</h2>
                    <h2>4° MITO – Canabidiol é igual maconha, causa os mesmos problemas e tem as mesmas substâncias.</h2>
                    <h2>O Canabidiol é uma das muitas substâncias encontradas na planta Cannabis sativa (que possui mais de 400 substâncias além do Canabidiol), não possui efeito perturbador sobre o cérebro, não causa o “barato” que a planta em uso recreativo causa, assim como não causa risco de dependência, nem risco de lesão cerebral.
                        É muito importante saber a procedência e a pureza desse Canabidiol, que deve conter apenas uma quantidade baixa e aceitável da substancia THC.</h2>
                        <a href="https://cidadeverde.com/noticias/381871/justica-autoriza-paciente-a-plantar-maconha-para-tratamento-medico-no-piaui">link da reportagem sobre um jovem de Piauí que foi autorizado a plantar cannabis em casa para o tratamento de transtorno de ansiedade, ataques de pânico e anorexia</a>
                    <h2>5° MITO – Meu médico está errado ao tratar ansiedade com antidepressivos? Antipsicóticos são remédios “para louco”, e não devem ser usados para outros transtornos mentais.</h2>
                    <h2>Dentro da psiquiatria nenhuma medicação é específica para qualquer patologia. Ou seja, tratamos sim ansiedade com antidepressivos, já que deixamos a classe chamada de ansiolíticos apenas para casos isolados e para controle de crises. Antipsicóticos são outra classe de medicação, que em doses altas realmente tratam transtornos mais graves, como a esquizofrenia, mas que em doses mais baixas são usados para vários outros transtornos e sintomas, como o transtorno bipolar, para aumentar o efeito antidepressivo ou até para ajudar a dormir.</h2>
                    <h2>Como você deve ter percebido, tanto os transtornos mentais, quanto as medicações que usamos para tratá-los ainda são cercados de mitos, dificultando o acesso a um tratamento adequado e eficaz. É imprescindível que o médico tenha experiência e qualificação para este tratamento e para o manejo do indivíduo, que se torna ainda mais complexo quando sob um transtorno psiquiátrico, que afeta em muito a sua qualidade de vida, assim como aqueles que o rodeiam.</h2>



                </div>
                <br>
                <div>
                    <h1>Conheça seus direitos</h1>
                    <a href="http://www.planalto.gov.br/ccivil_03/leis/leis_2001/l10216.htm"> link da lei número 10.216, DE 6 DE ABRIL DE 2001.</a>
                    <h2>A Lei da Reforma Psiquiátrica, Lei Antimanicomial e Lei Paulo Delgado.  Lei que permitiu o fechamento e criminalização gradual de hospícios e tratamentos violentos no Brasil.</h2>
                    <ul>
                        <li>O papel do CAPS é o de promover, a partir da prestação de serviços de saúde mental e do acompanhamento social, o desenvolvimento da autonomia e da cidadania dos usuários, reintegrando-os à vida social e à convivência familiar.</li>
                        <li>Ou seja, nenhum tratamento pode ser conduzido pelo uso de violência, seja ela física ou psicológica e contra a vontade do paciente. </li>
                        <li>O paciente possui direito de receber informações sobre seu tratamento e apenas pode ser interditado caso apresente ameaça à vida de outra pessoa ou se apresentar tentativas suicidas.</li>
                    </ul>
                </div>
                <br>
                <div>
                    <h1>Seguro, Completo, Gratuito e de Qualidade</h1>
                    <br>
                    <img src="img/12.png" width="100%" height="20%">
                    <h6>Descrição de Imagem: Está escrito ATENDIMENTO HUMANIZADO E DIGNO ao centro e há um coração rosa claro abaixo. O fundo do banner possui uma textura branca, similar a uma porcelana rachada, e ao lado do texto está um desenho em preto e branco de uma gaiola, e logo ao lado um passarinho, também em formato de sombra, preto e branco. O passarinho está a voar, e mais adiante há um bando de passarinhos no mesmo estilo de desenho.</h6>

                </div>

                <br>
                <div>
                    <a href="https://www.google.com/search?q=caps%20ad%20chapec%C3%B3&sxsrf=ALiCzsa-_CjBz5D0H4Gw5eM-p3NpIdKWpg:1669052836062&ei=_Lh7Y9n7CZbM1sQP5reYgAQ&oq=caps+ad+&gs_lcp=Cgxnd3Mtd2l6LXNlcnAQARgAMgQIABBDMgQIABBDMgUIABCABDILCC4QgAQQxwEQrwEyCwguEIAEEMcBEK8BMgsILhCABBDHARCvATILCC4QgAQQxwEQrwEyBQgAEIAEMgsILhCABBDHARCvATILCC4QgAQQxwEQrwE6CggAEEcQ1gQQsAM6BggAEAoQAzoICAAQgAQQsQM6BwgAEIAEEAo6BAgjECc6CgguEK8BEMcBEEM6CggAELEDEMkDEEM6CgguEMcBEK8BEENKBAhBGABKBAhGGABQsgdYhyNggC9oAnAAeACAAbgDiAHqEJIBCTAuMS4yLjIuMpgBAKABAcgBCMABAQ&sclient=gws-wiz-serp&tbs=lf:1,lf_ui:2&tbm=lcl&rflfq=1&num=10&rldimm=10894995044217655663&lqi=ChBjYXBzIGFkIGNoYXBlY8OzWhIiEGNhcHMgYWQgY2hhcGVjw7OSARVtZW50YWxfaGVhbHRoX3NlcnZpY2WqAQ8QASoLIgdjYXBzIGFkKAw&ved=2ahUKEwjCgZ6r6r_7AhUdqZUCHT19BAcQvS56BAgdEAE&sa=X&rlst=f#rlfi=hd:;si:10894995044217655663,l,ChBjYXBzIGFkIGNoYXBlY8OzWhIiEGNhcHMgYWQgY2hhcGVjw7OSARVtZW50YWxfaGVhbHRoX3NlcnZpY2WqAQ8QASoLIgdjYXBzIGFkKAw;mv:[[-27.0793362,-52.582587399999994],[-27.0905711,-52.605327599999995]];tbs:lrf:!1m4!1u2!2m2!2m1!1e1!2m1!1e2!3sIAE,lf:1,lf_ui:2">Localização aqui</a>
                    <br>
                    <li><a href="index.html">Inicio</a></li>
                    <li><a href="caps2.html">CAPS 2</a></li>
                    <li><a href="capsi.html">CAPS infantil</a></li>
                    <li><a href="outros.html">Outros Atendimentos</a></li>
                </div>
                <footer>
                    <p>Autores: Giordano Parisotto e Marcos A. Ambrozio</p

                </footer>
            </body>
        </html>
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


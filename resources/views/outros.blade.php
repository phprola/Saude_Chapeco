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
                      <img src="img/1.png" width="100%" height="20%">
                     <h6>Descrição de imagem: CUIDAR DA SAÚDE É CUIDAR DA FAMÍLIA. O banner possui fundo azul escuro e as letras são brancas. Ao canto esquerdo superior, está escrito: CUIDAR DA SAÚDE É CUIDAR DA FAMÍLIA. E entre a frase há uma grande família, formada por 10 pessoas em formato de sombra em preto. Nela, há uma criança segurando a mão de seu pai e sua mãe, mais dois irmãos menores, uma pessoa sentada em uma cadeira de rodas e mais um casal que segura a mão de duas crianças.  Ao lado direito da imagem, está escrito, também em branco: "DISQUE 136 - SUS". O Disque saúde para emergências do Sistema Único de Saúde.</h6>
                  </div>


                  <!-- ======= WELCOME SECTION END  ======= -->

        </header>

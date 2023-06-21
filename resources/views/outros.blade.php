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

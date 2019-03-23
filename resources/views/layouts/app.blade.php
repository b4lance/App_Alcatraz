<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Alcatraz') }}</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>

   <header class="container">
    <div class="row section--banner">
        <div class="col-md-4 col-sm-12 section--banner--logo1 d-flex justify-content-center">
            <img src="{{asset('img/alcatrazlogo.png')}}" alt="">
        </div>
        <div class="col-md-4 col-sm-12 text-center mt-2 mb-2">
            <h1><a href="{{route('inicio')}}">Sistema Web de Gestión y Control de Operaciones Academico Administrativas</a></h1>
        </div>
        <div class="col-md-4 col-sm-12 section--banner--logo2 d-flex justify-content-center">
            <img src="{{asset('img/santateresa.png')}}" alt="">
        </div>
    </div>

  </header>
   
    <!--MENU-->
    <nav class="navbar navbar-expand-lg navbar-dark mt-2">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarColor01">
            <div class="container">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Conocenos
                        </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{route('historia')}}">Historia</a>
                                <a class="dropdown-item" href="{{route('objetivos')}}">Objetivos</a>
                                <a class="dropdown-item" href="{{route('valores')}}">Valores</a>
                            </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link--item" href="{{route('contacto')}}">Contactanos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link--item" href="{{route('terminos')}}">Solicitud de Cita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link--item login" href="{{route('login')}}">Iniciar Sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container mt-5">
        @yield('contenido')
    </main>

    <footer class="mt-5 text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-12">
                    <p>Proyecto Alcatraz 2019 &copy;. Todos los derechos reservados</p>
                </div>
                <div class="col-md-3 col-sm-12">
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-center">
                            <span class="icon-facebook"></span>
                            <span class="icon-twitter"></span>
                            <span class="icon-youtube"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script async type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
@yield('scripts')
</body>
</html>

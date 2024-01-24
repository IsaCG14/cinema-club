<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    {!! Html::style("css/styles.css") !!}
    {!! Html::style("libraries/bootstrap.min.css") !!}
    <style>
    .my-popover {
        --bs-popover-bg: black;
        --bs-popover-header-color: #fff;
        --bs-popover-header-bg: rgb(113, 44, 249); 
        --bs-popover-border-color: rgb(113, 44, 249);
        --bs-popover-body-color: rgb(255,255,255);   
    }
    </style>
</head>
<body class="container">
    <nav class="navbar border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Cinemax</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> 
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'home') active @endif" href="{{route('home')}}">Peliculas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::currentRouteName() == 'create') active @endif" href="{{route('create')}}">Estrenos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'register') active @endif" href="{{route('register')}}">Registro</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <script src="{{ asset('libraries/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('libraries/bootstrap.bundle.min.js') }}"></script>
    @yield('content') 
</body>
</html>
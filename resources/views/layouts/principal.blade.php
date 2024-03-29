<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
                    <a class="nav-link @if(Route::currentRouteName() == 'create') active @endif" href="{{route('create')}}">Nuevo estreno</a>
                </li>
                <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'register') active @endif" href="{{route('register')}}">Registro</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script src="{{ asset('libraries/bootstrap.bundle.min.js') }}"></script>
    @yield('content') 
</body>
</html>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Derio Matheus" content="Portfolio">
    <link rel="icon" href="{{asset('img/moveis.png')}}">
    <title>SysPat</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome/all.css')}}">
    <script src="{{ asset('js/jquery-3.4.1.slim.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/pat.js')}}"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark display-4">
        <a class="navbar-brand"><img class="img" src="{{ asset('img/logo.png')}}" alt=""></a>
        <a class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link active" href="{{route('index')}}">
                        <i class="fas fa-home"></i> Inicio <span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link active" href="{{route('patrimonio.index')}}" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-list"></i>Patrimonio <span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown2">
                        @include('layouts.menupatrimonios')
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> Usuario
                    </a>
                    <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item bg-dark text-white" href="#">Informações</a>
                        <a class="dropdown-item bg-dark text-white" href="#">Sispatrimonio</a>
                        <div class="dropdown-divider">
                        </div>
                        <a class="dropdown-item bg-dark text-white" href="#">Sair</a>

                    </div>
                </li>
            </ul>
        </div>
    </nav>
</head>

<body>
    <div class="container">
        @yield('content')

        <div class="uper">
            @include('message.flash-message')
        </div>
    </div>

</body>

</html>

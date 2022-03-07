<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{mix('css/app.css')}}" >
    <script src="{{mix('js/app.js')}}" defer></script>
    <title>Prueba Laravel</title>
</head>
<body>
<header>
<nav class="navbar navbar-light navbar-expand-lg  bg-white shadow-sm">
        <a class="navbar-brand" href="/">
        {{config('app.name')}}
        </a> 
        <button
                class="navbar-toggler" 
                type="button" 
                data-toggle="collapse" 
                data-target="#navbarSupportedContent" 
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="nav nav-pills">
                        <li class="nav-item">
                                <a class="nav-link" href="{{route('estudiante.index')}}">
                               Estudiante
                                </a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="{{route('grupo.index')}}">
                                Grupos
                                </a>
                        </li>
                </ul>
        </div>
</nav>
</header>
    <!-- content -->
    @yield('content')
</body>
</html>
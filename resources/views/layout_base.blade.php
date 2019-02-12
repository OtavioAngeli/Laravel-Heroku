<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('pagina_titulo')</title>

        <!-- Fonts -->
        <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


        <!-- Styles -->
        <!--Import materialize.css-->
        <link type="text/css" rel="stylesheet" href="/css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" type="text/css" href="/css/base.css">

    </head>
    <nav id="menu">
        <div class="nav-wrapper grey darken-2">
            <a href="{{ url('/index') }}" class="brand-logo">Liberdade</a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ url('/') }}">Voltar</a></li>
                <li><a href="#">Entrar</a></li>
            </ul>
        </div>
    </nav>
    <body>
        @yield('pagina_conteudo')

        <!-- Compiled and minified JavaScript -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
    </body>
</html>

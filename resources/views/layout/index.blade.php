<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Julius+Sans+One&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

        <!-- Iconos -->
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link rel="stylesheet" href="{{ asset('css/web/inicio.css') }}">
        <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
        @yield('css')
    </head>
    <body>
        <header class="header">
            <h1>Digitalo</h1>

            <a href="#" class="menu">
                <img class="menuIcono" src="img/menu.svg" alt="menu icono digitalo">
            </a>

            <div class="sidebar closed">
                <a href="#" class="cerarMenu ion-android-close"></a>

                <ul class="ul-menu">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">¿Qué ofrecemos?</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>
        </header>
        
        @yield('main')
        
        <footer class="footer">
            <p>Desarrollado por Digitalo &copy</p>
        </footer>

        <script src="{{ asset('js/sidebar.js') }}"></script>
        @yield('js')
    </body>
</html>
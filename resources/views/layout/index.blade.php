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
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

        <!-- Iconos -->
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('css/index.css') }}">
        <link rel="stylesheet" href="{{ asset('css/web/inicio.css') }}">
        <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
        @yield('css')
    </head>
    <body>
        <header class="header nav-menu top-menu">
            <a href="#" class="btnSidebar">
                <img class="btnIcon" src="img/menu.svg" alt="menu icono digitalo">
            </a>

            <h1>Digitalo</h1>

            <div class="sidebar closed">
                <a href="#" class="btnClose ion-android-close"></a>

                <ul class="ul-menu">
                    <li><a href="/">
                        Inicio
                        <span class="border"></span>
                    </a></li>
                    <li><a href="/desarrollo-web">
                        Desarrollo Web
                        <span class="border"></span>
                    </a></li>
                    <li><a href="/marketing-digital">
                        Marketing Digital
                        <span class="border"></span>
                    </a></li>
                    <li><a href="#contacto">
                        Contacto
                        <span class="border"></span>
                    </a></li>
                </ul>
            </div>
        </header>
        
        <main>
            @yield('main')

            @component('web.contacto', ['validation' => $validation])
            @endcomponent

            @component('components.whatsapp')
            @endcomponent
        </main>
        
        <footer class="footer">
            <p>Desarrollado por Digitalo &copy</p>
        </footer>

        <script src="{{ asset('js/index.js') }}"></script>
        <script type="text/javascript" src="{{asset('js/Validation/Invalidator.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/Validation/Validator.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/Validation/Requirements.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/Validation/Messages.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/Validation/Rules.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/Validation/Validation.js')}}"></script>
        <script src="{{ asset('js/sidebar.js') }}"></script>
        @yield('js')
    </body>
</html>
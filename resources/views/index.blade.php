<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Digitalo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Julius+Sans+One&display=swap" rel="stylesheet">

        <!-- iconos -->
        <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

        <!-- css -->

        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/sidebar.css">

    </head>
    <body>
     <header class="header">
        <h1>Digitalo</h1>
        <a href="#" class="menu">
            <img class="menuIcono" src="img/menu.svg" alt="menu icono digitalo">
        </a>
        <div class="sidebar closed">
        <a href="#" class="cerarMenu ion-android-close">
        </a>
            <ul class="ul-menu">
               <li><a href="#">¿Qué ofrecemos?</a></li>
               <li> <a href="#">Nosotros</a></li>
                <li><a href="#">Contacto</a></li>
            </ul>
        </div>
     </header>    
        
        <script src="js/sidebar.js"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="google-site-verification" content="_Is_GRqpjAYJNLE-F2yKqmx8zd_0j7SqqhHayK8VPew" />
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

  <link rel="stylesheet" href="css/styles.css">
  <title>@yield('title') - emprendimiento web</title>
</head>
<body>
  <header id="header">
      <nav class="menu">
          <div class="logo">
              <a href="#"><img src="" alt="Logo del sitio web"></a>
          </div>
            <div class="icono-div">
              <a href="#" class="btn-menu" id="btn-menu"><span class="icono ion-navicon-round"></span></a>
            </div>


          <div class="enlaces" id="enlaces">
              <a href="/"><span class="ion-home"></span>Home</a>
              <a href="/servicios"><span class="ion-monitor"></span>Servicios</a>
              <a href="/blog"><span class="ion-social-rss"></span>Blog</a>
              <a href="/faq"><span class="ion-help-circled"></span>FAQ</a>
              <a href="#"><span class="ion-ios-email"></span>Contacto</a>

          </div>
      </nav>
  </header>
@yield('content')
<footer>
  <div>
      <img src="img/logo.png" alt="">
  </div>
  <div class="informacion-nuestra">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam quas consectetur animi obcaecati, nesciunt, assumenda.</p>
  </div>
<ul>
    <li><a href="#">Home</a></li>
    <li><a href="#">Servicios</a></li>
    <li><a href="#">Blog</a></li>
    <li><a href="#">Contacto</a></li>
    <li><a href="#">¿Quienes somos?</a></li>
</ul>
</footer>
  <script type="text/javascript" src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/headroom.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/menu.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/formulario.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/accordion.js') }}"></script>

</body>
</html>

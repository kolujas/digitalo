@extends('layout.index')

@section('css')
    <link href="{{ asset('css/web/desarrollo.css') }}" rel="stylesheet">
@endsection

@section('title')
    Digitalo - Desarrollo web
@endsection

@section('main')
    <section class="banner-video">
        <h2>Desarrollo Web & eCommerce</h2>
        <p>Diseño y desarrollo de sitios web institucionales & eCommerce.</p>
    </section>

    <section class="como-lo-hacemos"><section class="servicios">
        <h2>¿Cómo lo hacemos?</h2>

        <div class="cards-servicios">
        <h3><i class="ion-ios-search-strong investigacion"></i>Pre-investigación</h3>            
            <p>Recopilación de recursos, información y referentes. Evaluación de la competencia.</p>
            <i class="ion-ios-arrow-thin-down flechita-abajo"></i>
        </div>

        <div class="cards-servicios">
        <h3><i class="ion-monitor investigacion"></i>Diseño</h3>            
            <p>Generación de propuesta visual e instancia de correcciones.</p>
            <i class="ion-ios-arrow-thin-down flechita-abajo"></i>
        </div>

        <div class="cards-servicios">
        <h3><i class="ion-code investigacion"></i>Desarrollo</h3>            
            <p>Implementación de la propuesta de diseño en plataforma navegable.</p>
            <i class="ion-ios-arrow-thin-down flechita-abajo"></i>
        </div>

        <div class="cards-servicios">
        <h3><i class="ion-bug investigacion"></i>Testeo</h3>            
            <p>Entrega del sitio en plataforma propia para verificar su correcto funcionamiento.</p>
            <i class="ion-ios-arrow-thin-down flechita-abajo"></i>
        </div>

        <div class="cards-servicios">
        <h3><i class="ion-android-done investigacion"></i>Lanzamiento</h3>            
            <p>Elección del dominio. Alta de servicio de hosting y entrega definitiva del sitio.</p>
        </div>
    </section>

    <section class="que-incluye">
        <h2>¿Qué Incluye?</h2>
        <ul class="tabs">
            
            <li><a href="#"></a>Web institucional</li>
                <i class="ion-ios-cart"></i>
            <li><a href="#"></a>Web a medida</li>
                <i class="ion-ios-cart"></i>
            <li><a href="#"></a>eCommerce</li>
                <i class="ion-ios-cart"></i>
            
        </ul>
    </section>
@endsection
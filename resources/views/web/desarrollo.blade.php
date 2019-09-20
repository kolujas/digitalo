@extends('layout.index')

@section('css')
    <link href="{{ asset('css/Tabs.css') }}" rel="stylesheet">
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
        <div class="tabs">
            <ul class="tab-menu">
                <li><a href="#tab1" class="active">Web Institucional</a></li>
                <li><a href="#tab2">Web a Medida</a></li>
                <li><a href="#tab3">Web Autoadministrable</a></li>
                <li><a href="#tab4">eCommerce</a></li>
            </ul>
            <ul class="tab-body">
                <li id="tab1" class="tab-li active">
                    <h3 class="title">Web Institucional</h3>
                    <span class="subtitle">presentación</span>
                    <ul class="list">
                        <li><span class="arrow">-></span>Banner principal</li>
                        <li><span class="arrow">-></span>Catálogo de productos</li>
                        <li><span class="arrow">-></span>Secciones institucionales personalizables</li>
                        <li><span class="arrow">-></span>Formularios de inscripción / contacto personalizados</li>
                    </ul>
                </li>
                <li id="tab2" class="tab-li">
                    <h3 class="title">Web a Medida</h3>
                    <span class="subtitle">multiples secciónes</span>
                    <ul class="list">
                        <li><span class="arrow">-></span>Banner principal</li>
                        <li><span class="arrow">-></span>Catálogos de productos</li>
                        <li><span class="arrow">-></span>Secciones institucionales personalizables</li>
                        <li><span class="arrow">-></span>Formularios de inscripción / contacto personalizados</li>
                        <li><span class="arrow">-></span>Detalle personalizado de productos</li>
                    </ul>
                </li>
                <li id="tab3" class="tab-li">
                    <h3 class="title">Web Autoadministrable</h3>
                    <span class="subtitle">manejo de información</span>
                    <ul class="list">
                        <li><span class="arrow">-></span>Banner principal</li>
                        <li><span class="arrow">-></span>Catálogos de productos</li>
                        <li><span class="arrow">-></span>Secciones institucionales personalizables</li>
                        <li><span class="arrow">-></span>Formularios de inscripción / contacto personalizados</li>
                        <li><span class="arrow">-></span>Detalle personalizado de productos</li>
                        <li><span class="arrow">-></span>Panel de mantenimiento</li>
                        <li><span class="arrow">-></span>Manejo de categorias, productos, etc</li>
                    </ul>
                </li>
                <li id="tab4" class="tab-li">
                    <h3 class="title">eCommerce</h3>
                    <span class="subtitle">venta online</span>
                    <ul class="list">
                        <li><span class="arrow">-></span>Banner principal</li>
                        <li><span class="arrow">-></span>Catálogos de productos</li>
                        <li><span class="arrow">-></span>Secciones institucionales personalizables</li>
                        <li><span class="arrow">-></span>Formularios de inscripción / contacto personalizados</li>
                        <li><span class="arrow">-></span>Detalle personalizado de productos</li>
                        <li><span class="arrow">-></span>Panel de mantenimiento</li>
                        <li><span class="arrow">-></span>Manejo de categorias, productos, etc</li>
                        <li><span class="arrow">-></span>Venta online de un producto / servicio</li>
                    </ul>
                </li>
            </ul>
        </div>
    </section>
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/Tabs.js')}}"></script>
@endsection
@extends('layout.index')

@section('css')
    <link href="{{ asset('css/web/inicio.css') }}" rel="stylesheet">
@endsection

@section('title')
    Digitalo
@endsection

@section('main')
    <main>
        <section class="banner-video">
            Aca va el video
        </section>

        <section class="servicios">
            <h2>¿Qué ofrecemos?</h2>
            
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic ratione nulla itaque, error totam ducimus obcaecati maxime, numquam veniam quod possimus! Voluptatibus ipsa ad maxime similique harum odio. Sit, quibusdam.</p>

            <div class="cards-servicios">
                <i class="ion-steam"></i>
                <h3>UI/UX design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, placeat? Lorem ipsum dolor sit amet.</p>
                <span class="border"></span>
            </div>

            <div class="cards-servicios">
                <i class="ion-steam"></i>
                <h3>UI/UX design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, placeat? Lorem ipsum dolor sit amet.</p>
                <span class="border"></span>
            </div>

            <div class="cards-servicios">
                <i class="ion-steam"></i>
                <h3>UI/UX design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, placeat? Lorem ipsum dolor sit amet.</p>
                <span class="border"></span>
            </div>

            <div class="cards-servicios">
                <i class="ion-steam"></i>
                <h3>UI/UX design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, placeat? Lorem ipsum dolor sit amet.</p>
                <span class="border"></span>
            </div>

            <div class="cards-servicios">
                <i class="ion-steam"></i>
                <h3>UI/UX design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, placeat? Lorem ipsum dolor sit amet.</p>
                <span class="border"></span>
            </div>
            
            <div class="cards-servicios">
                <i class="ion-steam"></i>
                <h3>UI/UX design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, placeat? Lorem ipsum dolor sit amet.</p>
                <span class="border"></span>
            </div>
        </section>
    </main>
@endsection
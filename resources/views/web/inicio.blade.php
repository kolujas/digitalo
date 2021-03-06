<?php
    /** @var object[] $validation */
?>

@extends('layout.index')

@section('css')
    <link href="{{ asset('css/web/inicio.css') }}" rel="stylesheet">
@endsection

@section('title')
    Digitalo
@endsection

@section('main')
    <section class="banner-video">
        <div>
            <h2>Somos tu partner Digital</h2>
            <h3>Podemos ayudarte a implementar una estrategia digital para tu negocio</h3>
            <button>Contactanos</button>
        </div>
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

    
    <section class="separacion-uno">
        <div class="divPadre">
            <div>
                <div>
                    <h3>¿Te gustaría tener tu propio sitio web?</h3>
                </div>

                <div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error ullam fugit delectus eveniet ipsa culpa.</p>
                </div>
                
                <div>
                    <button>si</button>
                </div>
            </div>

            <div class="divFinal">
                <img src="{{asset('img/promo-1.png')}}" alt="Foto de escritorio web">
            </div>
        </div>
            
    </section>

    <section class="portafolio impar">
        <h2>Portfolio</h2>
        <a href="https://mutualcoop.org.ar" target="_blank" class="cards-portafolio">
            <figure>
                <img src="{{asset('img/webs/Mutualcoop.png')}}" alt="Italian Trulli">
                <div class="footer-card">
                    <h3>Mutualcoop</h3>
                </div>
            </figure>
        </a>

        <a href="https://epem.com.ar" target="_blank" class="cards-portafolio">
            <figure>
                <img src="{{asset('img/webs/EPEM.png')}}" alt="Italian Trulli">
                <div class="footer-card">
                    <h3>EPEM</h3>
                </div>
            </figure>
        </a>

        <a href="http://electrodelparque.com.ar/" target="_blank" class="cards-portafolio">
            <figure>
                <img src="{{asset('img/webs/Electro.png')}}" alt="Italian Trulli">
                <div class="footer-card">
                    <h3>Electromédica del parque</h3>
                </div>
            </figure>
        </a>
    </section> 

    <section class="separacion-dos">
        <div class="divPadre">
            <div class="divH3">
                <h3>Suscribite a nuestro newsletter para mantenerte en contacto</h3>
            </div>
            
            <div class="suscribirme-div">
                <div class="div-input">
                    <input type="text" placeholder="Ingresa tu email" name="newsletter">
                </div>
                <div class="div-button">
                    <button>Suscribirme</button>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/web/inicio.js')}}"></script>
@endsection
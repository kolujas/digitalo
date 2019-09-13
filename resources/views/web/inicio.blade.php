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
    <main>
        <section class="banner-video">
            
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
            <div class="cards-portafolio">
                <figure>
                    <img src="https://thewallpaper.co//wp-content/uploads/2016/10/nice-wallpaper-hd-free-desktop-wallpapers-hd-4k-high-definition-windows-10-mac-apple-backgrounds-download-wallpaper-1920x1080.jpg" alt="Italian Trulli">
                    <div class="footer-card">
                        <h3>Mutualcoop</h3>
                    </div>
                </figure>
            </div>

            <div class="cards-portafolio">
                <figure>
                    <img src="https://thewallpaper.co//wp-content/uploads/2016/10/nice-wallpaper-hd-free-desktop-wallpapers-hd-4k-high-definition-windows-10-mac-apple-backgrounds-download-wallpaper-1920x1080.jpg" alt="Italian Trulli">
                    <div class="footer-card">
                        <h3>EPEM</h3>
                    </div>
                </figure>
            </div>

            <div class="cards-portafolio">
                <figure>
                    <img src="https://thewallpaper.co//wp-content/uploads/2016/10/nice-wallpaper-hd-free-desktop-wallpapers-hd-4k-high-definition-windows-10-mac-apple-backgrounds-download-wallpaper-1920x1080.jpg" alt="Italian Trulli">
                    <div class="footer-card">
                        <h3>Electro del parque</h3>
                    </div>
                </figure>
            </div>
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

        <section class="contacto">
            <h2>Contacto</h2>
            <form action="/contactar"
                method="post"
                class="form-validate"
                data-rules="{{$validation->rules}}"
                data-messages="{{$validation->messages}}">
                @csrf
                <div class="div-group inputs">
                    <div class="div-inputs">
                        <input type="text"
                            name="nombre"
                            placeholder="nombre"
                            value="{{old('nombre')}}">
                        <div
                            @if($errors->has('nombre'))
                                class="invalid-tooltip showed"
                            @else
                                class="invalid-tooltip"
                            @endif>
                            @if($errors->has('nombre'))
                                {{ $errors->first('nombre') }}
                            @endif
                        </div>
                    </div>
                    <div class="div-inputs">
                        <input type="email"
                            name="correo"
                            placeholder="email"
                            value="{{old('correo')}}">
                        <div
                            @if($errors->has('correo'))
                                class="invalid-tooltip showed"
                            @else
                                class="invalid-tooltip closed"
                            @endif>
                            @if($errors->has('correo'))
                                {{ $errors->first('correo') }}
                            @endif
                        </div>
                    </div>
                </div>

                <div class="div-group mensaje">
                    <textarea name="mensaje"
                        cols="30"
                        rows="10"
                        placeholder="mensaje">{{old('mensaje')}}</textarea>
                    <div
                        @if($errors->has('mensaje'))
                            class="invalid-tooltip showed"
                        @else
                        class="invalid-tooltip closed"
                        @endif>
                        @if($errors->has('mensaje'))
                            {{ $errors->first('mensaje') }}
                        @endif
                    </div>
                </div>

                <div class="div-submit">
                    <button type="submit" class="form-submit">Enviar</button>
                </div>
            </form>
        </section>

        <div class="whatsapp">
            <a target="_blank" href="https://wa.me/541167172626"><img src="/img/wsp.png" alt="Icono de whatsapp"></a>
        </div>

    </main>
@endsection

@section('js')
    <script type="text/javascript" src="{{asset('js/web/inicio.js')}}"></script>
    <script id="validation_autoload" type="text/javascript" src="{{asset('js/Validation/autoload.js')}}"></script>
@endsection
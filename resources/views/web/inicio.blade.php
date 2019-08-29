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
                    <h3>¿Te gustaría tener tu propio sitio web?</h3>
                </div>

                <div>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Error ullam fugit delectus eveniet ipsa culpa.</p>
                </div>
                
                <div>
                    <button>si</button>
                </div>

                <div class="divFinal">
                    <img src="{{asset('img/promo-1.png')}}" alt="Foto de escritorio web">
                </div>
            </div>
                
        </section>




        <section class="portafolio">
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
    </main>
@endsection
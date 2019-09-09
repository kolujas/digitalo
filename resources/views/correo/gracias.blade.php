@extends('layout.index')

@section('css')
    <link href="{{ asset('css/correo/gracias.css') }}" rel="stylesheet">
@endsection

@section('titulo')
    Gracias por contactarte 
@endsection

@section('main')
    <div class="container-fluid px-0">
        <div class="parallax jumbotron card card-image m-0 p-4 px-0">
            <div class="jumbotron-mask"></div>

            <div class="jumbotron-body d-flex justify-content-center align-items-center text-white text-center m-0 p-0">
                <div class="row m-0 my-lg-4 p-0 d-flex justify-content-center">
                    <div class="col-12 col-md-10 col-lg-8 m-0 mb-4 p-0">
                        <h2 class="card-title font-weight-bold text-white m-0 p-0">Gracias por contactarte</h2>
                    </div>

                    <div class="col-12 col-md-10 col-lg-6 m-0 mb-4 p-0">
                        <p class="m-0 p-0">Te respoderemos en la brevedad.</p>
                    </div>

                    <div class="col-12 m-0 p-0">
                        <a class="btn btn-lg m-0" href="{{URL::previous()}}">Regresar al inicio</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
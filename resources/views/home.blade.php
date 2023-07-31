@extends('layout.navbar2')

@section('title','Home')

@section('scripts')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
<link rel="stylesheet" href="{{asset('css/texteffect.css')}}">
<script src="{{asset('js/script.js')}}"></script>

<style>
    .carousel-caption {
        position: absolute;
        top: 40%
    }

</style>
@endsection

@section('content')
<div id="carouselMaterialStyle" class="carousel slide carousel-fade carousel-light " data-bs-ride="carousel">
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>


    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <img src="{{asset('image/background.jpg')}}" alt="1" class="d-block" style="width:2000px; height:700px">
            <div class="carousel-caption">
                <h1 >Malai</h1>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="{{asset('image/4.jpg')}}" alt="2" class="d-block" style="width:2000px; height:700px">
            <div class="carousel-caption"><h1 >Malai</h1>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="3000">
            <img src="{{asset('image/6.jpg')}}" alt="3" class="d-block" style="width:2000px; height:700px ">

            <div class="carousel-caption"><h1 >Malai</h1>
            </div>
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<!-- end carosel -->





<!-- Main Content Area -->
<div class="container my-5 d-grid gap-5">
    <div class="p-5 border">
        <p>
            Malai
        </p>
    </div>
    <div class="p-5 border">
        <p>
            Malai
        </p>
    </div>
    <div class="p-5 border">
        <p>
            Malai
        </p>
    </div>
    <div class="p-5 border">
        <p>
            Malai
        </p>
    </div>
    <div class="p-5 border">
        <p>
            Malai
        </p>
    </div>
</div>
@endsection
@extends('layout.footer')

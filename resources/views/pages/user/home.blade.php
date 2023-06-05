@extends('layouts.user')

@section('title')
Home
@endsection

@section('content')
<!--hero section start-->
<section class="hero-section hero-section-3 ptb-100">
    <!--animated circle shape start-->
    <div class="circles">
        <div class="point animated-point-1"></div>
        <div class="point animated-point-2"></div>
        <div class="point animated-point-3"></div>
        <div class="point animated-point-4"></div>
        <div class="point animated-point-5"></div>
        <div class="point animated-point-6"></div>
    </div>
    <!--animated circle shape end-->
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md-6 col-lg-6">
                <div class="hero-content-left ptb-100">
                    <h1 style="font-size: 40px"><span>Ayo Belajar Sambil Menjelajah</span></h1>
                    <p class="lead">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis maxime veniam
                        culpa porro rerum cumque aliquid consequatur amet!
                    </p>

                    <a href="{{ url("sign-up") }}" class="btn solid-btn">Daftar Sekarang</a>
                    <a href="{{ url("sign-in") }}" class="btn outline-btn">Masuk</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="hero-animation-img">
                    <img class="img-fluid d-block m-auto animation-one" src="{{ asset('img/bg-child.png') }}"
                        width="420" alt="animation image">

                    <img class="img-fluid d-none d-lg-block animation-three"
                        src="{{ asset('img/hero-animation-01.svg') }}" alt="animation image" width="70">
                    <img class="img-fluid d-none d-lg-block animation-four"
                        src="{{ asset('img/hero-animation-03.svg') }}" alt="animation image" width="50">
                </div>
            </div>
        </div>
    </div>

    <!--shape image start-->
    <img src="{{ asset('img/hero-bg-shape-2.svg') }}" class="shape-image" alt="shape image">
    <!--shape image end-->
</section>
<!--hero section end-->

<!--promo section start-->
<section class="promo-section ptb-100">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12">
                <img src="{{ asset('img/kelas-jelajah/banner.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<!--promo section end-->

<!--our blog section start-->
<section id="blog" class="our-blog-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="section-heading mb-5 ">
                    <h2 class="">Kelas Jelajah</h2>
                    <p>
                        Enthusiastically drive revolutionary opportunities before emerging leadership.
                        Distinctively
                        transform tactical methods of empowerment via resource sucking core.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-blog-card card border-0 shadow-sm white-bg">
                    <span class="category position-absolute badge badge-pill badge-primary">Kelas IV</span>
                    <img src="{{ asset('img/kelas-jelajah/image-1.jpg') }}" class="card-img-top position-relative"
                        alt="blog">
                    <div class="card-body">
                        <h3 class="h5 card-title"><a href="#">Appropriately productize fully</a></h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="single-blog-card card border-0 shadow-sm white-bg">
                    <span class="category position-absolute badge badge-pill badge-primary">Kelas IV</span>
                    <img src="{{ asset('img/kelas-jelajah/image-2.jpg') }}" class="card-img-top position-relative"
                        alt="blog">
                    <div class="card-body">
                        <h3 class="h5 card-title"><a href="#">Appropriately productize fully</a></h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="single-blog-card card border-0 shadow-sm white-bg">
                    <span class="category position-absolute badge badge-pill badge-primary">Kelas IV</span>
                    <img src="{{ asset('img/kelas-jelajah/image-3.jpg') }}" class="card-img-top position-relative"
                        alt="blog">
                    <div class="card-body">
                        <h3 class="h5 card-title"><a href="#">Appropriately productize fully</a></h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="single-blog-card card border-0 shadow-sm white-bg">
                    <span class="category position-absolute badge badge-pill badge-primary">Kelas IV</span>
                    <img src="{{ asset('img/kelas-jelajah/image-4.jpg') }}" class="card-img-top position-relative"
                        alt="blog">
                    <div class="card-body">
                        <h3 class="h5 card-title"><a href="#">Appropriately productize fully</a></h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="single-blog-card card border-0 shadow-sm white-bg">
                    <span class="category position-absolute badge badge-pill badge-primary">Kelas IV</span>
                    <img src="{{ asset('img/kelas-jelajah/image-5.jpg') }}" class="card-img-top position-relative"
                        alt="blog">
                    <div class="card-body">
                        <h3 class="h5 card-title"><a href="#">Appropriately productize fully</a></h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="single-blog-card card border-0 shadow-sm white-bg">
                    <span class="category position-absolute badge badge-pill badge-primary">Kelas IV</span>
                    <img src="{{ asset('img/kelas-jelajah/image-6.jpg') }}" class="card-img-top position-relative"
                        alt="blog">
                    <div class="card-body">
                        <h3 class="h5 card-title"><a href="#">Appropriately productize fully</a></h3>
                        <p class="card-text">Some quick example text to build on the card title and make up the
                            bulk.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--our blog section end-->
@endsection
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
                    <h1 style="font-size: 55px"><span>Ayo Belajar Sambil Menjelajah</span></h1>

                    <p></p>
                    <a href="{{ url("sign-up") }}" class="btn solid-btn">Daftar Sekarang</a>
                    <a href="{{ url("sign-in") }}" class="btn outline-btn">Masuk</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="hero-animation-img">
                    <img class="img-fluid d-block m-auto animation-one" src="{{ asset('img/home.png') }}" width="500"
                        alt="animation image">


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
<section class="promo-section">
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
<section id="blog" class="our-blog-section ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="section-heading mb-5">
                    <h2 class="">Kelas Jelajah</h2>

                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($data['kelas'] as $kelas)
            <div class="col-md-4">
                <a href="{{ url('sign-in') }}">
                    <div class="single-blog-card card border-0 shadow-sm white-bg">
                        <span class="category position-absolute badge badge-pill badge-primary">{{
                            $kelas->mataPelajaran->nama_matpel
                            }}</span>
                        <img src="{{ Storage::url($kelas->gambar) }}" class="card-img-top position-relative" alt="blog">
                        <div class="card-body">
                            <h3 class="h5 card-title"><a href="#">{{ $kelas->nama_kelas }}</a></h3>
                            <p class="card-text">{{ $kelas->deskripsi }}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>
</section>
<!--our blog section end-->
@endsection
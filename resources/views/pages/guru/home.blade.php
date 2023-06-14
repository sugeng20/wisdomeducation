@extends('layouts.guru')

@section('title')
Halaman Guru
@endsection

@section('content')
<!--hero section start-->
<section class="hero-section ptb-100 background-img">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                    <h1 class="text-white mb-0">Halaman Guru</h1>
                    <div class="custom-breadcrumb">
                        <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                            <li class="list-inline-item breadcrumb-item">Pages</li>
                            <li class="list-inline-item breadcrumb-item active">Guru</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--hero section end-->

<!--overflow block start-->
<div class="overflow-hidden">
    <!--about us section start-->
    <section id="about" class="about-us ptb-100">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <h2>Class</h2>
            </div>
            <div class="row">
                @foreach ($data['kelas'] as $kelas)
                <div class="col-md-4">
                    <a href="{{ route('class-teacher.show', $kelas->id) }}">
                        <div class="single-blog-card card border-0 shadow-sm white-bg">
                            <span class="category position-absolute badge badge-pill badge-primary">{{
                                $kelas->mataPelajaran->nama_matpel
                                }}</span>
                            <img src="{{ Storage::url($kelas->gambar) }}" class="card-img-top position-relative"
                                alt="blog">
                            <div class="card-body">
                                <h3 class="h5 card-title"><a href="#">{{ $kelas->nama_kelas }}</a></h3>
                                <p class="card-text">{{ $kelas->deskripsi }}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach

                <div class="col-12">
                    <a href="#" class="btn btn-primary">Lihat Selanjutnya</a>
                </div>

            </div>

            <div class="row align-items-center justify-content-between mt-5">
                <h2>Student</h2>
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

                <div class="col-12">
                    <a href="#" class="btn btn-primary">Lihat Selanjutnya</a>
                </div>

            </div>

            <div class="row align-items-center justify-content-between mt-5">
                <h2>Certificate</h2>
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

                <div class="col-12">
                    <a href="#" class="btn btn-primary">Lihat Selanjutnya</a>
                </div>

            </div>
        </div>
    </section>
    <!--about us section end-->
</div>
<!--overflow block end-->
@endsection
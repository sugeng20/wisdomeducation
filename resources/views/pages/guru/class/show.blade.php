@extends('layouts.guru')

@section('title')
Detail Class
@endsection

@section('content')
<!--hero section start-->
<section class="hero-section ptb-100 background-img">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                    <h1 class="text-white mb-0">{{ $kelas->nama_kelas }}</h1>
                    <div class="custom-breadcrumb">
                        <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                            <li class="list-inline-item breadcrumb-item">Pages</li>
                            <li class="list-inline-item breadcrumb-item active">Kelas</li>
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
    <section id="about" class="about-us mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="{{ Storage::url($kelas->gambar) }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h2>{{ $kelas->deskripsi }}</h2>
                    <p>
                        Sebelum memulai kelas pastikan Anda telah membaca panduan pada halaman "Unduhan" Kemudian
                        silahkan
                        membaca RPP dan Mulai
                        Kelas Pembelajaran baik dengan Virtual Reality atau Augmented Reality
                    </p>
                    <a href="{{ $kelas->link_rpp }}" class="btn btn-primary btn-block" target="_blank">Unduh RPP {{
                        $kelas->nama_kelas }}</a>
                </div>
                <div class="col-12">
                    <h2 class="mt-5">Orientasi Masalah</h2>
                    <hr>
                </div>
                <div class="col-12 text-center">
                    <div class="sketchfab-embed-wrapper"> <iframe title="Rapid Punching Animation" frameborder="0"
                            allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true"
                            allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking
                            execution-while-out-of-viewport execution-while-not-rendered web-share width="640"
                            height="480" src="https://sketchfab.com/models/898c066dc84b4fe7b19fa2f40f4fd145/embed">
                        </iframe> </div>
                </div>
                <div class="col-12">
                    <h2 class="mt-5">Media Pembelajaran VR</h2>
                </div>
                <div class="col-12">
                    <a href="{{ $kelas->link_vr }}" class="btn btn-primary btn-block" target="_blank">Unduh Aplikasi
                        Wisdom VR</a>
                    <hr>
                </div>

                <div class="col-12">
                    <h2 class="mt-5">Media Pembelajaran AR</h2>
                    <hr>
                </div>
                <div class="col-lg-5">
                    <img src="{{ Storage::url($kelas->qr_code_ar) }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-7">
                    <h5 class="mt-5">
                        Silahkan Scan QRCode atau Klik Akses Link melalui smartphone <br /> untuk mengakses kelas
                        pembelajaran
                        AR
                    </h5>
                    <a href="{{ $kelas->link_ar }}" class="btn btn-primary btn-block" target="_blank">Akses Link
                        Pembelajaran AR</a>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->
</div>
<!--overflow block end-->
@endsection
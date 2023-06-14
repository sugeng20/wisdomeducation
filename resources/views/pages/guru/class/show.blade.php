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
    <section id="about" class="about-us mt-3">
        <div class="container">
            <h5 class="text-center">Detail Kelas</h5>


            <div class="row">
                <div class="col-lg-5">
                    <img src="{{ Storage::url($kelas->gambar) }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-7">
                    <h1>{{ $kelas->deskripsi }}</h1>
                    <p>
                        Sebelum memulai kelas pastikan Anda telah membaca panduan pada halaman "Unduhan" Kemudian
                        silahkan
                        membaca RPP dan Mulai
                        Kelas Pembelajaran baik dengan Virtual Reality atau Augmented Reality
                    </p>
                    <a href="#" class="btn btn-primary btn-block">Unduh RPP {{ $kelas->nama_kelas }}</a>
                </div>
                <div class="col-12">
                    <h1 class="mt-5">Kelas Pembelajaran VR</h1>
                </div>
                <div class="col-12">
                    <a href="#" class="btn btn-primary btn-block">Unduh Aplikasi Wisdom VR</a>
                    <hr>
                </div>

                <div class="col-12">
                    <h1 class="mt-5">Kelas Pembelajaran AR</h1>
                    <hr>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('img/qrcode.jpeg') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-7">
                    <h5 class="mt-5">
                        Silahkan Scan QRCode atau Klik Akses Link melalui smartphone <br /> untuk mengakses kelas
                        pembelajaran
                        AR
                    </h5>
                    <a href="#" class="btn btn-primary btn-block">Akses Link Pembelajaran AR</a>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->
</div>
<!--overflow block end-->
@endsection
@extends('layouts.user')

@section('title')
Tentang
@endsection

@section('content')
<!--hero section start-->
<section class="hero-section ptb-100 background-img">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                    <h1 class="text-white mb-0">Tentang</h1>
                    <div class="custom-breadcrumb">
                        <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                            <li class="list-inline-item breadcrumb-item">Halaman</li>
                            <li class="list-inline-item breadcrumb-item active">Tentang</li>
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
                <div class="col-md-5">
                    <div class="about-content-right">
                        <img src="{{ asset('img/about-1.jpg') }}" alt="about us" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about-content-left section-heading">
                        <h2>Tentang Wisdom Education
                        </h2>

                        <div class="single-feature mb-4 mt-5">
                            <p>
                                Website WE hadir sebagai inovasi website sumber belajar dengan memadukan teknologi
                                virtual reality dan augmented reality
                                serta mengedepankan metode problem based learning dengan demikian diharapkan dapat
                                pelengkap belajar yang mengasyikkan
                                dan membantu peserta didik dalam memahami dan mengamalkan nilai-nilai Profil Pelajar
                                Pancasila dengan baik dengan tidak
                                meninggalkan peran guru.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p style="font-size: 20px">
                        Dengan memadukan teknologi VR dan AR siswa dapat mesimulasikan perannya sebagai siswa
                        dengan profil pelajar pancasila
                        melalui jelajah lewat dunia virtual.
                    </p>
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('img/about-2.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('img/about-3.png') }}" alt="" class="img-fluid">
                </div>
                <div class="col-lg-4">
                    <img src="{{ asset('img/about-4.png') }}" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </section>
    <!--about us section end-->
</div>
<!--overflow block end-->
@endsection
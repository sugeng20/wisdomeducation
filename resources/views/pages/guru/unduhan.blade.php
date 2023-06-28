@extends('layouts.guru')

@section('title')
Halaman Unduhan
@endsection

@section('content')
<!--hero section start-->
<section class="hero-section ptb-100 background-img">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                    <h1 class="text-white mb-0">Halaman Unduhan</h1>
                    <div class="custom-breadcrumb">
                        <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                            <li class="list-inline-item breadcrumb-item">Pages</li>
                            <li class="list-inline-item breadcrumb-item active">Unduhan</li>
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
            <div class="row justify-content-center">

                @foreach ($data['unduhan'] as $unduhan)
                <div class="col-lg-4 col-md mb-5">
                    <div class="card text-center single-pricing-pack">
                        <div class="pt-4">
                            <h5>{{ $unduhan->judul }}</h5>
                        </div>
                        <div class="pricing-img mt-4">
                            <img src="{{ $unduhan->cover_gambar ? Storage::url($unduhan->cover_gambar) : asset('/img/basic.svg') }}"
                                alt="pricing img" class="img-fluid">
                        </div>
                        <div class="card-header py-4 border-0 pricing-header">
                            {{-- <div class="h1 text-center mb-0">$<span class="price font-weight-bolder">29</span>
                            </div> --}}
                        </div>
                        <div class="card-body">

                            <a href="{{ $unduhan->link }}" class="btn outline-btn mb-3" target="_blank">Download</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <!--about us section end-->
</div>
<!--overflow block end-->
@endsection
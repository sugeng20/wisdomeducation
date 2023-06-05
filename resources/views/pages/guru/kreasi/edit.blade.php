@extends('layouts.guru')

@section('title')
Kreasi
@endsection

@section('content')
<!--hero section start-->
<section class="hero-section ptb-100 background-img">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                    <h1 class="text-white mb-0">Wadah Kreasi</h1>
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
            <div class="row">
                <h2>Edit Kreasi</h2>
            </div>
            @if ($errors->any())
            <div class="row my-3">
                <div class="col-sm-12">
                    <div class="alert alert-danger dark" role="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            @endif

            <form action="{{ route('kreasi.update', $kreasi->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="row align-items-center mb-3">
                    <div class="col-lg-2">
                        <label for="nama_ide">Nama Ide</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="nama_ide" id="nama_ide" class="form-control"
                            value="{{ $kreasi->nama_ide }}" required>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-lg-2">
                        <label for="link">Link PPT Ide</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="link" id="link" class="form-control" value="{{ $kreasi->link }}"
                            required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>
    </section>
    <!--about us section end-->
</div>
<!--overflow block end-->
@endsection
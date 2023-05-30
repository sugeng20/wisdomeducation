@extends('layouts.guru')

@section('title')
Edit Class
@endsection

@section('content')
<!--hero section start-->
<section class="hero-section ptb-100 background-img">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                    <h1 class="text-white mb-0">Edit Class</h1>
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
                <h2>Edit Kelas</h2>
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
            @if (Session::get('success'))
            <div class="my-3 alert alert-primary alert-dismissible fade show border-0 b-round" role="alert">
                <strong>{{ Session::get('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <form action="{{ route('class-teacher.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-center mb-3">
                    <div class="col-lg-2">
                        <label for="matpel_id">Mata Pelajaran</label>
                    </div>
                    <div class="col-lg-4">
                        <select name="matpel_id" id="matpel_id" class="form-control">
                            <option value="">- Pilih Mata Pelajaran -</option>
                            @foreach ($data['mata_pelajaran'] as $matpel)
                            <option value="{{ $matpel->id }}" {{ $kelas->matpel_id == $matpel->id }}>{{
                                $matpel->nama_matpel }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-lg-2">
                        <label for="nama_kelas">Nama Kelas</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="nama_kelas" id="nama_kelas" class="form-control">
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-lg-2">
                        <label for="gambar">Cover Kelas</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="file" name="gambar" id="gambar" class="form-control">
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-lg-2">
                        <label for="deskripsi">Deskripsi Singkat</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control">
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
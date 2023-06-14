@extends('layouts.guru')

@section('title')
Class
@endsection

@section('content')
<!--hero section start-->
<section class="hero-section ptb-100 background-img">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-9 col-lg-7">
                <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                    <h1 class="text-white mb-0">Class</h1>
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
                <h2>Tambah Kelas</h2>
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
            </div>
            @endif
            <form action="{{ route('class-teacher.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-center mb-3">
                    <div class="col-lg-2">
                        <label for="matpel_id">Mata Pelajaran</label>
                    </div>
                    <div class="col-lg-4">
                        <select name="matpel_id" id="matpel_id" class="form-control" required>
                            <option value="">- Pilih Mata Pelajaran -</option>
                            @foreach ($data['mata_pelajaran'] as $matpel)
                            <option value="{{ $matpel->id }}">{{ $matpel->nama_matpel }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-lg-2">
                        <label for="nama_kelas">Nama Kelas</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="nama_kelas" id="nama_kelas" class="form-control" required>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-lg-2">
                        <label for="gambar">Cover Kelas</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="file" name="gambar" id="gambar" class="form-control" required>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-lg-2">
                        <label for="deskripsi">Deskripsi Singkat</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-lg-2">
                        <label for="link_rpp">Link Gdrive RPP</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="link_rpp" id="link_rpp" class="form-control" required>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-lg-2">
                        <label for="link_vr">Link Gdrive Media VR</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="link_vr" id="link_vr" class="form-control" required>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-lg-2">
                        <label for="link_ar">Link Gdrive Media AR</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="link_ar" id="link_ar" class="form-control" required>
                    </div>
                </div>



                <div class="row align-items-center mb-3">
                    <div class="col-lg-2">
                        <label for="qr_code_ar">Qr Code AR</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="file" name="qr_code_ar" id="qr_code_ar" class="form-control" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <div class="row align-items-center justify-content-between mt-5">
                <h2>List Kelas</h2>
            </div>
            <div class="row">

                @foreach ($data['kelas'] as $kelas)
                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm white-bg">
                        <span class="category position-absolute badge badge-pill badge-primary"></span>
                        <img src="{{ Storage::url($kelas->gambar) }}" class="card-img-top position-relative" alt="blog">
                        <div class="card-body">
                            <h3 class="h5 card-title"><a href="{{ route('class-teacher.show', $kelas->id) }}">{{
                                    $kelas->nama_kelas }}</a></h3>
                            <p class="card-text">{{ $kelas->deskripsi }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('class-teacher.edit', $kelas->id) }}"
                                    class="btn btn-primary text-white">Edit</a>

                                <form action="{{ route('class-teacher.destroy', $kelas->id) }}" method="POST"
                                    onsubmit="return confirm(`Apakah anda yakin akan menghapus ini?`)">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
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
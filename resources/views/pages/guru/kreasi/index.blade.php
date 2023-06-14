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
            <p>
                Fitur Wadah Kreasi bertujuan untuk meningkatkan kreativitas guru dalam mengkreasikan pembalajaran yang
                inovatif melalui
                media pembelajaran dengan menggunakan template yang telah tersedia dan referensi storyboard pengembangan
                media
                pembelajaran yang dapat diakses oleh guru. Untuk detail pemanfaatan storyboard kreasi silahkan unduh
                Panduan Pemanfaatan
                Stroyboard KReasi pada laman unduhan.
            </p>

            <h3>CONTOH STORYBOARD MEDIA PEMBELAJARAN</h3>
            <a href="https://drive.google.com/file/d/1Lz3CTy1CPrXHKdcePjCx6Bkz6wOVnHS3/view"
                class="btn btn-primary btn-block">Lihat Contoh Storyboard Media Pembelajaran</a>
            <hr>
            <h3 class="mt-5">TEMPLATE KOSONG STORY BOARD:</h3>
            <a href="https://drive.google.com/file/d/1RrFBP695bv6ygQ58wWGMz23gyoieysf9/view"
                class="btn btn-primary btn-block">Lihat
                Contoh Storyboard Media Pembelajaran</a>
            <hr>
            <div class="row mt-5">
                <h2>Tambah Kreasi</h2>
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
            <form action="{{ route('kreasi.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row align-items-center mb-3">
                    <div class="col-lg-2">
                        <label for="nama_ide">Nama Ide</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="nama_ide" id="nama_ide" class="form-control" required>
                    </div>
                </div>

                <div class="row align-items-center mb-3">
                    <div class="col-lg-2">
                        <label for="link">Link PPT Ide</label>
                    </div>
                    <div class="col-lg-4">
                        <input type="text" name="link" id="link" class="form-control" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            <div class="row align-items-center justify-content-between mt-5">
                <h2>Wadah Kreasi Saya</h2>
            </div>
            <div class="row">
                <table class="table table-bordered">
                    <tr>
                        <th>No</th>
                        <th>Nama Ide</th>
                        <th>Link</th>
                        <th>Aksi</th>
                    </tr>
                    @php
                    $no = 1;
                    @endphp
                    @forelse ($data['kreasi'] as $kreasi)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $kreasi->nama_ide }}</td>
                        <td>
                            <a href="{{ $kreasi->link }}" target="_blank" class="btn btn-info">
                                <i class="fa fa-eye"></i>
                                Lihat
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('kreasi.edit', $kreasi->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('kreasi.destroy', $kreasi->id) }}" method="POST"
                                onsubmit="return confirm(`Apakah anda yakin akan menghapus ini?`)" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">Tidak Ada Data</td>
                    </tr>
                    @endforelse
                </table>
            </div>
        </div>
    </section>
    <!--about us section end-->
</div>
<!--overflow block end-->
@endsection
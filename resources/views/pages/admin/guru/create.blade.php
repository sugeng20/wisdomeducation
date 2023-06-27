@extends('layouts.admin')

@section('title')
Tambah Guru
@endsection

@section('content')
<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Wisdomeducation</a>
                        </li>
                        <!--end nav-item-->
                        <li class="breadcrumb-item"><a href="#">Tambah Guru</a>
                        </li>

                    </ol>
                </div>
                <h4 class="page-title">Tambah Guru</h4>
            </div>
            <!--end page-title-box-->
        </div>
        <!--end col-->
    </div>
    <!-- end page title end breadcrumb -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('guru.index') }}" class="btn btn-primary mb-3"><i class="mdi mdi-backburger"></i>
                        Kembali
                    </a>
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
                    <form action="{{ route('guru.store') }}" method="POST">
                        @csrf

                        <div class="mb-3 row">
                            <label for="username" class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" name="username" id="username" class="form-control"
                                    placeholder="Masukan Username" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Masukan Password" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="nama_guru" class="col-sm-2 col-form-label">Nama Guru</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_guru" id="nama_guru" class="form-control"
                                    placeholder="Masukan Nama Guru" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" id="email" class="form-control"
                                    placeholder="Masukan Email" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="no_hp" class="col-sm-2 col-form-label">No HP</label>
                            <div class="col-sm-10">
                                <input type="text" name="no_hp" id="no_hp" class="form-control"
                                    placeholder="Masukan No HP" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
                                    placeholder="Masukan Tanggal Lahir" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="jabatan_id" class="col-sm-2 col-form-label">Jabatan</label>
                            <div class="col-sm-10">
                                <select name="jabatan_id" id="jabatan_id" class="form-control" required>
                                    <option value="">- Pilih Jabatan -</option>
                                    @foreach ($data['jabatan'] as $jabatan)
                                    <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="sekolah_id" class="col-sm-2 col-form-label">Asal Sekolah</label>
                            <div class="col-sm-10">
                                <select name="sekolah_id" id="sekolah_id" class="form-control" required>
                                    <option value="">- Pilih Sekolah -</option>
                                    @foreach ($data['sekolah'] as $sekolah)
                                    <option value="{{ $sekolah->id }}">{{ $sekolah->nama_sekolah }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <div class="col-sm-2 col-form-label">
                                <button type="submit" class="btn btn-success"><i class="mdi mdi-database-plus"></i>
                                    Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <!--end row-->


</div><!-- container -->
@endsection
@extends('layouts.admin')

@section('title')
Edit Sekolah
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
                        <li class="breadcrumb-item"><a href="#">Edit Sekolah</a>
                        </li>

                    </ol>
                </div>
                <h4 class="page-title">Edit Sekolah</h4>
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
                    <a href="{{ route('sekolah.index') }}" class="btn btn-primary mb-3"><i
                            class="mdi mdi-backburger"></i>
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
                    <form action="{{ route('sekolah.update', $sekolah->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-3 row">
                            <label for="nama_sekolah" class="col-sm-2 col-form-label">Nama Sekolah</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control"
                                    placeholder="Masukan Nama Sekolah" value="{{ $sekolah->nama_sekolah }}" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="alamat_sekolah" class="col-sm-2 col-form-label">Alamat Sekolah</label>
                            <div class="col-sm-10">
                                <textarea name="alamat_sekolah" id="" cols="30" rows="2" class="form-control"
                                    placeholder="Masukan Alamat Sekolah">{{ $sekolah->alamat_sekolah }}</textarea>
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
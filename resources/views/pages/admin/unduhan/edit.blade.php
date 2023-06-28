@extends('layouts.admin')

@section('title')
Edit Unduhan
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
                        <li class="breadcrumb-item"><a href="#">Edit Unduhan</a>
                        </li>

                    </ol>
                </div>
                <h4 class="page-title">Edit Unduhan</h4>
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
                    <a href="{{ route('unduhan.index') }}" class="btn btn-primary mb-3"><i
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
                    <form action="{{ route('unduhan.update', $unduhan->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3 row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" name="judul" id="judul" class="form-control"
                                    placeholder="Masukan Judul Unduhan" value="{{ $unduhan->judul }}" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="cover_gambar" class="col-sm-2 col-form-label">Cover Gambar</label>
                            <div class="col-sm-10">
                                <input type="file" name="cover_gambar" id="cover_gambar" class="form-control">
                                <img src="{{ Storage::url($unduhan->cover_gambar) }}" width="150" alt="">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="link" class="col-sm-2 col-form-label">Link File</label>
                            <div class="col-sm-10">
                                <textarea name="link" id="" cols="30" rows="2" class="form-control"
                                    placeholder="Masukan Link File">{{ $unduhan->link }}</textarea>
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
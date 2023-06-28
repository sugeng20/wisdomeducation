@extends('layouts.admin')

@section('title')
Edit Wadah Kreasi
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
                        <li class="breadcrumb-item"><a href="#">Edit Wadah Kreasi</a>
                        </li>

                    </ol>
                </div>
                <h4 class="page-title">Edit Wadah Kreasi</h4>
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
                    <a href="{{ route('wadah-kreasi.index') }}" class="btn btn-primary mb-3"><i
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
                    <form action="{{ route('wadah-kreasi.update', $wadahkreasi->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-3 row">
                            <label for="nama_ide" class="col-sm-2 col-form-label">Nama Ide</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama_ide" id="nama_ide" class="form-control"
                                    placeholder="Masukan Nama Ide" value="{{ $wadahkreasi->nama_ide }}" required>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="link" class="col-sm-2 col-form-label">Link PPT</label>
                            <div class="col-sm-10">
                                <textarea name="link" id="" cols="30" rows="2" class="form-control"
                                    placeholder="Masukan Link PPT">{{ $wadahkreasi->link }}</textarea>
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
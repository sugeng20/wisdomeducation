@extends('layouts.admin')

@section('title')
Edit Kelas
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
                        <li class="breadcrumb-item"><a href="#">Edit Kelas</a>
                        </li>

                    </ol>
                </div>
                <h4 class="page-title">Edit Kelas</h4>
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
                    <a href="{{ route('kelas.index') }}" class="btn btn-primary mb-3"><i class="mdi mdi-backburger"></i>
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
                    <form action="{{ route('kelas.update', $kelas->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="row align-items-center mb-3">
                            <div class="col-lg-2">
                                <label for="matpel_id">Mata Pelajaran</label>
                            </div>
                            <div class="col-lg-4">
                                <select name="matpel_id" id="matpel_id" class="form-control" required>
                                    <option value="">- Pilih Mata Pelajaran -</option>
                                    @foreach ($data['mata_pelajaran'] as $matpel)
                                    <option value="{{ $matpel->id }}" {{ $kelas->matpel_id == $matpel->id ? 'selected' :
                                        ''
                                        }}>{{
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
                                <input type="text" name="nama_kelas" id="nama_kelas" class="form-control"
                                    value="{{ $kelas->nama_kelas }}" required>
                            </div>
                        </div>

                        <div class="row align-items-center mb-3">
                            <div class="col-lg-2">
                                <label for="gambar">Cover Kelas</label>
                            </div>
                            <div class="col-lg-4">


                                <img width="200" src="{{ Storage::url($kelas->gambar) }}" alt="" class="img-fluid">
                                <input type="file" name="gambar" id="gambar" class="form-control">
                            </div>
                        </div>

                        <div class="row align-items-center mb-3">
                            <div class="col-lg-2">
                                <label for="deskripsi">Deskripsi Singkat</label>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" name="deskripsi" id="deskripsi" value="{{ $kelas->deskripsi }}"
                                    class="form-control" required>
                            </div>
                        </div>

                        <div class="row align-items-center mb-3">
                            <div class="col-lg-2">
                                <label for="link_rpp">Link Gdrive RPP</label>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" name="link_rpp" id="link_rpp" class="form-control"
                                    value="{{ $kelas->link_rpp }}" required>
                            </div>
                        </div>

                        <div class="row align-items-center mb-3">
                            <div class="col-lg-2">
                                <label for="link_vr">Link Gdrive Media VR</label>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" name="link_vr" id="link_vr" class="form-control"
                                    value="{{ $kelas->link_vr }}" required>
                            </div>
                        </div>

                        <div class="row align-items-center mb-3">
                            <div class="col-lg-2">
                                <label for="link_ar">Link Gdrive Media AR</label>
                            </div>
                            <div class="col-lg-4">
                                <input type="text" name="link_ar" id="link_ar" class="form-control"
                                    value="{{ $kelas->link_ar }}" required>
                            </div>
                        </div>

                        <div class="row align-items-center mb-3">
                            <div class="col-lg-2">
                                <label for="qr_code_ar">Qr Code AR</label>
                            </div>
                            <div class="col-lg-4">
                                <img width="200" src="{{ Storage::url($kelas->qr_code_ar) }}" alt="" class="img-fluid">
                                <input type="file" name="qr_code_ar" id="qr_code_ar" class="form-control">
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
@extends('layouts.admin')

@section('title')
Sekolah
@endsection

@section('content')
<div class="container-fluid">
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Sepatulola</a>
                        </li>
                        <!--end nav-item-->
                        <li class="breadcrumb-item"><a href="#">Sekolah</a>
                        </li>
                    </ol>
                </div>
                <h4 class="page-title">Sekolah</h4>
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
                    <a href="{{ route('sekolah.create') }}" class="btn btn-primary"><i class="mdi mdi-plus-circle"></i>
                        Tambah Sekolah
                    </a>

                    @if (Session::get('success'))
                    <div class="my-3 alert alert-primary alert-dismissible fade show border-0 b-round" role="alert">
                        <strong>{{ Session::get('success') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table" id="table-datatables">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Sekolah</th>
                                    <th>Alamat Sekolah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $no = 1;
                                @endphp
                                @forelse ($items as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->nama_sekolah }}</td>
                                    <td>{{ $item->alamat_sekolah }}</td>
                                    <td>
                                        <a href="{{ route('sekolah.edit', $item->id) }}" title="Edit"
                                            class="btn btn-warning btn-sm"><i class="mdi mdi-square-edit-outline"></i>
                                        </a>

                                        <form class="d-inline" action="{{ route('sekolah.destroy', $item->id) }}"
                                            method="POST" onsubmit="return confirm('Apakah Anda Yakin?')">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" title="Hapus" class="btn btn-danger btn-sm"><i
                                                    class="mdi mdi-trash-can"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center">Tidak Ada Data</td>
                                </tr>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
    <!--end row-->


</div><!-- container -->
@endsection

@push('add-plugins-css')
<link href="{{ asset('admin/plugins/datatables/datatable.css') }}" rel="stylesheet" type="text/css" />
@endpush

@push('add-plugins-js')
<script src="{{ asset('admin/plugins/datatables/simple-datatables.js') }}"></script>
@endpush

@push('add-js')
<script>
    const dataTable = new simpleDatatables.DataTable("#table-datatables", {
        searchable: true,
        fixedHeight: false,
    })
</script>
@endpush
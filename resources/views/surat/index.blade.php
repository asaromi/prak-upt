{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Surat')

@section('content_header')
<h1>Surat</h1>
@stop

@section('content')
<div class="row col-12">
    <div class="card col-md-12">
        <div class="card-header ">
            <div class="navbar" id="card-header">
                <h3 class="card-title align-middle">Daftar Surat</h3>
                <div class="navbar d-flex card-tools">
                    <a class="btn btn-sm btn-outline-secondary bd-highlight" href="{{ route('surat.create') }}"><i class="fas fa-plus"></i> Tambah</a>
                </div>
            </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12 col-md-6"></div>
                    <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <table id="example2" class="table table-bordered table-hover dataTable" role="grid"
                            aria-describedby="example2_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1"
                                        colspan="1" aria-sort="ascending"
                                        aria-label="Rendering engine: activate to sort column descending">Pengaju</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Nomor</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Mengajukan</th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Keterangan
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Status
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">Diambil
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($surat as $s)
                            <tr>
                                <td>{{ $s->users->name }}</td>
                                <td class="text-center">{{ $s->id }}</td>
                                <td class="text-center">{{ $s->created_at }}</td>
                                <td>{{ $s->keterangan }}</td>
                                <td class="text-center">
                                    @if ($s->status === 1)
                                    <span class="badge badge-success">Selesai</span>
                                    @elseif($s->status === 2)
                                    <span class="badge badge-danger">Gagal</span>
                                    @else
                                    <span class="badge badge-info">Proses</span>
                                    @endif
                                </td>
                                @if ($s->tgl_ambil)
                                <td class="text-center">{{ $s->tgl_ambil }}</td>
                                @else
                                <td class="text-center"> - </td>    
                                @endif
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 1
                            of 1 entries</div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                            <ul class="pagination">
                                <li class="paginate_button page-item previous disabled" id="example2_previous"><a
                                        href="#" aria-controls="example2" data-dt-idx="0" tabindex="0"
                                        class="page-link">Previous</a></li>
                                <li class="paginate_button page-item active"><a href="#" aria-controls="example2"
                                        data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                <li class="paginate_button page-item next" id="example2_next"><a href="#"
                                        aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop
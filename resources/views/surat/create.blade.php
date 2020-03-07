{{-- resources/views/admin/dashboard.blade.php --}}

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Surat</h1>
@stop

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Ajukan Surat') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('surat.store') }}">
                    @csrf

                    <input hidden type="number" name="user" value="{{ $user->id }}">
                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-6">
                            <input value="{{$user->name}}" id="name" type="text" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="angkatan" class="col-md-4 col-form-label text-md-right">{{ __('Angkatan') }}</label>

                        <div class="col-md-6">
                            <input value="{{ $user->angkatan }}" id="angkatan" type="number" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="departemen" class="col-md-4 col-form-label text-md-right">{{ __('Program Studi') }}</label>

                        <div class="col-md-6">
                            <input value="{{ $user->dept->name }}" id="departemen" type="text" class="form-control" disabled>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="tahun" class="col-md-4 col-form-label text-md-right">{{ __('Semester') }}</label>

                        <div class="col-md-3">
                            <input type="text" id="tahun" class="form-control  @error('tahun') is-invalid @enderror" name="tahun" required autocomplete="tahun">

                            @error('tahun')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-md-3">
                            <select name="semester" class="form-control" id="semester">
                                <option value="">Pilih Semester</option>
                                <option value="A">Ganjil</option>
                                <option value="B">Genap</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="keterangan" class="col-md-4 col-form-label text-md-right">{{ __('Keterangan') }}</label>

                        <div class="col-md-6">
                            <input type="text" id="keterangan" class="form-control  @error('keterangan') is-invalid @enderror" name="keterangan" required autocomplete="keterangan">

                            @error('keterangan')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Ajukan') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop


@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
@stop
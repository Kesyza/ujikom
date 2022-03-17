@extends('adminlte::page')

@section('title', 'Data Materi | Tambah')

@section('content_header')

<center><h3>TAMBAH DATA MATERI</h3></center>

@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>DATA MATERI</h5></div>
                <div class="card-body">
                    <form action="{{route('video.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Masukan Judul</label>
                            <input type="text" name="judul" class="form-control @error('judul') is-invalid @enderror">
                            @error('judul')
                                <span class="invalid-feedback" role="alert"></span>
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Keterangan</label>
                            <textarea type="text" name="ket" class="form-control @error('ket') is-invalid @enderror"></textarea>
                            @error('ket')
                                <span class="invalid-feedback" role="alert"></span>
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Video</label>
                            <input type="text" name="materi" class="form-control @error('materi') is-invalid @enderror">
                            @error('materi')
                                <span class="invalid-feedback" role="alert"></span>
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="reset" class="btn btn-outline-warning">Reset</button>
                            <button type="submit" class="btn btn-outline-info">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')

@stop

@section('js')

@stop
@extends('adminlte::page')

@section('title', 'Data Ujian | Tambah')

@section('content_header')

<center><h3>TAMBAH DATA UJIAN</h3></center>

@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>DATA UJIAN</h5></div>
                <div class="card-body">
                    <form action="{{route('ujian.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Masukan Nama Soal</label>
                              <select name="soal_id" class="form-control @error('soal_id') is-invalid @enderror">
                                  @foreach($soall as $data)
                                      <option value="{{$data->id}}">{{$data->nama_soal}}</option>
                                  @endforeach
                              </select>
                              @error('soal_id')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Durasi</label>
                            <input type="number" name="waktu" class="form-control @error('waktu') is-invalid @enderror">
                            @error('waktu')
                                <span class="invalid-feedback" role="alert"></span>
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Jumlah Soal</label>
                            <input type="number" name="jumlah_soal" class="form-control @error('jumlah_soal') is-invalid @enderror">
                            @error('jumlah_soal')
                                <span class="invalid-feedback" role="alert"></span>
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Nilai</label>
                            <input type="number" name="nilai" class="form-control @error('nilai') is-invalid @enderror">
                            @error('nilai')
                                <span class="invalid-feedback" role="alert"></span>
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Status</label>
                            <input type="text" name="status" class="form-control @error('status') is-invalid @enderror">
                            @error('status')
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
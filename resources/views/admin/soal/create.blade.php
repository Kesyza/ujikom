@extends('adminlte::page')

@section('title', 'Data Soal | Tambah')

@section('content_header')

<center><h3>TAMBAH DATA SOAL</h3></center>

@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>DATA SOAL</h5></div>
                <div class="card-body">
                    <form action="{{route('soal.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Masukan Mata Pelajaran</label>
                              <select name="nama_mapel_id" class="form-control @error('nama_mapel_id') is-invalid @enderror">
                                  @foreach($mapel as $data)
                                      <option value="{{$data->id}}">{{$data->nama_mapel}}</option>
                                  @endforeach
                              </select>
                              @error('nama_mapel_id')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>
                        <div class="form-group">
                            <label>Masukan Paket Soal</label>
                              <select name="pilih_paket_id" class="form-control @error('pilih_paket_id') is-invalid @enderror">
                                  @foreach($paket as $data)
                                      <option value="{{$data->id}}">{{$data->pilih_paket}}</option>
                                  @endforeach
                              </select>
                              @error('pilih_paket_id')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Soal</label>
                            <textarea type="text" name="soal" class="form-control @error('soal') is-invalid @enderror"></textarea>
                            @error('soal')
                                <span class="invalid-feedback" role="alert"></span>
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Opsi A</label>
                                    <input type="text" name="opsi_A" class="form-control @error('opsi_A') is-invalid @enderror">
                                    @error('opsi_A')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Opsi B</label>
                                    <input type="text" name="opsi_B" class="form-control @error('opsi_B') is-invalid @enderror">
                                    @error('opsi_B')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Opsi C</label>
                                    <input type="text" name="opsi_C" class="form-control @error('opsi_C') is-invalid @enderror">
                                    @error('opsi_C')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Opsi D</label>
                                    <input type="text" name="opsi_D" class="form-control @error('opsi_D') is-invalid @enderror">
                                    @error('opsi_D')
                                        <span class="invalid-feedback" role="alert"></span>
                                        <strong>{{ $message }}</strong>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Jawaban</label>
                            <input type="text" name="jawaban" class="form-control @error('jawaban') is-invalid @enderror">
                            @error('jawaban')
                                <span class="invalid-feedback" role="alert"></span>
                                <strong>{{ $message }}</strong>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Masukan Keterangan</label>
                            <textarea type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror"></textarea>
                            @error('keterangan')
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
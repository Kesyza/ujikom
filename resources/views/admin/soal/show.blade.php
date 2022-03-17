@extends('adminlte::page')

@section('title', 'Data Soal | Detail')

@section('content_header')

<center><h3>DETAIL DATA SOAL</h3></center>

@stop

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h5>DATA SOAL</h5></div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Mata Pelajaran</label>
                                <input type="text" name="nama_mapel_id" value="{{$soall->mapel->nama_mapel}}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Paket Soal</label>
                                <input type="text" name="pilih_paket_id" value="{{$soall->paket->pilih_paket}}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Nama Soal</label>
                                <input type="text" name="nama_soal" value="{{$soall->nama_soal}}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Soal</label>
                                <input type="text" name="soal" value="{{$soall->soal}}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Opsi A</label>
                                <input type="text" name="opsi_A" value="{{$soall->opsi_A}}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Opsi B</label>
                                <input type="text" name="opsi_B" value="{{$soall->opsi_B}}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Opsi C</label>
                                <input type="text" name="opsi_C" value="{{$soall->opsi_C}}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Opsi D</label>
                                <input type="text" name="opsi_D" value="{{$soall->opsi_D}}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="">Jawaban</label>
                                <input type="text" name="jawaban" value="{{$soall->jawaban}}" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <input type="text" name="keterangan" value="{{$soall->keterangan}}" class="form-control" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <a href="{{url('/admin/soal')}}" class="btn btn-block btn-outline-primary">Kembali</a>
                    </div>
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
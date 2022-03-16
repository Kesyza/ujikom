@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<br>
<center><h1 >SELAMAT DATANG DI HALAMAN ADMIN</h1></center>
<br>

@stop

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
          <div class="inner">
                <sup style="font-size: 20px"></sup>
            <b>Data Mata Pelajaran</b>
            <h1>{{ DB::table('mata_pelajarans')->count() }}</h1>
            <div class="icon">
                <i class="fas fa-book fa-2x text-gray-300"></i>
              </div>
          </div>
          <a href="admin/mapel" class="small-box-footer">Selengkapnya...<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
          <div class="inner">
                <sup style="font-size: 20px"></sup>
            <b>Data Paket Soal</b>
            <h1>{{ DB::table('paket_soals')->count() }}</h1>
            <div class="icon">
                <i class="fas fa-box fa-2x text-gray-300"></i>
              </div>
          </div>
          <a href="admin/paket" class="small-box-footer">Selengkapnya...<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-primary">
          <div class="inner">
                <sup style="font-size: 20px"></sup>
            <b>Data Soal</b>
            <h1>{{ DB::table('soals')->count() }}</h1>
            <div class="icon">
                <i class="fas fa-file fa-2x text-gray-300"></i>
              </div>
          </div>
          <a href="admin/soal" class="small-box-footer">Selengkapnya...<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-6">
        <div class="small-box bg-gradient-success">
          <div class="inner">
                <sup style="font-size: 20px"></sup>
            <b>Data Ujian</b>
            <h1>{{ DB::table('ujians')->count() }}</h1>
            <div class="icon">
                <i class="fas fa-pen fa-2x text-gray-300"></i>
              </div>
          </div>
          <a href="admin/ujian" class="small-box-footer">Selengkapnya...<i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
    </div>
</div>

@stop

@section('css')

@stop

@section('js')

@stop
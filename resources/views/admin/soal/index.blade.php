@extends('adminlte::page')

@section('title', 'Data Soal')

@section('content_header')

<center><h3>MANAJEMEN DATA SOAL</h3></center>

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>DATA SOAL
                    <a href="{{route('soal.create')}}" class="btn btn-sm btn-outline-primary float-right" data-toggle="tooltip" title="Tambah Soal"><i class="fas fa-plus"></i></a>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="soall" class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Mata Pelajaran</th>
                                <th class="text-center">Paket Soal</th>
                                <th class="text-center">Soal</th>
                                <th class="text-center">A</th>
                                <th class="text-center">B</th>
                                <th class="text-center">C</th>
                                <th class="text-center">D</th>
                                <th class="text-center">Jawaban</th>
                                <th class="text-center">Keterangan</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no=1;
                            @endphp
                                @foreach ($soall as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->mapel->nama_mapel}}</td>
                                    <td>{{$data->paket->pilih_paket}}</td>
                                    <td>{{$data->soal}}</td>
                                    <td>{{$data->opsi_A}}</td>
                                    <td>{{$data->opsi_B}}</td>
                                    <td>{{$data->opsi_C}}</td>
                                    <td>{{$data->opsi_D}}</td>
                                    <td>{{$data->jawaban}}</td>
                                    <td>{{$data->keterangan}}</td>
                                    <td>
                                        <form action="{{route('soal.destroy',$data->id)}}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger delete-confirm" data-toggle="tooltip" title="Hapus"><i class="fas fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('css')

<link rel="stylesheet" href="{{ asset('dataTables/datatables.min.css') }}">

@endsection

@section('js')

    <script src="{{ asset('dataTables/datatables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#soall').DataTable();
        });
    </script>

@endsection
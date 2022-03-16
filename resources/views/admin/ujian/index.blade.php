@extends('adminlte::page')

@section('title', 'Data Ujian')

@section('content_header')

<center><h3>MANAJEMEN DATA UJIAN</h3></center>

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>DATA UJIAN
                    <a href="{{route('ujian.create')}}" class="btn btn-sm btn-outline-primary float-right" data-toggle="tooltip" title="Tambah Ujian"><i class="fas fa-plus"></i></a>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="ujian" class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Soal</th>
                                <th class="text-center">Durasi</th>
                                <th class="text-center">Jumlah Soal</th>
                                <th class="text-center">Nilai</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no=1;
                            @endphp
                                @foreach ($ujian as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->soall->soal}}</td>
                                    <td>{{$data->waktu}}</td>
                                    <td>{{$data->jumlah_soal}}</td>
                                    <td>{{$data->nilai}}</td>
                                    <td>{{$data->status}}</td>
                                    <td>
                                        <form action="{{route('ujian.destroy',$data->id)}}" method="post">
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
            $('#ujian').DataTable();
        });
    </script>

@endsection
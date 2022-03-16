@extends('adminlte::page')

@section('title', 'Data Paket Soal')

@section('content_header')

<center><h3>MANAJEMEN DATA PAKET SOAL</h3></center>

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>DATA PAKET SOAL
                    <a href="{{route('paket.create')}}" class="btn btn-sm btn-outline-primary float-right" data-toggle="tooltip" title="Tambah Paket Soal"><i class="fas fa-plus"></i></a>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="paket" class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Paket Soal</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no=1;
                            @endphp
                                @foreach ($paket as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->pilih_paket}}</td>
                                    <td>
                                        <form action="{{route('paket.destroy',$data->id)}}" method="post">
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
            $('#paket').DataTable();
        });
    </script>

@endsection
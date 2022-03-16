@extends('adminlte::page')

@section('title', 'Data Mata Pelajaran')

@section('content_header')

<center><h3>MANAJEMEN DATA MATA PELAJARAN</h3></center>

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>DATA MATA PELAJARAN
                    <a href="{{route('mapel.create')}}" class="btn btn-sm btn-outline-primary float-right" data-toggle="tooltip" title="Tambah Mata Pelajaran"><i class="fas fa-plus"></i></a>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="mapel" class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Mata Pelajaran</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no=1;
                            @endphp
                                @foreach ($mapel as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->nama_mapel}}</td>
                                    <td>
                                        <form action="{{route('mapel.destroy',$data->id)}}" method="post">
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
            $('#mapel').DataTable();
        });
    </script>

@endsection
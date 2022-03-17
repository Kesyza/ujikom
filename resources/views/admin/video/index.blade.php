@extends('adminlte::page')

@section('title', 'Data Materi')

@section('content_header')

<center><h3>MANAJEMEN DATA MATERI</h3></center>

@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>DATA MATERI
                    <a href="{{route('video.create')}}" class="btn btn-sm btn-outline-primary float-right" data-toggle="tooltip" title="Tambah Materi"><i class="fas fa-plus"></i></a>
                    </h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="videoo" class="table table-bordered table-striped table-hover">
                            <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Judul</th>
                                <th class="text-center">Keterangan</th>
                                <th class="text-center">Video</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php
                                $no=1;
                            @endphp
                                @foreach ($videoo as $data)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$data->judul}}</td>
                                    <td>{{$data->ket}}</td>
                                    <td>{{$data->video}}</td>
                                    <td>
                                        <form action="{{route('video.destroy',$data->id)}}" method="post">
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
            $('#videoo').DataTable();
        });
    </script>

@endsection
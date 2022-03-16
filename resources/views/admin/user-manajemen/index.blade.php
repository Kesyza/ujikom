@extends('adminlte::page')

@section('title', 'Data Mata Pelajaran')

@section('content_header')

<center><h3>USER MANAJEMEN</h3></center>

@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5>USER MANAJEMEN</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                    <table id="user" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Email</th>
                                <th class="text-center">Role</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no=1 @endphp
                            <!-- data -->
                            @foreach ($user as $data)
                            @if ($loop->first)
                                <tr>
                                <td class="text-center">{{$no++}}</td>
                                <td class="">{{$data->name}}</td>
                                <td class="">{{$data->email}}</td>

                                @foreach ($data->roles as $role)
                                    <td>{{$role->name}}</td>
                                @endforeach
                                <td class="text-center">
                                    <form class="text-center" action="{{route('user-manajemen.destroy',$data->id)}}" method="post">
                                        @method('delete')
                                        @csrf
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin menghapus')"><span class="fa fa-trash"></span></button>
                                    </form>
                                </td>
                            </tr>
                            @endif
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
            $('#user').DataTable();
        });
    </script>

@endsection
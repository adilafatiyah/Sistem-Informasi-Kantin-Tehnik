@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
            <div class="card-body table-responsive p-0">
                
                        <a class="btn btn-block btn-primary" href="/tambah_kedai">Tambah Kedai</a>
                
                <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kedai</th>
                                <th>Pilihan</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($data_kedai as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->nama}}</td>
                            <td>
                                <a type="button" href="{{url('/edit_kedai', $data->id) }}" class="btn btn-warning">Ubah Data</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</section>
</div>
@endsection










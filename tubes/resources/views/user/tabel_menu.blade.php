@extends('layouts.pengguna')
@section('content')
<div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                                    <div class="card-body table-responsive p-0">
                                        
                                                <a class="btn btn-block btn-primary" href="/p_tambah_menu">Tambah Menu</a>
                                        
                                        <table class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Nama Menu</th>
                                                        <th>Harga Harga</th>
                                                        <th>Pilihan</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($data_menu as $data)
                                                <tr>
                                                    <td>{{$loop->iteration}}</td>
                                                    <td>{{$data->nama_menu}}</td>
                                                    <td>{{$data->harga_menu}}</td>
                                                    <td>
                                                        <a type="button" href="{{url('/p_edit', $data->id) }}" class="btn btn-warning">Ubah Menu</a>
                                                    </td>
                                                    <td>
                                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$loop->iteration}}">Hapus</button>
                                                    </td>
                                                    <div class="modal fade" id="exampleModal{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Perhatian</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                Apakah Anda Ingin Menghapus {{$data->nama_menu}}  ?
                                                                </div>
                                                                <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <a href="/p_hapus_menu/{{$data->id}} }}"><button type="button" class="btn btn-danger">Hapus</button></a>
                                                                
                                                                </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
            </div>
        </section>
</div>
@endsection










@extends('layouts.admin')
@section('content')
<!--TABEL-->
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
              <div class="card-body table-responsive p-0">
                  <table class="table table-hover">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Nama Kedai</th>
                              <th>Total Harga</th>
                          </tr>
                      </thead>
                      <tbody>
                      @foreach($data_transaksi as $data)
                      <tr>
                          <td>{{$loop->iteration}}</td>
                          <td>{{$data->nama}}</td>
                          <td>{{$data->total}}</td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
              </div>
        </div>
      </section>
</div>
@endsection






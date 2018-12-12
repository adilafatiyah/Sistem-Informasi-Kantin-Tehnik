@extends('layouts.pengguna')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
                      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                      <div class="card-body table-responsive p-0">
                          <div class="container">
                                  <div class="row">
                                      <div class="col-md-8">
                                              <div class="card card-primary">
                                                      <div class="card-header">
                                                        <h3 class="card-title">Menu</h3>
                                                      </div>
                                                      <!-- /.card-header -->
                                                      <!-- form start -->
                                                      <form role="form" action="{{url('p_save_update', $data->id)}}" method="POST" enctype="multipart/form-data">
                                                          <input type="hidden"  name="_token" value="{{csrf_token()}}" >
                                                        <div class="card-body">
                                                          <div class="form-group">
                                                            <label>Menu</label>
                                                            <input type="text" class="form-control" name="nama_menu" value="{{$data->nama_menu}}">
                                                          </div>
                                                          <div class="form-group">
                                                              <label>Harga</label>
                                                              <input type="number" class="form-control" name="harga_menu" value="{{$data->harga_menu}}">
                                                          </div>
                                                        </div>
                                                        <!-- /.card-body -->
                                        
                                                        <div class="card-footer">
                                                          <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                      </form>
                                              </div>
                                      </div>
                                  </div>
                          </div>
                      </div>
        </div>
    </section>
</div>

@endsection










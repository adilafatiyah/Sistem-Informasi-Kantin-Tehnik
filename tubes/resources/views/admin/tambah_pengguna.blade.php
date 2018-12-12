@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">

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
                                                <form role="form" action="{{url('save_pengguna')}}" method="POST" enctype="multipart/form-data">
                                                    <input type="hidden"  name="_token" value="{{csrf_token()}}" >
                                                  <div class="card-body">
                                                      <input type="hidden" class="form-control" name="acces" value="1">
                                                    <div class="form-group">
                                                      <label>Nama</label>
                                                      <input type="text" class="form-control" name="name" placeholder="Masukan nama">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email" placeholder="Masukan Email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" class="form-control" name="password" placeholder="Masukan Password">
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










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
                                                          <h3 class="card-title">Kedai</h3>
                                                        </div>
                                                        <!-- /.card-header -->
                                                        <!-- form start -->
                                                        <form role="form" action="{{url('save_kedai')}}" method="POST" enctype="multipart/form-data">
                                                            <input type="hidden"  name="_token" value="{{csrf_token()}}" >
                                                          <div class="card-body">
                                                            <div class="form-group">
                                                              <label>Menu</label>
                                                              <input type="text" class="form-control" name="nama" placeholder="Nama Kedai">
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










@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4>Tabel Menu</h4>
                <p>Data menu di kantin tehnik</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="/menu" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4>Tabel Transaksi</h4>
                <p>Data transaksi di kantin tehnik</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="/transaksi" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
            </div>
          </div>
        <!-- /.row -->
      </div>
      <div class="row">
        <div class="col-md-8">
                <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Kasir Tehnik</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{url('save_transaksi')}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden"  name="_token" value="{{csrf_token()}}" >
                          <div class="card-body">
                            <div class="form-group">
                              <label>Kedai</label>
                                  <select name="nama" class="form-control" required="true">
                                  <option selected value="" selected disabled hidden><--Pilih Kedai-></option>
                                    @foreach($nama as $data)
                                  <option value="{{$data->nama}}">{{$data->nama}}</option>
                                    @endforeach
                                  </select>
                            </div>
                          </div>
                          <div class="card-body">
                            <div class="form-group">
                              <label>Total Harga</label>
                              <input type="number" class="form-control" name="total" placeholder="Rp.">
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
    </section>

  </div>
  </div>
  @endsection
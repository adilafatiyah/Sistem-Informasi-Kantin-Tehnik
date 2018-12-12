@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
        <section class="col-lg-12 connectedSortable">
          <div class="card">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
              <h3 class="card-title">
                <i class="ion ion-clipboard mr-1"></i>
                Total Penjualan Toko
              </h3>
            </div>
            <div class="card-body" id="#satuk">
              <ul class="todo-list ui-sortable">
                <li>
                <div class="row">
                  <div class="col-3">
                    <span class="text">2</span>
                  </div>
                  <div class="col-7">
                    <span class="text">Nasi Padang</span>
                  </div>
                  <div class="col-2">
                    <span class="text">Rp. 12.000</span>
                  </div>
                </div>
                </li>

              <li>
                <div class="row">
                  <div class="col-3">
                    <span class="text">2</span>
                  </div>
                  <div class="col-7">
                    <span class="text">Nasi Padang</span>
                  </div>
                  <div class="col-2">
                    <span class="text">Rp. 12.000</span>
                  </div>
                </div>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
            <div class="card-footer clearfix">
              <span class="text"> Total</span>
              <button type="button" class="btn btn-info float-right">Rp. 12.000</button>
            </div>
          </div>
        </section>
        </div>
    </section>
</div>
@endsection
 
    
    
    
    
    
    
    
    
    
    
    
    
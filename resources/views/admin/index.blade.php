@extends('layouts.master')

@section('content')

    <!-- Content Header (Page header) -->
    <!-- /.content-header -->

    <!-- Main content -->
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <p><center>Jumlah Positif</center></p>
              <span style="font-size: 30px;" data-toggle="counter-up"><b><center>{{ $positif }}</center></b></span>
                <p><center>Orang</center></p>
              </div>
              <div class="icon">
                <i class="ion ion-person-stalker"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <p><center>Jumlah Sembuh</center></p>
                <span style="font-size: 30px;" data-toggle="counter-up"><b><center>{{ $sembuh }}</center></b></span>
                <p><center>Orang</center></p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-body"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <p><center>Jumlah Meninggal</center></p>
                <span style="font-size: 30px;" data-toggle="counter-up"><b><center>{{ $meninggal }}</center></b></span>
                <p><center>Orang</center></p>
              </div>
              <div class="icon">
                <i class="ion ion-ios-pulse-strong"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->



  @endsection
  @push('js')

<script>
    $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    });
  </script>
  @endpush

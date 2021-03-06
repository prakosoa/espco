@extends('layouts.back.index')
@section('css')
<link rel="stylesheet" href="{{asset('dist/css/skins/all-md-skins.min.css') }}">
@endsection
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>

  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
          <div class="inner">
            <h3>{{$countcheck}}</h3>
            <p>Pending Payment</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="{{url('/admin/hireadmin')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <h3>{{$count}}<sup style="font-size: 20px"></sup></h3>

            <p>Coach</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-contact"></i>
          </div>
          <a href="{{url('/admin/coachtable')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-aqua">
          <div class="inner">
            <h3>{{$countu}}</h3>

            <p>User</p>
          </div>
          <div class="icon">
            <i class="ion ion-ios-contact-outline"></i>
          </div>
          <a href="{{url('/admin/usertable')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <div class="col-lg-3 col-xs-6">
    </div>
    
      </section>


      
    </div>
    <!-- /.row (main row) -->

  </section>
  
  <!-- /.content -->
</div>


@endsection

@section('js')
<script src="{{ URL::asset('plugins/chartjs/Chart.min.js') }}"></script>

@endsection
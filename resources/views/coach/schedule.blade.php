@extends('layouts.back.index')
@section('css')

@endsection

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">


    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Schedules</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          @include('coach.calendar')
        </div>
        <div class="row">
          <br>
          <form action="{{ route('coach.createschedule')}}" method="POST">
              {{csrf_field()}}
              <input id="ordered-schedule" type="hidden" name="ordered_schedule"/>
              <input name="coach_id" type="hidden" value="{{Auth::user()->id}}"/>
              <input type="submit" class="btn btn-primary btn-lg btn-block" value="Done" />
          </form>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
@endsection

@section('js')

@endsection
@extends('layouts.back.index')
@section('css')
   
@endsection

@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- Main content -->
    <section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> INVOICE
            <i class="pull-right">Status : 
                                @if($check->status==1)
                                <span class="label label-warning">Pending</span>
                                @elseif($check->status==2)
                                <span class="label label-primary">Paid</span>
                                @elseif($check->status==3)
                                <span class="label label-success">Approved</span>
                                @elseif($check->status==4)
                                <span class="label label-success">Done</span>
                                @elseif($check->status==5)
                                <span class="label label-danger">Refund</span>
                                @elseif($check->status==6)
                                <span class="label label-danger">Canceled</span>
                                @endif</i>


          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      @php 
          $user = \App\User::join('order_schedules as os','users_id','users.id')->where('os.id',$check->order_schedules_id)->first();
          $coach = \App\User::join('schedules as sch','coach_id','users.id')->where('sch.order_schedules_id',$check->order_schedules_id)->first();
          $coach['name'];
      @endphp
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
        <b>Invoice : {{$check->invoice}}</b><br>
        <br>
        <b>Coach:</b> @if($coach != null){{$coach->name}}@else - @endif<br>
        <b>User:</b> @if($user!=''){{$user->name}}@endif<br>
        <b>Date:</b> {{$check->created_at->format('d F Y')}}
        <br>
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
       
        </div>
        <!-- /.col -->
      
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <!-- <th>Qty</th> -->
              <th>Coach</th>
              <th>Date Time</th>
              <!-- <th>Description</th> -->
              <th>Subtotal</th>
            </tr>
            </thead>
            <tbody>
            @php
                $totalFee = 0;
            @endphp

            @foreach($order->schedules as $schedule)
              <tr>
                <td>{{$schedule->coach->name}}</td>
                <td>{{Carbon\Carbon::parse($schedule->datetime)->format('d M Y - h:i A')}}</td>
                <td>Rp {{$schedule->coach->fee}},-</td>
              </tr>
              @php
                          $totalFee = $totalFee + $schedule->coach->fee;
                      @endphp
            @endforeach
          
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <!-- accepted payments column -->
        <div class="col-xs-6">
          <p class="lead">Payment Detail:</p>
          <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
           <b>Bank Name : </b> {{$check->bank_name}}
           </br>
           <b>Bank Number : </b> {{$check->bank_number}}
           </br>
           <b>Phone : </b> {{$check->phone}}
          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">

          <div class="table-responsive">
            <table class="table" >
              <tr>
              <br>
                <th>Total:</th>
                <td style="padding-left:30%;">  
                     Rp {{$totalFee}},-
                </td>
              </tr>
            </table>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <!-- <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a> -->
          <a class="btn btn-default" onclick='window.print()'><i class="fa fa-print"></i> Print</a>
        
        </div>
      </div>
    </section>
    <!-- /.content -->
    <div class="clearfix"></div>
  </div>
  <!-- /.content-wrapper -->


  @endsection

@section('js')

@endsection
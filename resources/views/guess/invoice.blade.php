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
            <i class="pull-right">Status : <span class="label label-primary">Paid</span></i>


          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
        <b>Invoice #007612</b><br>
        <br>
        <b>Coach:</b> Fear<br>
        <b>User:</b> Prakoso<br>
        <b>Date:</b> 2/10/2017
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
            <tr>
              <!-- <td>1</td> -->
              <td>Call of Duty</td>
              <td>455-981-221</td>
              <!-- <td>El snort testosterone trophy driving gloves handsome</td> -->
              <td>$64.50</td>
            </tr>
            <tr>
              <!-- <td>1</td> -->
              <td>Need for Speed IV</td>
              <td>247-925-726</td>
              <!-- <td>Wes Anderson umami biodiesel</td> -->
              <td>$50.00</td>
            </tr>
            <tr>
              <!-- <td>1</td> -->
              <td>Monsters DVD</td>
              <td>735-845-642</td>
              <!-- <td>Terry Richardson helvetica tousled street art master</td> -->
              <td>$10.70</td>
            </tr>
            <tr>
              <!-- <td>1</td> -->
              <td>Grown Ups Blue Ray</td>
              <td>422-568-642</td>
              <!-- <td>Tousled lomo letterpress</td> -->
              <td>$25.99</td>
            </tr>
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
           <b>Bank Name : </b> Prakoso
           </br>
           <b>Bank Number : </b> 1279921212
           </br>
           <b>Phone : </b> 082220121219
          </p>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <p class="lead">Amount Due 2/22/2014</p>

          <div class="table-responsive">
            <table class="table">
              <!-- <tr>
                <th style="width:50%">Subtotal:</th>
                <td>$250.30</td>
              </tr>
              <tr>
                <th>Tax (9.3%)</th>
                <td>$10.34</td>
              </tr>
              <tr>
                <th>Shipping:</th>
                <td>$5.80</td>
              </tr> -->
              <tr>
                <th>Total:</th>
                <td>$265.24</td>
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
          <a href="invoice-print.html" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Print</a>
          <!-- <button type="button" class="btn btn-success pull-right"><i class="fa fa-credit-card"></i> Submit Payment -->
          </button>
          <!-- <button type="button" class="btn btn-primary pull-right" style="margin-right: 5px;">
            <i class="fa fa-download"></i> Generate PDF
          </button> -->
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
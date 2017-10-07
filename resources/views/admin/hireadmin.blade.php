@extends('layouts.back.index')
@section('css')
    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('content')
    <div class="content-wrapper" >
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Hire List</h3>
                    <br>
                    <!-- <a href="{{"/"}}" > <button type="button" class="btn bg-olive margin"><i class="fa fa-plus" aria-hidden="true"></i> Add</button></a> -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Invoice</th>
                            <th>Bank number</th>
                            <th>User</th>
                            <th>Coach</th>
                            <th>Fee</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order as $resultorder)
                            @php 
                                $user = \App\User::join('order_schedules as os','users_id','users.id')->where('os.id',$resultorder->order_schedules_id)->first();
                                $coach = \App\User::join('schedules as sch','coach_id','users.id')->where('sch.order_schedules_id',$resultorder->order_schedules_id)->first();
                                $coach['name'];
                            @endphp

                            <tr>
                                <td><a href="{{url('/admin/invoice/'.$resultorder->invoice)}}">{{$resultorder->invoice}}</a></td>
                                <td>{{$resultorder->bank_number}}</td>
                                

                                <td>@if($user!=''){{$user->name}}@endif</td>
                                <td><a href"#" id="info" role="button" data-id="{{$coach->id}}" data-bank="{{$coach->bank}}" >@if($coach != null){{$coach->name}}@else - @endif</a></td>
                                <td>Rp {{$resultorder->total_fee}},-</td>
                                <td>
                                @if($resultorder->status==1)
                                <span class="label label-warning">Pending</span>
                                @elseif($resultorder->status==2)
                                <span class="label label-primary">Paid</span>
                                @elseif($resultorder->status==3)
                                <span class="label label-success">Approved</span>
                                @elseif($resultorder->status==4)
                                <span class="label label-success">Done</span>
                                @elseif($resultorder->status==5)
                                <span class="label label-danger">Refund</span>
                                @elseif($resultorder->status==6)
                                <span class="label label-danger">Canceled</span>
                                @endif
                                
                                </td>
                                <td style="vertical-align: top;">
                                
                                    <div class="btn-group">
                                        <button type="button" class="btn bg-maroon btn-xs dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-hand-o-up"></i>
                                            <span>Select Action</span>
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                                @if($resultorder->status==1)
                                                <button id="btn-conf" class="btn btn-primary btn-sm btn-block" data-id="{{$resultorder->id}}" data-invoice="{{$resultorder->invoice}}" ><i class="fa fa-money" aria-hidden="true"></i> Confirm Tf</button>
                                                @else
                                                <button class="btn btn-primary btn-sm btn-block" disabled><i class="fa fa-money" aria-hidden="true"></i> Confirm Tf</button>
                                                @endif

                                                 @if($resultorder->status<4)
                                                <button id="btn-ref" class="btn btn-danger btn-sm btn-block" data-id="{{$resultorder->id}}" data-invoice="{{$resultorder->invoice}}" ><i class="fa fa-times-circle" aria-hidden="true"></i> Refund</button>
                                                @else
                                                <button class="btn btn-danger btn-sm btn-block" disabled><i class="fa fa-times-circle" aria-hidden="true"></i> Refund</button>
                                                @endif

                                                @if($resultorder->status==1)
                                                <button id="btn-can" class="btn btn-warning btn-sm btn-block" data-id="{{$resultorder->id}}" data-invoice="{{$resultorder->invoice}}" ><i class="fa fa-times" aria-hidden="true"></i> Cancel</button>
                                                @else
                                                <button class="btn btn-warning btn-sm btn-block" disabled><i class="fa fa-times" aria-hidden="true"></i> Cancel </button>
                                                @endif

                                        </ul>
                                    </div>
                                    <!-- {{--<a href="{{"/notes/". $note->id. "/edit"}}" >--}} -->
                                    <!-- <a href="{{url('/admin/editcoach/'.$resultorder->id)}}" >   -->
                                  
                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>


 <!-- Modal confirm-->
 <div id="modal-conf" class="modal fade" role="dialog">
        <div class="modal-success">
        <div class="modal-dialog modal-sm">
            <!-- konten modal-->
            <div class="modal-content">
            <form method="post" action="{{url('/admin/confirm')}}">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="confirm-id">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Confirm?</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                <p>Confirm Transfer invoice <span id='confirm-invoice'></span>?</p>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal"> No</button>
                    <button type="submit" class="btn btn-outline">Yes</button>
                </div>
               
            </div>
            </form>
        </div>
        </div>
    </div>

<!-- modal refund -->

    <div id="modal-ref" class="modal fade" role="dialog">
        <div class="modal-danger">
        <div class="modal-dialog modal-sm">
            <!-- konten modal-->
            <div class="modal-content">
            <form method="post" action="{{url('/admin/refund')}}">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="refund-id">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Delete Order</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                <p>refund Transfer invoice <span id='refund-invoice'></span>?</p>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal"> No</button>
                    <button type="submit" class="btn btn-outline">Yes</button>
                </div>
               
            </div>
            </form>
        </div>
        </div>
    </div>

<!-- modal cancel-->

<div id="modal-can" class="modal fade" role="dialog">
        <div class="modal-danger">
        <div class="modal-dialog modal-sm">
            <!-- konten modal-->
            <div class="modal-content">
            <form method="post" action="{{url('/admin/cancel')}}">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="cancel-id">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Delete Order</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                <p>Cancel Transfer invoice <span id='Cancel-invoice'></span>?</p>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal"> No</button>
                    <button type="submit" class="btn btn-outline">Yes</button>
                </div>
               
            </div>
            </form>
        </div>
        </div>
    </div>


    <!-- modal info-->

<div id="modal-info" class="modal fade" role="dialog">
        <div class="modal-info">
        <div class="modal-dialog modal-md">
            <!-- konten modal-->
            <div class="modal-content">
            
                <input type="hidden" name="id" id="info-id">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Coach Info</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
               <b> <p>Bank Account Number :  <span id='bank-numb'></span></p></b>
                </div>
                <!-- footer modal -->
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-outline pull-left" data-dismiss="modal"> No</button>
                    <button type="submit" class="btn btn-outline">Yes</button> -->
                </div>
               
            </div>
         
        </div>
        </div>
    </div>

        </section>
    </div>

@endsection

@section('js')
    <!-- DataTables -->

    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $('#example1').DataTable();
//            $('#example2').DataTable({
//                "paging": true,
//                "lengthChange": false,
//                "searching": false,
//                "ordering": true,
//                "info": true,
//                "autoWidth": false
//            });
        });
        

        $(document).on('click', '#btn-conf', function(){
            $('#confirm-id').val($(this).data('id'));
            $('#confirm-invoice').text($(this).data('invoice'));
            
            $('#modal-conf').modal('show');
        });
        $(document).on('click', '#btn-ref', function(){
            $('#refund-id').val($(this).data('id'));
            $('#refund-invoice').text($(this).data('invoice'));
            
            $('#modal-ref').modal('show');
        });
        $(document).on('click', '#btn-can', function(){
            $('#cancel-id').val($(this).data('id'));
            $('#cancel-invoice').text($(this).data('invoice'));
            $('#modal-can').modal('show');
        });
        $(document).on('click', '#info', function(){
            $('#bank-id').val($(this).data('id'));
            $('#bank-numb').text($(this).data('bank'));
            $('#modal-info').modal('show');
        });
        

    </script>

@endsection
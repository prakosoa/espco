@extends('layouts.back.index')
@section('css')
    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('content')
    <div class="content-wrapper" >
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Hire</h3>
                    <br>
                    <!-- <a href="{{"/"}}" > <button type="button" class="btn bg-olive margin"><i class="fa fa-plus" aria-hidden="true"></i> Add</button></a> -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Invoice</th>
                            <th>User</th>
                            <th>User Email</th>
                            <th>Fee</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order as $resultorder)
                            <tr>
                            <?php 
                                $user = \App\User::join('order_schedules as os','users_id','users.id')->where('os.id',$resultorder->order_schedules_id)->first();
                                // $coach = \App\User::join('schedules as sch','coach_id','users.id')->where('sch.id',$resultorder->order_schedules_id)->first(); 
                                ?>
                                <td><a href="{{url('/coach/invoice/'.$resultorder->invoice)}}">{{$resultorder->invoice}}</a></td>
                                <td>@if($user!=''){{$user->name}}@endif</td>
                                <td>@if($user!=''){{$user->email}}@endif</a></td>
                                <td>{{$resultorder->total_fee}}</td>
                                <td>
                                @if($resultorder->status==1)
                                <span class="label label-warning">Pending</span>
                                @elseif($resultorder->status==2)
                                <span class="label label-primary">Paid</span>
                                @elseif($resultorder->status==3)
                                <span class="label bg-teal">Approved</span>
                                @elseif($resultorder->status==4)
                                <span class="label label-success">Done</span>
                                @elseif($resultorder->status==5)
                                <span class="label label-danger">Refund</span>
                                @elseif($resultorder->status==6)
                                <span class="label bg-maroon">Canceled</span>
                                @endif
                                </td>
                                <td>
                                <div class="btn-group">
                                        <button type="button" class="btn bg-maroon btn-xs dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-hand-o-up"></i>
                                            <span>Select Action</span>
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                                @if($resultorder->status==2)
                                                <button id="btn-app" class="btn btn-primary btn-sm btn-block" data-id="{{$resultorder->invoice}}" data-invoice="{{$resultorder->invoice}}" ><i class="fa fa-money" aria-hidden="true"></i> Approve</button>
                                                @else
                                                <button class="btn btn-primary btn-sm btn-block" disabled><i class="fa fa-money" aria-hidden="true"></i> Approve</button>
                                                @endif

                                                 @if($resultorder->status<3)
                                                <button id="btn-refuse" class="btn btn-danger btn-sm btn-block" data-id="{{$resultorder->invoice}}" data-invoice="{{$resultorder->invoice}}" ><i class="fa fa-times-circle" aria-hidden="true"></i> Refuse</button>
                                                @else
                                                <button class="btn btn-danger btn-sm btn-block" disabled><i class="fa fa-times-circle" aria-hidden="true"></i> Refuse</button>
                                                @endif

                                        </ul>
                                    </div>   
                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>

<!-- Modal approve-->
<div id="modal-app" class="modal fade" role="dialog">
        <div class="modal-success">
        <div class="modal-dialog modal-sm">
            <!-- konten modal-->
            <div class="modal-content">
            <form method="post" action="{{url('/coach/approve')}}">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="approve-id">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Approve?</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                <p>Approve Coaching <span id='approve-invoice'></span>?</p>
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
            <form method="post" action="{{url('/coach/refuse')}}">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="refuse-id">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Refuse</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                <p>Refuse Hiring <span id='refuse-invoice'></span>?</p>
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
        });
        $(document).on('click', '#btn-app', function(){
            $('#approve-id').val($(this).data('id'));
            $('#approve-invoice').text($(this).data('invoice'));
            $('#modal-app').modal('show');
        });

        $(document).on('click', '#btn-refuse', function(){
            $('#refuse-id').val($(this).data('id'));
            $('#refuse-invoice').text($(this).data('invoice'));
            $('#modal-ref').modal('show');
        });

    </script>

@endsection
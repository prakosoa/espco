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
                            <th>Coach</th>
                            <th>Email</th>
                            <th>Fee</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($order as $resultorder)

                            <tr>
                            <?php 
                                // $user = \App\User::join('order_schedules as os','users_id','users.id')->where('os.id',$resultorder->order_schedules_id)->first();
                                $coach = \App\User::join('schedules as sch','coach_id','users.id')->where('sch.order_schedules_id',$resultorder->order_schedules_id)->first();
                                $coach['name'];
                               ?>
                                <td><a href="{{url('/user/invoice/'.$resultorder->invoice)}}">{{$resultorder->invoice}}</a></td>
                                <td>@if($coach!=''){{$coach->name}}@else - @endif</td>
                                <td>@if($coach!=''){{$coach->email}}@else - @endif</td>
                                <td>{{$resultorder->total_fee}}</td>
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
                                <td>
                                    @if($resultorder->status==3)
                                    <button id="btn-done" class="btn btn-primary btn-sm" data-id="{{$resultorder->invoice}}" data-invoice="{{$resultorder->invoice}}" ><i class="fa fa-check" aria-hidden="true"></i> Done</button>
                                    @else
                                    <button class="btn btn-primary btn-sm " disabled><i class="fa fa-money" aria-hidden="true"></i> done</button>
                                    @endif
                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>

            <!-- modal done -->
 <!-- Modal confirm-->
 <div id="modal-done" class="modal fade" role="dialog">
        <div class="modal-success">
        <div class="modal-dialog modal-sm">
            <!-- konten modal-->
            <div class="modal-content">
            <form method="post" action="{{url('/user/done')}}">
                {{ csrf_field() }}
                <input type="hidden" name="id" id="done-id">
                <!-- heading modal -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"> Done?</h4>
                </div>
                <!-- body modal -->
                <div class="modal-body">
                <p>Done the coaching <span id='done-invoice'></span>?</p>
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
//            $('#example2').DataTable({
//                "paging": true,
//                "lengthChange": false,
//                "searching": false,
//                "ordering": true,
//                "info": true,
//                "autoWidth": false
//            });
        });
        $(document).on('click', '#btn-done', function(){
            $('#done-id').val($(this).data('id'));
            $('#done-invoice').text($(this).data('invoice'));

            $('#modal-done').modal('show');
        });

    </script>

@endsection
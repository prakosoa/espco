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
                            <th>Date time</th>
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
                                <td>{{$resultorder->id}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
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
                                @endif
                                </td>
                                <td>
                                    {{--<a href="{{"/notes/". $note->id. "/edit"}}" >--}}
                                    <!-- <a href="{{url('/admin/editcoach/'.$resultorder->id)}}" >   -->
                                    <button type="button" class="btn btn-primary btn-s" style="margin: -2px; color: blue;"><i class="fa fa-check" aria-hidden="true">Done</i></button>
                                    <!-- </a> -->
                                    <!-- <button id="btn-del" class="btn btn-primary btn-sm" style="margin: -1px; color: red;" data-id="{{$resultorder->id}}" data-nama="{{$resultorder->id}}"><i class="fa fa-trash" aria-hidden="true"></i></button> -->
                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            {{--modal--}}

            <div class="modal fade" id="modal-del">
                <div class="modal-warning">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <form method="post" action="{{url('/admin/coach/delete')}}" style=";">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" id="del-id">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Hapus user</h4>
                                </div>
                                <div class="modal-body">

                                    <p style="text-align: center;">Hapus user dengan nama <strong id="del-nama"></strong>?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-outline">Save changes</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>

            <!-- modal done -->

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
        $(document).on('click', '#btn-del', function(){
            $('#del-id').val($(this).data('id'));
            $('#del-nama').text($(this).data('nama'));
//            $('#ganti-nim').text($(this).data('nim'));
//            $('#ganti-nama').text($(this).data('nama'));
//            $('#ganti-judul').text($(this).data('judul'));
//            $('#ganti-dosen').text($(this).data('dosen'));

            $('#modal-del').modal('show');
        });

    </script>

@endsection
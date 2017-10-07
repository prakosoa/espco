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
                            <th>Date Time</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($schedules as $resultschedules)
                            <tr>
                                <td>{{$resultschedules->datetime}}</td> 
                                <td>
                                    <button id="btn-del" class="btn btn-danger btn-sm " data-id="{{$resultschedules->id}}" data-date="{{$resultschedules->datetime}}"  ><i class="fa fa-times-circle" aria-hidden="true"></i> Delete</button> 
                                </td>
                            </tr>
                        @endforeach

                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>



<!-- modal delete -->
<div class="modal fade" id="modal-del">
                <div class="modal-danger">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <form method="post" action="{{url('/coach/deleteschedules/delete')}}" style=";">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" id="del-id">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Deelete</h4>
                                </div>
                                <div class="modal-body">

                                <p>Delete <span id='del-date'></span>?</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-outline">Yes</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
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

    </script>
    <script>
      $(document).on('click', '#btn-del', function(){
            $('#del-id').val($(this).data('id'));
            $('#del-date').text($(this).data('datetime'));
            $('#modal-del').modal('show');
        });
    </script>


@endsection
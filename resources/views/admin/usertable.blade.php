@extends('layouts.back.index')
@section('css')
    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('content')
    <div class="content-wrapper" >
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">User</h3>
                    <br>
                    <a href="{{"adduser"}}" > <button type="button" class="btn bg-olive margin"><i class="fa fa-plus" aria-hidden="true"></i> Add</button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Steam</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($user as $resultuser)
                            <tr>
                                <td>{{$resultuser->name}}</td>
                                <td>{{$resultuser->email}}</td>
                                <td>{{$resultuser->phone}}}</td>
                                <td>{{$resultuser->steam}}</td>
                                <td>
                                    {{--<a href="{{"/notes/". $note->id. "/edit"}}" >--}}
                                    <a href="{{url('/admin/edituser/'.$resultuser->id)}}" >  <button type="button" class="btn btn-primary btn-s" style="margin: -1px; color: blue;"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                                    <button id="btn-del" class="btn btn-primary btn-sm" style="margin: -1px; color: red;" data-id="{{$resultuser->id}}" data-nama="{{$resultuser->name}}"><i class="fa fa-trash" aria-hidden="true"></i></button>

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
                            <form method="post" action="{{url('/admin/user/delete')}}" style=";">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" id="del-id">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Deelete</h4>
                                </div>
                                <div class="modal-body">

                                    <p style="text-align: center;">Delet <strong id="del-nama"></strong>?</p>
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
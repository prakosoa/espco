@extends('layouts.back.index')
@section('css')
    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('content')
    <div class="content-wrapper" >
        <section class="content">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Coach</h3>
                    <br>
                    <a href="{{"adduser"}}" > <button type="button" class="btn bg-olive margin"><i class="fa fa-plus" aria-hidden="true"></i> Add</button></a>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
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
                                <td>{{$resultuser->phone}}</td>
                                <td>{{$resultuser->steam}}</td>
                                <td>
                                    {{--<a href="{{"/notes/". $note->id. "/edit"}}" >--}}
                                    <a href="{{url('/admin/edituser/'.$resultuser->id)}}" >  <button type="button" class="btn btn-primary btn-xs" style="margin: -1px; color: blue;"><i class="fa fa-pencil" aria-hidden="true"></i></button></a>
                                    <a href=""> <button type="button" class="btn btn-primary btn-xs" style="margin: -1px; color: red;"><i class="fa fa-trash" aria-hidden="true"></i></button></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        {{--<tfoot>--}}
                        {{--<tr>--}}
                        {{--<th>id</th>--}}
                        {{--<th>Name</th>--}}
                        {{--<th>Email</th>--}}
                        {{--<th>Phone</th>--}}
                        {{--<th>Action</th>--}}
                        {{--</tr>--}}
                        {{--</tfoot>--}}
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </section>
    </div>

@endsection

@section('js')
    <!-- DataTables -->

    <script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
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
    </script>
@endsection
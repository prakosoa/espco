@extends('layouts.back.index')
@section('css')
    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap.css') }}">
@endsection

@section('content')
    <div class="content-wrapper" >
        <section class="content">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Coach</h3>
                <br>
                <a href="{{"adduser"}}" > <button type="button" class="btn bg-olive margin"><i class="fa fa-plus" aria-hidden="true"></i> Add</button></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped table-hover">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Nickname</th>
                        <th>Email</th>
                        <th>Fee</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($coach as $resultcoach)
                        <tr>
                            <td>{{$resultcoach->name}}</td>
                            <td>{{$resultcoach->nickname}}</td>
                            <td>{{$resultcoach->email}}</td>
                            <td>{{$resultcoach->fee}}</td>
                            <td>
                                <div class="btn-group">
                                        <button type="button" class="btn bg-maroon btn-xs dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-hand-o-up"></i>
                                            <span>Select Action</span>
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul class="dropdown-menu pull-right" role="menu">
                                        <a href="{{url('/admin/editcoach/'.$resultcoach->id)}}" >  <button type="button" class="btn btn-primary btn-sm btn-block" style="margin: -1px; color: green;"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</button></a>
                                        <button id="btn-detail" class="btn btn-primary btn-sm btn-block" style="margin: -1px; color: blue;" data-id="{{$resultcoach->id}}" data-name="{{$resultcoach->name}}" data-email="{{$resultcoach->email}}"data-nickname="{{$resultcoach->nickname}}" data-phone="{{$resultcoach->phone}}" data-steam="{{$resultcoach->steam}}" data-rank="{{$resultcoach->rank}}" data-game="{{$resultcoach->games_id}}" data-fee="{{$resultcoach->fee}}" data-bank="{{$resultcoach->bank}}" data-photo="{{URL::asset($resultcoach->photo)}}" data-rating="{{$resultcoach->rating}}"><i class="fa fa-info-circle" aria-hidden="true"></i> Detail</button>
                                        <button id="btn-del" class="btn btn-primary btn-sm btn-block" style="margin: -1px; color: red;" data-id="{{$resultcoach->id}}" data-nama="{{$resultcoach->name}}"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>

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
            {{--modal--}}

            <div class="modal fade" id="modal-del">
                <div class="modal-danger">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <form method="post" action="{{url('/admin/coach/delete')}}" style=";">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" id="del-id">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title">Delete user</h4>
                            </div>
                            <div class="modal-body">

                                <p style="text-align: center;">Delete <strong id="del-nama"></strong>?</p>
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

            <!-- Modal Detail -->
            <div class="modal fade" id="modal-detail">
                <div class="modal-info">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                                <input type="hidden" name="id" id="detail-id">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title"><span id='detail-name'></span></h4>
                            </div>
                            <div class="modal-body">
                            <b> <p></p></b><img class="profile-user-img img-responsive img-circle" id='detail-photo' style="height:100px; width:100px;">
                            <!-- <b> <p>Name :  <span id='detail-name'class="pull-right"></span></p></b> -->
                            <b> <p>Email :  <span id='detail-email' class="pull-right"></span></p></b>
                            <b> <p>Nickname :  <span id='detail-nickname' class="pull-right"></span></p></b>
                            <b> <p>Phone : <span id='detail-phone' class="pull-right"></span></p></b>
                            <!-- <b> <p>Steam : <a href="" id='detail-steam' class="pull-right">Go to steam</a></p></b> -->
                            <b> <p>Rank :   <span id='detail-rank' class="pull-right"></span></p></b>
                            <b> <p>Game :  <span id='detail-game' class="pull-right"></span></p></b>
                            <b> <p>Fee :  <span id='detail-fee' class="pull-right"></span></p></b>
                            <b> <p>Bank :  <span id='detail-bank' class="pull-right"></span></p></b>
                            <!-- <b> <p>Rating :  <span id='detail-rating' class="pull-right"></span></p></b> -->
                            </div>
                            <div class="modal-footer">
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
            </div>
            <!-- /end modal detail -->

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
        $(document).on('click', '#btn-del', function(){
            $('#del-id').val($(this).data('id'));
            $('#del-nama').text($(this).data('nama'));
            $('#modal-del').modal('show');
        });
        $(document).on('click', '#btn-detail', function(){
            $('#detail-id').val($(this).data('id'));
            $('#detail-name').text($(this).data('name'));
            $('#detail-email').text($(this).data('email'));
            $('#detail-nickname').text($(this).data('nickname'));
            $('#detail-phone').text($(this).data('phone'));
            $('#detail-steam').text($(this).data('steam'));
            $('#detail-rank').text($(this).data('rank'));
            $('#detail-game').text($(this).data('game'));
            $('#detail-fee').text($(this).data('fee'));
            $('#detail-bank').text($(this).data('bank'));
            // $('#detail-photo').text($(this).data('photo'));
            $('#detail-photo').attr('src', $(this).data('photo'));
            $('#detail-rating').text($(this).data('rating'));
            $('#modal-detail').modal('show');
        });

    </script>

@endsection
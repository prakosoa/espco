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
                                $coach_email = $coach['email'];
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
                                <span class="label bg-teal">Approved</span>
                                @elseif($resultorder->status==4)
                                <span class="label label-success">Done</span>
                                @elseif($resultorder->status==5)
                                <span class="label bg-orange">Refund</span>
                                @elseif($resultorder->status==6)
                                <span class="label label-danger">Canceled</span>
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
                                        @if($resultorder->status==3)
                                        <button id="btn-done" class="btn btn-primary btn-sm btn-block" data-id="{{$resultorder->invoice}}" data-invoice="{{$resultorder->invoice}}" ><i class="fa fa-check" aria-hidden="true"></i> Done</button>
                                        @else
                                        <button class="btn btn-primary btn-sm btn-block" disabled><i class="fa fa-money" aria-hidden="true"></i> done</button>
                                        @endif

                                        @if($resultorder->status==1)
                                        <button id="btn-upl" class="btn btn-danger btn-sm btn-block" data-id="{{$resultorder->invoice}}" data-invoice="{{$resultorder->invoice}}" ><i class="fa fa-commenting-o" aria-hidden="true"></i> Upload Reciept</button>
                                        @else
                                        <button class="btn btn-primary btn-sm btn-block " disabled><i class="fa fa-upload" aria-hidden="true"></i> Upload Reciept</button>
                                        @endif

                                        @if($resultorder->status==4 && $resultorder->comment == null)
                                        @php

                                        @endphp
                                        <button id="btn-feed" class="btn btn-danger btn-sm btn-block" data-id="{{$resultorder->invoice}}" data-invoice="{{$resultorder->invoice}}" data-email="{{$coach_email}}" ><i class="fa fa-commenting-o" aria-hidden="true"></i> Feedback</button>
                                        @else
                                        <button class="btn btn-primary btn-sm btn-block" disabled><i class="fa fa-commenting-o" aria-hidden="true"></i> Feedback</button>
                    
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

            <!-- modal done -->
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


<!-- Modal Upload -->
                <div id="modal-upl" class="modal fade" role="dialog">
                        <div class="modal-primary">
                        <div class="modal-dialog modal-md">
                            <!-- konten modal-->
                            <div class="modal-content">
                            <form method="post" action="{{url('/user/upload')}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" id="upl-id">
                                <!-- heading modal -->
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Upload Reciept</h4>
                                </div>
                                <!-- body modal -->
                                <div class="modal-body">
                                    <b> <p>Please Upload Reciept For <span id='upl-invoice'></span></p></b>
                                        <div class="form-group">
                                            <label for="inputExperience" class="col-sm-2 control-label">Photo</label>
                                            <div class="col-sm-8">
                                                <input type="text" readonly="" class="form-control" placeholder="Browse...">
                                                <input type="file" id="imgInp" name="image" require>
                                            </div>
                                            <div class="col-sm-2">
                                                <img  id="blah" alt="default" style="width:100px; height:100px;">
                                            </div>
                                        </div>
                                    </br>
                                </div>
                                <!-- footer modal -->
                                <div class="modal-footer">
                                   
                                    <button type="submit" class="btn btn-outline">Done</button>
                                </div>
                            
                            </div>
                            </form>
                        </div>
                        </div>
                    </div>

           <!-- modal feedback -->
           <div id="modal-feed" class="modal fade" role="dialog">
                        <div class="modal-default">
                        <div class="modal-dialog modal-md">
                            <!-- konten modal-->
                            <div class="modal-content">
                            <form method="post" action="{{url('/user/feedback')}}">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" id="feed-id">
                                <!-- heading modal -->
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"> Feedback</h4>
                                </div>
                                <!-- body modal -->
                                <div class="modal-body">
                                <input type="hidden" id="feed-email" name="email">
                                <div style="text-align: center;"><input class="star-rating" required name="rating"></div>
                                <textarea class="form-control" rows="3" placeholder="Comment" name="comment" required></textarea>
                                </div>
                                <!-- footer modal -->
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-outline pull-left" data-dismiss="modal"> No</button> -->
                                    <button type="submit" class="btn btn-outline">Submit</button>
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
        $(document).on('click', '#btn-done', function(){
            $('#done-id').val($(this).data('id'));
            $('#done-invoice').text($(this).data('invoice'));
            $('#modal-done').modal('show');
        });
        $(document).on('click', '#btn-upl', function(){
            $('#upl-id').val($(this).data('id'));
            $('#upl-invoice').text($(this).data('invoice'));
            $('#modal-upl').modal('show');
        });
        $(document).on('click', '#btn-feed', function(){
            $('#feed-id').val($(this).data('id'));
            $('#done-invoice').text($(this).data('invoice'));
            $('#feed-email').val($(this).data('email'));

            $('#modal-feed').modal('show');
        });
      
    </script>
  <script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#imgInp").change(function(){
        readURL(this);
    });

    $(document).on('ready', function(){
        $('.star-rating').rating({
            theme: 'krajee-uni',
            clearButton:'',
            stars: 5,
            showCaption: false,
        });
    });
</script>

@endsection
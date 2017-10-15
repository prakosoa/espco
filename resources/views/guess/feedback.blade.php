@extends('layouts.front.index')

@section('css')

@endsection

@section('header')
    <section class="herol">
        <section class="navigation2">
            @include('layouts.front.header')
        </section>
    </section>
@endsection
@section('content')
<div class="wrapper" style="margin: 200px 100px 0px 100px;">
        <section class="content">

    <div class="row">
        <div class="col-md-3">

            <!-- Profile Image -->
            <div class="box box-primary">
                <div class="box-body box-profile">
                    <img class="profile-user-img img-responsive img-circle" src="{{Asset($coach->photo)}}" alt="User profile picture" style="margin-left: 60px; height:150px; width:150px">
                    <h5  class="profile-username text-center"><input class="star-rating" value="{{$coach->rating}}"><h5>   
                    <h3 class="profile-username text-center"><b>{{$coach->nickname}}</b></h3>

                    <p class="text-muted text-center"><b>{{$coach->name}}</b></p>

                    <ul class="list-group list-group-unbordered">
                        <li class="list-group-item">
                            <b>Rank</b> <a class="pull-right">{{$coach->rank}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Steam</b> <a class="pull-right" href="http://{{$coach->steam}}">Go to steam</a>
                        </li>
                        <li class="list-group-item">
                            <b>Phone</b> <a class="pull-right">{{$coach->phone}}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Fee/hr</b> <a class="pull-right" >Rp {{$coach->fee}}</a>
                        </li>
                    </ul>

                    {{--<a href="#" class="btn btn-primary btn-raised btn-block"><b>Follow</b></a>--}}
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

            <!-- About Me Box -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">About Me</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <!-- <strong><i class="fa fa-trophy margin-r-5"></i> Achievment</strong> -->

                    <p class="text-muted">
                        {{$coach->about}}
                    </p>
                    <hr>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li ><a href="{{url('/profilecoach/'.$coach->id)}}" >Select Schedule</a></li>
                    <li class="active"><a href="#feedback" >Feedback</a></li>  
                </ul>
<br>
                @foreach($comment as $resultcomment)
                   <!-- Post -->
                   <br>
                   <div class="post clearfix" style="border-bottom : solid 1px #ddd; padding-left:50px;">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="{{Asset($resultcomment->photo)}}" alt="User Image" style="width:50px;">
                    <span>
                        <h10 class="description pull-right" style="font-size: 10px;padding-top:15px;padding-right:-50px;"><input class="star-rating" value="{{$resultcomment->rating}}"><h10>   
                        </span>
                        <span class="username">
                          <a href="#" style=" font-size:150%;">{{$resultcomment->name}}</a>
                        </span>
                         <span class="description pull-right" style="margin-right:-100px;";>{{$resultcomment->updated_at->format('d M Y - h:i A')}}</span>
                        
                  </div>
                  <!-- /.user-block -->
                  <p style="text-color: black; padding-left:70px;">
                  <b>  {{$resultcomment->comment}}</b>
                  </p>
                </div>
                <!-- /.post -->
            @endforeach
        </div>
    </div>
</section>
</div>
@endsection

@section('js')
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <!-- <script src="../../"></script> -->
    <!-- Bootstrap 3.3.6 -->
    <script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- <script src="../../"></script> -->
    <!-- Material Design -->
    <script src="{{ URL::asset('dist/js/material.min.js') }}"></script>
    <script src="{{ URL::asset('dist/js/ripples.min.js') }}"></script>

    <!-- <script src="../../"></script>
    <script src="../../"></script> -->
    <script>
        $.material.init();
    </script>
    <!-- SlimScroll -->
    <script src="{{ URL::asset('plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
    <!-- <script src="../../"></script> -->
    <!-- FastClick -->
    <script src="{{ URL::asset('plugins/fastclick/fastclick.js') }}"></script>
    <!-- <script src="../../"></script> -->
    <!-- AdminLTE App -->
    <script src="{{ URL::asset('dist/js/app.min.js') }}"></script>
    <!-- <script src="../../"></script> -->
    <!-- AdminLTE for demo purposes -->
    <script src="{{ URL::asset('dist/js/demo.js') }}"></script>
    <!-- <script src="../../"></script> -->
    <script>
        $(document).on('ready', function(){
            $('.star-rating').rating({
                theme: 'krajee-uni',
                clearButton:'',
                stars: 5,
                showCaption: false,
                readonly: true,
                size:'xs',
            });
        });
    </script>


@endsection
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
                    <img class="profile-user-img img-responsive img-circle" src="http://wiki.teamliquid.net/commons/images/thumb/3/3d/Fear_frankfurt_major_2015.jpg/600px-Fear_frankfurt_major_2015.jpg" alt="User profile picture" style="margin-left: 70px;" height="150" width="150">

                    <h3 class="profile-username text-center">{{$coach->nickname}}</h3>

                    <p class="text-muted text-center">{{$coach->name}}</p>

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
                    <strong><i class="fa fa-trophy margin-r-5"></i> Achievment</strong>

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
                    <li class="active"><a href="#activity" data-toggle="tab">Select Schedule</a></li>
                    {{--<li><a href="#timeline" data-toggle="tab">Timeline</a></li>--}}
                    {{--<li><a href="#settings" data-toggle="tab">Settings</a></li>--}}
                </ul>

                {{--calendar--}}

        @include('guess.calendar')
                <div class="row">
                    <br>
                    <a href="{{ url('/user/checkout')}}" class="col-md-4 col-md-offset-4"> <button type="button" class="btn btn-primary btn-lg btn-block" > Hire Now! </button></a>
                </div>
            </div>
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



@endsection
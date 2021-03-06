@extends('layouts.front.index')

@section('css')
<link href="{{ URL::asset('rating/css/star-rating.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="{{ URL::asset('rating/themes/krajee-uni/theme.css') }}" media="all" rel="stylesheet" type="text/css" />
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
                    <li class="active"><a href="#schedule" >Select Schedule</a></li>
                    <li ><a href="{{url('/feedback/'.$coach->id)}}" >Feedback</a></li>  
                </ul>

                {{--calendar--}}
                    <div class="tab-content">
                        <div class="active tab-pane" id="schedule">
                @include('guess.calendar')
                            <div class="row">
                                <br>
                                    <form action="{{ route('user.hirecoach')}}" method="POST">
                                    {{csrf_field()}}
                                    <input id="ordered-schedule" type="hidden" name="ordered_schedule"/>
                                    <input name="coach_id" type="hidden" value="{{$coach->id}}"/>
                                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Hire Now!" />
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane" id="feedback">
                        
                        </div>
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
    <script src="{{ URL::asset('rating/js/star-rating.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('rating/themes/krajee-uni/theme.js') }}"></script>
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
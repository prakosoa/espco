@extends('layouts.back.index')
@section('css')

@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User Profile
            </h1>
            {{--<ol class="breadcrumb">--}}
                {{--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
                {{--<li><a href="#">Examples</a></li>--}}
                {{--<li class="active">User profile</li>--}}
            {{--</ol>--}}
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="box box-primary">
                    <div class="box-body box-profile">
                        <img class="profile-user-img img-responsive img-circle" src="{{asset(Auth::user()->photo)}}" alt="User profile picture" style="width:100px; height:100px;">

                        <h3 class="profile-username text-center">{{ Auth::user()->nickname }}</h3>

                        <p class="text-muted text-center">{{ Auth::user()->name }}</p>

                        <ul class="list-group list-group-unbordered">
                            <li class="list-group-item">
                                <b>Email</b> <a class="pull-right">{{ Auth::user()->email }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Phone</b> <a class="pull-right">{{ Auth::user()->phone }}</a>
                            </li>
                            <li class="list-group-item">
                            <b>Steam</b> <a class="pull-right" href="http://{{Auth::user()->steam}}">Go to steam</a>
                            </li>
                            <li class="list-group-item">
                                <b>Rank</b> <a class="pull-right">{{ Auth::user()->rank }}</a>
                            </li>
                            <li class="list-group-item">
                                <b>Fee</b> <a class="pull-right">Rp {{ Auth::user()->fee }}</a>
                            </li>
                        </ul>


                    </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->

                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li><a href="/editpw" data-toggle="tab"><b style="font-color : white;">Password</b></a></li>
                        </ul>
                        <div class="tab-content">

                            <div id="settings">
                                <form class="form-horizontal" method="post" action="{{url('coach/editpwc/edit')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                    <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                                    <div class="container">
                                    <label for="inputName" class="control-label">New Password</label>
                                        <input type="password" style="width:70%;" class="form-control" placeholder="Password" id="password" name="password" required>
                                        
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    
                                    </div>
                                    <div class="form-group has-feedback">
                                    <div class="container">
                                    <label for="inputName" class="control-label">ReType Password</label>
                                        <input type="password" style="width:70%;" class="form-control col-md-4" placeholder="Retype password" id="password-confirm" name="password_confirmation">
                                        
                                    </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-danger">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.tab-pane -->
                        </div>
                        <!-- /.tab-content -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
@endsection

@section('js')
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
</script>
@endsection
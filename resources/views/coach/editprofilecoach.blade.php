@extends('layouts.back.index')
@section('css')

@endsection

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Coach Profile
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
                                <li>
                                <a href="{{url('/coach/editpwc')}}">
                                <button type="button" class="btn btn-block btn-info btn-lg">Edit Password</button>
                                </a>
                                </li>
                            </ul>


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

                <p class="text-muted">
                {{(Auth::user()->about)}}
                </p>
                </div>
                <!-- /.box-body -->
                </div>
                <!-- /.box -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li><a href="#settings" data-toggle="tab">Settings</a></li>
                        </ul>
                        <div class="tab-content">

                            <div id="settings">
                                <form class="form-horizontal" method="post" action="{{url('coach/editprofilecoach/edit')}}" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{Auth::user()->id}}">
                                    <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Name</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="Name" name="name" value="{{ Auth::user()->name }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" value="{{ Auth::user()->email}}">
                                        </div>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label for="inputName" class="col-sm-2 control-label">Password</label>

                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="inputName" placeholder="Password" name="password" value="">
                                        </div>
                                    </div> -->
                                    <div class="form-group">
                                        <label for="inputNickname" class="col-sm-2 control-label">Nickname</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputNickname" placeholder="Nickname" name="nickname" value="{{ Auth::user()->nickname }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPhone" class="col-sm-2 control-label">Phone</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputPhone" placeholder="Phone" name="phone" value="{{ Auth::user()->phone }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputSteam" class="col-sm-2 control-label">Steam</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="Steam Link" name="steam" value="{{ Auth::user()->steam }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputRank" class="col-sm-2 control-label">Rank</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="Rank" name="rank" value="{{ Auth::user()->rank }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputGame" class="col-sm-2 control-label">Game</label>

                                        <div class="col-sm-10">
                                            <select name ="games_id" class="form-control select2" style="width: 100%;" value="{{ Auth::user()->games_id}}" required>
                                                <option value="" selected="selected"  disabled="disabled"><b>Select Game</b></option>
                                                <option value="1">Dota2</option>
                                                <option value="2">CS:GO</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputFee" class="col-sm-2 control-label">Fee</label>

                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputName" placeholder="Fee" name="fee" value="{{ Auth::user()->fee }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputbank" class="col-sm-2 control-label">Bank</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputbank" placeholder="Bank" name="bank" value="{{ Auth::user()->bank }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label">About Me</label>

                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="inputExperience" placeholder="About Me" name="about" >{{ Auth::user()->about }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputExperience" class="col-sm-2 control-label">Photo</label>
                                        <div class="col-sm-8">
                                            <input type="text" readonly="" class="form-control" placeholder="Browse...">
                                            <input type="file" id="imgInp" name="image" require value="{{asset(Auth::user()->photo)}}">
                                        </div>
                                        <div class="col-sm-2">
                                            <img src="{{asset(Auth::user()->photo)}}" id="blah" alt="default" style="width:100px; height:100px;">
                                        </div>
                                    </div>

                                    <!-- <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div> -->
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
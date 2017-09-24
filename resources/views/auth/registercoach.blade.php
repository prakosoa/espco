@extends('auth.index')
@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="/" ><b style="color: #009688; text-shadow: 2px 2px 5px black; ">Esports Coach</b></a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="../../index.html" method="post">
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Full name">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="email" class="form-control" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Retype password">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Steam Link">
                <span class="fa fa-steam form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Nick">
                <span class="fa fa-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <select class="form-control select2" style="width: 100%;">
                    <option selected="selected"  disabled="disabled"><b>Select Game</b></option>
                    <option>Dota2</option>
                    <option>CS:GO</option>
                </select>
                <span class="fa fa-gamepad form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Phone Number">
                <span class="fa fa-phone form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="number" class="form-control" placeholder="Fee/hr">
                <span class=" form-control-feedback"><b>Rp</b></span>
            </div>




            <div class="row">
                <div class="col-xs-7">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> I agree to the <a href="#">terms</a>
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-5">
                    <button type="submit" class="btn btn-primary btn-raised btn-block">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        {{--<div class="social-auth-links text-center">--}}
            {{--<p>- OR -</p>--}}
            {{--<a href="#" class="btn btn-block btn-social btn-facebook"><i class="fa fa-facebook"></i> Sign up using--}}
                {{--Facebook</a>--}}
            {{--<a href="#" class="btn btn-block btn-social btn-google"><i class="fa fa-google-plus"></i> Sign up using--}}
                {{--Google+</a>--}}
        {{--</div>--}}

        <a href="{{url('login')}}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
</div>
@endsection
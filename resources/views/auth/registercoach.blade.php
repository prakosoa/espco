@extends('auth.index')
@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="/" ><b style="color: #009688; text-shadow: 2px 2px 5px black; ">Esports Coach</b></a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new membership</p>
        <form action="{{ url('/registerc/regist') }}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="level" value="2">
            <div class="form-group has-feedback {{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="text" class="form-control" id="name" name="name" placeholder="Full name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                    <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                <input type="email" class="form-control" placeholder="Email"  id="email" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif

                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" placeholder="Retype password" id="password-confirm" name="password_confirmation">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Steam Link" id="steam" name="steam" required>
                <span class="fa fa-steam form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Nick" id="nickname" name="nickname" required>
                <span class="fa fa-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <select class="form-control select2" name="game" style="width: 100%;" require>
                    <option value="" selected="selected"  disabled="disabled"><b>Select Game</b></option>
                    <option value="1" name="games_id" id="game">Dota2</option>
                    <option value="2" name="games_id" id="game">CS:GO</option>
                </select>
                <span class="fa fa-gamepad form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Rank" name="rank" required>
                <span class="fa fa-star form-control-feedback"><b></b></span>
            </div>
            <div class="form-group has-feedback">
                <input type="text" class="form-control" placeholder="Phone Number" name="phone" required>
                <span class="fa fa-phone form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input type="number" class="form-control" placeholder="Fee/hr" name="fee" required>
                <span class=" form-control-feedback"><b>Rp</b></span>
            </div>




            <div class="row">
            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}" style="margin:20px"></div>
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
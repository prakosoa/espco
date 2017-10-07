@extends('auth.index')

@section('content')
<div class="login-box">
    <div class="login-logo" >
        <a href="/" style="color: #009688; text-shadow: 2px 2px 5px black; ">Esports<b>Coach</b></a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form method="post" action="{{ route('login') }}">
        {{ csrf_field() }}
            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}" >
                <input type="email" class="form-control" id="email" name="email" placeholder="Email"  value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                <input type="password" class="form-control" id="password" name="password"  placeholder="Password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
            <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}" style="margin:20px"></div>
                <div class="col-xs-7">
                    <!-- <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </div> -->
                </div>
                <!-- /.col -->
                
                <div class="col-xs-5">
                    <button type="submit" class="btn btn-primary btn-raised btn-block btn-flat">Sign In</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <!-- /.social-auth-links -->

        {{--<a href="{{ route('password.request') }}">I forgot my password</a><br>--}}
        <a href="{{ url('registerc') }}">Apply Coach?</a><br>
        <a href="{{ url('register') }}" class="text-center">Register a new membership</a>

    </div>
    <!-- /.login-box-body -->
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection

@section('js')

@endsection

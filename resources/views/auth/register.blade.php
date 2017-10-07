@extends('auth.index')

@section('content')


<div class="register-box">
    <div class="register-logo">
        <a href="/" ><b style="color: #009688; text-shadow: 2px 2px 5px black; ">Esports Coach</b></a>
    </div>

<div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="{{ route('register') }}" method="POST">
    {{ csrf_field() }}
        <input type="hidden" name="level" value="3">
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
            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Retype password"  id="password-confirm" name="password_confirmation" required>

            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}" style="margin:20px"></div>
            <div class="col-xs-7">
                <!-- <div class="checkbox">
                    <label>
                        <input type="checkbox"> I agree to the <a href="#">terms</a>
                    </label>
                </div> -->
            </div>
          
            <!-- /.col -->
            <div class="col-xs-5">
                <button type="submit" class="btn btn-primary btn-raised btn-block">Register</button>
            </div>
            <!-- /.col -->
        </div>
    </form>
    <a href="{{('login')}}" class="text-center">I already have a membership</a>
</div>
</div>
<script src='https://www.google.com/recaptcha/api.js'></script>
@endsection
@section('js')

@endsection

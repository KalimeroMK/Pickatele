@extends('layouts.login')
@section('content')
    <!--Body-->
    <body>
    <div class="login-container animated fadeInDown">
        <div class="loginbox bg-white">
            <div class="logobox">
                {{-- <img src="/assets/img/wc-logo.png" alt="Worldcrunch" class="img-responsive" /> --}}
                <p>Pickatale Admin Panel </p>
            </div>
            <div class="loginbox-title">SIGN IN</div>
            <div class="loginbox-or">
                <div class="or-line"></div>
                <div class="or"><i class="fa fa-user-secret"></i></div>
            </div>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/admin/login') }}">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}} loginbox-textbox">
                    <input type="email" class="form-control" placeholder="Email" name="email"
                           value="{{ old('email') }}"/>
                    @if ($errors->has('email'))
                        <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} loginbox-textbox">
                    <input type="password" class="form-control" placeholder="Password" name="password"/>
                    @if ($errors->has('password'))
                        <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                    @endif
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-1 col-xs-offset-1 col-sm-offset-1">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember">
                                <span class="text">Remember me</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="loginbox-forgot">
                    <a href="{{ url('/admin/password/reset') }}">Forgot Password?</a>
                </div>
                <div class="loginbox-submit">
                    <button class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </div>

    </div>
@endsection
@extends('layouts.app')
@section('title','Register & Wash Now')
@section('content')
    <div class="be-wrapper be-login be-signup">
        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="splash-container sign-up">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading">
                            <a href="{{ url('/') }}"><img src="dashboard/img/logo-xx.png" alt="logo" width="102" height="100" class="logo-img"></a>
                            <span class="splash-description">Please register on our platform to enjoy our services.</span>
                        </div>
                        <div class="panel-body">
                            <form action="{{ route('register') }}" method="POST"><span class="splash-title xs-pb-20">Sign Up</span>
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
                                    <input id="username" type="text" placeholder="Full Name" name="full_name" autocomplete="off" class="form-control">
                                    @if ($errors->has('full_name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('full_name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                                    <input id="username" type="text" placeholder="Username" name="username" autocomplete="off" class="form-control">
                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="username" type="email" placeholder="E-mail Address" name="email" autocomplete="off" class="form-control">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group row signup-password">
                                    <div class="col-xs-6 {{ $errors->has('mobile_number') ? ' has-error' : '' }}">
                                        <input name="mobile_number" placeholder="Mobile Number" class="form-control">
                                        @if ($errors->has('mobile_number'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('mobile_number') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="col-xs-6 {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input id="password" name="password" placeholder="Password" type="password" class="form-control">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <input type="hidden" name="status" value="2">
                                <div class="form-group xs-pt-10">
                                    <div class="be-checkbox">
                                        <input type="checkbox" id="remember">
                                        <label for="remember">By creating an account, you agree the <a href="#">terms and conditions</a>.</label>
                                    </div>
                                </div>
                                <div class="form-group xs-pt-10">
                                    <button type="submit" class="btn btn-block btn-primary btn-xl">Sign Up</button>
                                </div>
                            </form>
                            <div class="splash-footer"><span>Already have an account? <a href="{{ url('login') }}">Continue with us</a></span></div>
                        </div>
                    </div>
                    <div class="splash-footer">&copy; {{ config('app.name') }} {{ date('Y') }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="be-wrapper be-login">
        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="splash-container">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading">
                            <a href="{{ url('/') }}"><img src="{{ asset('dashboard/img/logo-xx.png') }}" alt="logo" width="102" height="27" class="logo-img"></a>
                            <span class="splash-description">Forgot your password? Let's help you</span>
                        </div>
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            <form action="{{ route('password.email') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <input id="username" type="email" placeholder="E-mail Address" name="email" autocomplete="off" class="form-control">
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group login-submit">
                                    <button data-dismiss="modal" type="submit" class="btn btn-primary btn-xl">Send Reset Email</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="splash-footer"><span>Have an account? <a href="{{ url('login') }}">Sign In</a></span></div>
                </div>
            </div>
        </div>
    </div>
@endsection

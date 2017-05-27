@extends('layouts.app')

@section('content')
    <div class="be-wrapper be-login be-signup">
        <div class="be-content">
            <div class="main-content container-fluid">
                <div class="splash-container sign-up">
                    <div class="panel panel-default panel-border-color panel-border-color-primary">
                        <div class="panel-heading">
                            <a href="{{ url('/') }}"><img src="dashboard/img/logo-xx.png" alt="logo" width="102" height="27" class="logo-img"></a>
                            <span class="splash-description">Please register on our platform to enjoy our services.</span>
                        </div>
                        <div class="panel-body">
                            <form action="" method="get"><span class="splash-title xs-pb-20">Sign Up</span>
                                <div class="form-group">
                                    <input type="text" name="username" required="" placeholder="Username" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" required="" placeholder="john@email.com" autocomplete="off" class="form-control">
                                </div>
                                <div class="form-group row signup-password">
                                    <div class="col-xs-6">
                                        <input required="" name="mobile_number" placeholder="Mobile Number" class="form-control">
                                    </div>
                                    <div class="col-xs-6">
                                        <input id="password" name="password" placeholder="Password" type="password" required="" class="form-control">
                                    </div>
                                </div>
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

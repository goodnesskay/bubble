<!-- Preloader -->
<div id="preloader">
    <div class="spinner"></div>
</div>
<!-- Page hero -->
<div class="" id="headers">
    <!--  Header -->
    <div class="header">
        <nav id="sticky-nav" class="navbar navbar-custom sticky navbar-center">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="" href="{{ url('/') }}">
                        <img src="assets/img/logo.png" alt="logo" class="img-responsive navbar-brand">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navigation-example">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="">Services</a>
                        </li>
                        <li>
                            <a href="">How it Works</a>
                        </li>
                        <li>
                            <a href="{{ url('login') }}" class="btn btn-info btn-md">
                                <i class="fa fa-user"></i> SIGN IN
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('register') }}" class="btn btn-default btn-md">
                                <i class="fa fa-cab"></i> WASH NOW
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        @yield('banner')
</div>

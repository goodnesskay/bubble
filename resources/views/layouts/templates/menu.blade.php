
<!-- Navigation Area
===================================== -->
<nav class="navbar navbar-pasific navbar-mp megamenu navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="{{ url('/') }}">
                <img src="{{ asset('assets/img/logo-tlb.png') }}" style="width:100px; margin-top:-26%" alt="logo">
            </a>
        </div>

        <div class="navbar-collapse collapse navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li ><a href="{{url('/')}}#how-it-works" class="color-light">How It Works</a>
                </li>
                <li ><a href="{{url('/')}}#services" class="color-light">Services</a>
                </li>
                <li><a href="{{url('faq')}}"  class="color-light">FAQ</a>
                </li>
                <li><a href="{{url('/')}}#contact" class="color-light">Contact</a>
                </li>
            </ul>
            <a class="button button-sm button-primary hover-ripple-out mt10 mr10" href="{{ url('login') }}">Sign In</a>
            <a class="button button-sm button-red hover-ripple-out mt10 mr10" href="{{ url('register') }}">Wash Now</a>
        </div>
    </div>
</nav>



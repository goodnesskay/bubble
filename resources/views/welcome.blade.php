@extends('layouts.master')


@section('banner')
    <header class="intro parallax-window" data-parallax="scroll" data-speed=".2" data-position-x="right" data-image-src="assets/img/bg/img-bg-14.jpg">
        <div class="intro-body">
            <div class="container-fluid">
                <div class="row">
                    {{--<img src="{{ asset('assets/img/app/img-app-1.png') }}" class="img-responsive pull-right" alt="">--}}
                    <div class="col-md-10 col-md-offset-1 text-left">
                        <h1 class="font-montserrat text-capitalize color-white mb25 animated" data-animation="fadeInUp" data-animation-delay="100">
                            Car Wash at your door step <br>
                            <em style="font-size: 18px">Quick. Convenient. Efficient. Safe. Cost Effective.</em>
                        </h1>
                        <p class="intro-text color-white animated" data-animation="fadeInUp" data-animation-delay="200">We can give your vehicle a brand
                            <br> new life with our service.</p>
                        <a href="{{ url("request-wash") }}" class="button button-pasific button-md hover-ripple-out animated" data-animation="fadeInUp" data-animation-delay="300">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
<div id="how-it-works" class="bg-transparent pt75">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="content-box content-box-center content-box-icon">
                    <i class="fa fa-edit bg-grad-purple"></i>
                    <h4>Request Wash</h4>
                    <p>It is easy. We just need you to request a wash.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="content-box content-box-center content-box-icon">
                    <i class="fa fa-cab bg-grad-orange"></i>
                    <h4>Awesome Washing</h4>
                    <p>It is our job. We do it professionally and to your greatest
                        satisfaction.</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="content-box content-box-center content-box-icon">
                    <i class="fa fa-life-bouy bg-grad-violet"></i>
                    <h4>Complete</h4>
                    <p>Hurray!!! The wash is complete. Your vehicle is back to shape
                        again.</p>
                </div>
            </div>

        </div>
    </div>
</div>

<div id="services" class="bg-gray pt75 pb50">
    <!-- Table Style 2 -->
    <div class="container">
        <div class="row">
            <h3 class="text-center mb50">
                Services We Offer
                <small>Be rest assured we offer the best of these</small>
            </h3>
        </div>
        <div class="row">

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="price price-two bg-light">
                    <div class="price-header">
                        <i class="fa fa-circle-o fa-3x color-green"></i>
                        <h4>Full Detailing</h4>
                    </div>
                    <div class="price-body">
                        This involves hand washing both the exterior and interior and also detailing
                        the exterior and interior.
                    </div>
                    <br>
                    <div class="price-footer">
                        <span style="font-size:24px;">N1500 - N2000</span><br>
                        <a href="{{ url('request-wash') }}" class="button-3d button-sm button-rounded button-green hover-ripple-out">Wash Now</a>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="price price-two bg-light active">
                    <div class="price-header">
                        <i class="fa fa-circle-o fa-3x"></i>
                        <h4>Hand Wash</h4>
                    </div>
                    <div class="price-body">
                        This involves the conventional hand washing of the exterior part of the vehicle with wash mitts and chemicals.
                        This service doesn’t involve working on the interior of the car, we don’t detail the exterior too.
                    </div>
                    <div class="price-footer">
                        <span style="font-size:24px;">N500 - N700</span><br>
                        <a href="{{ url('request-wash') }}" class="button-3d button-sm button-rounded button-dark hover-ripple-out">Wash Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="price price-two bg-light active">
                    <div class="price-header">
                        <i class="fa fa-circle-o fa-3x"></i>
                        <h4>Interior Wash</h4>
                    </div>
                    <div class="price-body">
                        This involves hand washing both
                        the exterior and interior of the vehicle. The interior is also detailed.
                    </div>
                    <br>
                    <div class="price-footer">
                        <span style="font-size:24px;">N700 - N1000</span><br>
                        <a href="{{ url('request-wash') }}" class="button-3d button-sm button-rounded button-dark hover-ripple-out">Wash Now</a>
                    </div>
                </div>
            </div>


            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="price price-two bg-light">
                    <div class="price-header">
                        <i class="fa fa-circle-o fa-3x color-red"></i>
                        <h4>Exterior Wash</h4>
                    </div>
                    <div class="price-body">
                        This involves hand washing both the exterior and interior. The interior and exterior are also detailed.
                    </div>
                    <br>
                    <div class="price-footer">
                        <span style="font-size:24px;">N800 - N1200</span><br>
                        <a href="{{ url('request-wash') }}" class="button-3d button-sm button-rounded button-red hover-ripple-out">Wash Now</a>
                    </div>
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-12 text-center mt35">
                <h4 class="color-dark font-open-sans">For other enquiries, please contact us:
                    <i class="fa fa-phone"></i> 08077620751
                </h4>
            </div>
        </div>

    </div>

</div>



<div id="apps" class="bg-grad-stellar pt75 pt75">
    <div class="container">
        <div class="row">
            <h3 class="text-center color-light mb50">
                About Us
                <small class="heading-desc color-light">
                    We are concerned about your vehicles care
                </small>
                <small class="heading heading-solid center-block"></small>
            </h3>
        </div>

        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 text-center mb50">
                <img src="{{ asset('assets/img/app/img-app-1.png') }}" class="img-responsive pull-right" alt="">
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12 text-center pt75">
                <p style="font-size:24px;line-height:40px" class="color-light">
                    The Luxury Bubbles is a mobile hand car wash serving the ancient town of Ile Ife.
                    At The Luxury Bubbles, we share the belief that washing a car is not
                    just an act but an experience, hence, we have created a system that is not just quick,
                    efficient and cost effective, but also convenient and safe.
                    The Luxury Bubbles offers her esteemed customers the luxury of
                    having their cars washed at their preferred location.
                    Our main goal is to provide the best washing experience to our customers.
                </p>

            </div>
        </div>

    </div>
</div>


<div class="pt50 pb40 bg-dark2">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="color-gray font-open-sans">
                    <small class="color-light">
                        Give your vehicle the best
                    </small>
                    A trial will convince you
                </h2>
                <p class="color-gray mt20">
                    The Luxury Bubbles is a mobile hand car wash serving her esteemed customers the luxury of
                    having their cars washed at their preferred location.
                </p>
            </div>
            <div class="col-md-4 mt50">
                <a href="{{ url('request-wash') }}" class="button-3d button-lg button-pasific hover-ripple-out pull-right animated" data-animation="zoomIn" data-animation-delay="100">Request Wash</a>
            </div>
        </div>
    </div>
</div>



@endsection
@extends('layouts.master')


@section('banner')
    <div id="home" class="page-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 home-text">
                    <h1 class="title">Let's do the trouble for you</h1>
                    <p class="up-type-title"> I am <span class="animated-text" id="animated-text"></span></p>
                    <p class="p-details">
                        We bring the car wash to anywhere you are. We give you the best than you imagine.
                    </p>
                    <div class="header-app-icons">
                        <ul>
                            <li><a href="#link" class="btn"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#link" class="btn"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#link" class="btn"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#link" class="btn"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <a href="{{ url('register') }}" class="btn btn-info btn-md btn-big">
                        <i class="fa fa-paper-plane-o"></i> Wash Now
                    </a>
                </div>
                <div class="col-md-5 text-center">
                    <img src="assets/img/header-img.png" alt="header image" class="header-img img-responsive">
                </div>
            </div>
            <div id="particles-js"></div>
        </div>
    </div>
    </div>
    <!-- End Header -->
@endsection

@section('content')
    <!-- About -->
    <section class="section" id="about">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="title">Luxury Bubbles</h2>
                <h5 class="description">We are awesome at making your vehicle brand new. get to know more about what we do.</h5>
            </div>
            <!-- first row -->
            <div class="row">
                <div class="col-md-12">
                        <div class="text-center">
                            <h4 class="info-title">Vehicles are our joy</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet nostrum voluptatum, facere saepe aut repudiandae dolor tempora nemo.
                            </p>
                            <a href="#up">More...</a>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End about -->
    <!-- services -->
    <section class="section services bg-gray" id="services">
        <div class="container">
            <div class="section-heading text-center wow fadeInUp">
                <h2 class="title text-center">How it Works</h2>
                <ul class="nav nav-pills nav-pills-primary">
                    <li class="active"><a href="#web-design" data-toggle="tab">Request</a></li>
                    <li><a href="#web-dev" data-toggle="tab">Wash</a></li>
                    <li><a href="#desktop" data-toggle="tab">Hurray!</a></li>
                </ul>
                <br>
            </div>
            <div>
                <div class="tab-content tab-space">
                    <!-- tab web-design -->
                    <div class="tab-pane active" id="web-design">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="img-container">
                                    <img src="assets/img/web-design.png" alt="image" style="width:50%;" class="center-block img-responsive" />
                                </div>
                                <div class="text-center">
                                    <h4 class="info-title">It is easy. We just need you to request for a wash.</h4>
                                    <a href="{{ url('register') }}" class="btn btn-primary">
                                        Wash Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end tab mobile -->
                    <!-- tab web-dev -->
                    <div class="tab-pane" id="web-dev">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="img-container">
                                    <img src="assets/img/web-design.png" alt="image" style="width:50%;" class="center-block img-responsive" />
                                </div>
                                <div class="text-center">
                                    <h4 class="info-title">It is our job. We do it professionally and to your greatest satisfaction.</h4>
                                    <a href="{{ url('register') }}" class="btn btn-primary">
                                        Wash Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end tab tablet -->
                    <!-- tab desktop -->
                    <div class="tab-pane" id="desktop">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="img-container">
                                    <img src="assets/img/web-design.png" alt="image" style="width:50%;" class="center-block img-responsive" />
                                </div>
                                <div class="text-center">
                                    <h4 class="info-title">Hurray!!! The wash is complete. Your vehicle is back to shape again.</h4>
                                    <a href="{{ url('register') }}" class="btn btn-primary">
                                        Wash Now
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end tab desktop -->
                </div>
            </div>
        </div>
        <!-- End container -->
    </section>
    <!-- End services -->
    <!-- Price table -->
    <div class="section price-table" id="price">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="title">Services We Offer</h2>
                <h5 class="description">Be rest assured we offer the best of these.</h5>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <div class="card card-pricing">
                        <div class="content">
                            <div class="header header-primary text-center">
                                <h3 class="widget-header-title">Full Detailing</h3>
                            </div>
                            <h1 class="card-title"><small>N</small>1000<small>/wash</small></h1>
                            <ul>
                                <li>Brief detailing of what it means</li>
                            </ul>
                            <a href="{{ url('register') }}" class="btn btn-primary">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-pricing ">
                        <div class="content content-primary">
                            <div class="header header-success text-center">
                                <h3 class="widget-header-title">Exterior Detailing</h3>
                            </div>
                            <h1 class="card-title"><small>N</small>1000<small>/wash</small></h1>
                            <ul>
                                <li>Brief detailing of what it means</li>
                            </ul>
                            <a href="{{ url('register') }}" class="btn btn-primary">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-pricing">
                        <div class="content">
                            <div class="header header-danger text-center">
                                <h3 class="widget-header-title">Interior Detailing</h3>
                            </div>
                            <h1 class="card-title"><small>N</small>1000<small>/wash</small></h1>
                            <ul>
                                <li>Brief detailing of what it means</li>
                            </ul>
                            <a href="{{ url('register') }}" class="btn btn-primary">
                                Get Started
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <div class="card card-pricing">
                            <div class="content">
                                <div class="header header-primary text-center">
                                    <h3 class="widget-header-title">Hand Washing</h3>
                                </div>
                                <h1 class="card-title"><small>N</small>1000<small>/wash</small></h1>
                                <ul>
                                    <li>Brief detailing of what it means</li>
                                </ul>
                                <a href="{{ url('register') }}" class="btn btn-primary">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-pricing ">
                            <div class="content content-primary">
                                <div class="header header-success text-center">
                                    <h3 class="widget-header-title">Engine Detailing</h3>
                                </div>
                                <h1 class="card-title"><small>N</small>1000<small>/wash</small></h1>
                                <ul>
                                    <li>Brief detailing of what it means</li>
                                </ul>
                                <a href="{{ url('register') }}" class="btn btn-primary">
                                    Get Started
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- End price table -->

    <!-- Clients -->
    <section id="clients" class="section clients">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="title">Trusted by Some Amazing People</h2>
                <h5 class="description">We have always kept to our promise of giving you 99.9% satisfaction. We love vehicles and treat them with utmost care.</h5>
            </div>
            <div class="clients-logo" id="clients-logo">
                <div class="slider" id="slider">

                </div>
            </div>
            <div class="row">
                <div class="col-md-5 clients-text">
                    <h2>What Our Customers Says</h2>
                    <p>
                        We are experts in this business of making you love your vehicle like brand new. These are the testimonies of clients.
                    </p>
                </div>
                <div class="col-md-6 col-md-offset-1">
                    <div class="owl-carousel" id="owl-carousel">
                        <!-- single review -->
                        <div class="single-review text-center">
                            <img src="assets/img/clients/1.png" alt="" class="img-circle">
                            <div class="review_content">
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis ullam nemo, itaque excepturi suscipit unde.</blockquote>
                                <div class="review-author">Jane Deo, CEO</div>
                            </div>
                        </div>
                        <!-- //single review -->
                        <!-- single review -->
                        <div class="single-review text-center">
                            <img src="assets/img/clients/2.png" alt="" class="img-circle">
                            <div class="review_content">
                                <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore consequuntur, consequatur ad nesciunt nulla voluptate voluptates.</blockquote>
                                <div class="review-author">Khan Doe, Manager</div>
                            </div>
                        </div>
                        <!-- //single review -->
                        <!-- single review -->
                        <div class="single-review text-center">
                            <img src="assets/img/clients/3.png" alt="" class="img-circle">
                            <div class="review_content">
                                <blockquote>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore odit voluptates vero ea, sint! Eligendi?
                                </blockquote>
                                <div class="review-author">Alexa, SEO Expert</div>
                            </div>
                        </div>
                        <!-- //single review -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End clients -->
    <!-- Subscribe -->
    <div class="subscribe bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="title">Subscribte to our news letter</h3>
                </div>
                <div class="col-md-6 text-right">
                    <form method="post" id="subscribe">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <span class="input-group-addon">
                                                <i class="fa fa-envelope"></i>
                                            </span>
                                    <div class="form-group is-empty">
                                        <input type="email" value="" placeholder="Your Email..." class="form-control"><span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-info">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End subscribe -->

@endsection
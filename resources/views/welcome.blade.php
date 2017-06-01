@extends('layouts.master')


@section('banner')
    <div id="home" style="background-image: url('assets/img/blog/blog2.jpg');" class="page-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-0 col-sm-8 col-sm-offset-2 home-text">
                    <h1 class="title">Let's do the trouble for you</h1>
                    <p class="up-type-title"> We <span class="animated-text" id="animated-text"></span></p>
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
                    <a href="{{ url('register') }}" class="btn btn-success btn-md btn-big">
                        <i class="fa fa-paper-plane-o"></i> Wash Now
                    </a>
                </div>
                <div class="col-md-5 text-center">
                    {{--<img src="assets/img/header-img.png" alt="header image" class="header-img img-responsive">--}}
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
    <section class="section">
        <div class="container">
            <div class="section-heading text-center">
                <h2 class="title">We are awesome at making your vehicle brand new</h2>
            </div>
            <!-- first row -->
            <div class="row">
                <div class="col-md-6 text-justify">
                        <p style="text-space:200px">
                            The Luxury Bubbles is a mobile hand car wash serving the ancient town of Ile Ife. At The Luxury Bubbles, we share the belief that washing a car is just not an act but an experience, hence, we have created a system that is not just quick, efficient and cost effective, but also convenient.
                            <br>
                            The Luxury Bubbles offers her esteemed customers the luxury of having their cars washed at their preferred location. Our main goal is for our customers to feel good every time they see our logo.
                        </p>
                </div>
                <div class="col-md-6">
                        <img src="assets/img/web-design.png" alt="{{ config('app.name') }} image"  class="img-responsive" />
                </div>
            </div>
        </div>
    </section>
    <!-- End about -->
    <section class="section services bg-gray" id="how-it-works">
        <div class="container">
            <div class="section-heading text-center wow fadeInUp">
                <h2 class="title text-center">How it Works</h2>
            </div>
            <div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="img-container">
                            <img src="assets/img/web-design.png" alt="image" style="width:50%;"
                                 class="center-block img-responsive"/>
                        </div>
                        <div class="text-center">
                            <h4 class="info-title">It is easy. We just need you to request a wash.</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-container">
                            <img src="assets/img/web-design.png" alt="image" style="width:50%;"
                                 class="center-block img-responsive"/>
                        </div>
                        <div class="text-center">
                            <h4 class="info-title">It is our job. We do it professionally and to your greatest
                                satisfaction.</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="img-container">
                            <img src="assets/img/web-design.png" alt="image" style="width:50%;"
                                 class="center-block img-responsive"/>
                        </div>
                        <div class="text-center">
                            <h4 class="info-title">Hurray!!! The wash is complete. Your vehicle is back to shape
                                again.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Subscribe -->
    <div class="subscribe bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h3 class="title">We are ready to give you the best wash</h3>
                    <a href="{{ url('register') }}" class="btn btn-default">Wash Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- End subscribe -->
    <!-- Price table -->
    <div class="section price-table" id="services">
        <div class="container">
            <div class="section-header text-center">
                <h2 class="title">Services We Offer</h2>
                <h5 class="description">Be rest assured we offer the best of these.</h5>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar">
                            <a href="#link">
                                <img class="img" src="{{ asset('assets/img/team/3.jpg') }}" alt="Services" />
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="card-title">Interior Wash</h4>
                            <h6 class="category text-muted">N700 - N1000</h6>
                            <p class="card-description">
                                This involves hand washing both the exterior and interior of the vehicle. The interior is also vacuumed.
                            </p>
                            <div class="footer">
                                <a href="{{ url('register') }}" class="btn btn-default">Wash Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar">
                            <a href="#link">
                                <img class="img" src="{{ asset('assets/img/team/3.jpg') }}" alt="Services" />
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="card-title">Hand Wash</h4>
                            <h6 class="category text-muted">N500 - N800</h6>
                            <p class="card-description">
                                This involves the conventional hand washing of the exterior part of the vehicle with wash mitts and chemicals. This service doesn’t involve working on the interior of the car, we don’t detail the exterior too.
                            </p>
                            <div class="footer">
                                <a href="{{ url('register') }}" class="btn btn-default">Wash Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar">
                            <a href="#link">
                                <img class="img" src="{{ asset('assets/img/team/3.jpg') }}" alt="Services" />
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="card-title">Exterior Wash</h4>
                            <h6 class="category text-muted">N800 - N1200</h6>
                            <p class="card-description">
                                This involves hand washing both the exterior and interior. The interior is vacuumed and detailing is done on the exterior; Waxing and Polishing, etc.
                            </p>
                            <div class="footer">
                                <a href="{{ url('register') }}" class="btn btn-default">Wash Now</a>
                            </div>
                            <br><br>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar">
                            <a href="#link">
                                <img class="img" src="{{ asset('assets/img/team/3.jpg') }}" alt="Services" />
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="card-title">Engine Detail</h4>
                            <h6 class="category text-muted">N1000 - N1200</h6>
                            <p class="card-description">
                                This involves hand washing the exterior of the car and detailing the engine. The engine is degreased and wiped clean of grease and grime.
                            </p>
                            <div class="footer">
                                <a href="{{ url('register') }}" class="btn btn-default">Wash Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">

                </div>



                <div class="col-md-4">
                    <div class="card card-profile card-plain">
                        <div class="card-avatar">
                            <a href="#link">
                                <img class="img" src="{{ asset('assets/img/team/3.jpg') }}" alt="Services" />
                            </a>
                        </div>
                        <div class="content">
                            <h4 class="card-title">Full Detail</h4>
                            <h6 class="category text-muted">N1500 - N2000</h6>
                            <p class="card-description">
                                This involves hand washing both the exterior and interior, detailing the exterior and interior and also the engine.
                            </p>
                            <div class="footer">
                                <a href="{{ url('register') }}" class="btn btn-default">Wash Now</a>
                            </div>
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
                                <button type="button" class="btn btn-default">Subscribe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End subscribe -->

@endsection
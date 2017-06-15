@extends('layouts.dashboard')

@section('content')
    <div class="be-content">
        <div class="page-head">
            <div class="panel-heading panel-heading-divider">
                Charges For Request of Vehicle Wash With Tag #LB01{{ $requests->id }}89
                <span class="panel-subtitle">Be rest assured we will give you the best of services.</span>
            </div>
        </div>
        @if (session('alert'))
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <p class="text-center">{{ session('alert') }}</p>
            </div>
        @endif
        <div class="main-content container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="invoice">
                        <div class="row invoice-header">
                            <div class="col-xs-7">
                                <div class="invoice-logo"></div>
                            </div>
                            <div class="col-xs-5 invoice-order"><span class="invoice-id">Invoice #LB01{{ $requests->id }}89</span><span class="incoice-date">{{ date('D-M-Y') }}</span></div>
                        </div>
                        <div class="row invoice-data">
                            <div class="col-xs-5 invoice-person"><span class="name">{{Auth::user()->full_name }}</span>{{Auth::user()->mobile_number }}<span></span><span>{{Auth::user()->email }}</span><span>{{ $requests->your_location }}</span><span>Nigeria</span></div>
                            <div class="col-xs-2 invoice-payment-direction"><i class="icon mdi mdi-chevron-right"></i></div>
                            <div class="col-xs-5 invoice-person"><span class="name">Luxury Bubbles</span><span>Support center</span><span>hello@luxurybubbles.com.ng</span><span>Ile-Ife</span><span>Nigeria</span></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="invoice-details">
                                    <tr>
                                        <th style="width:60%">Description</th>
                                        <th style="width:17%" class="hours">Hours</th>
                                        <th style="width:15%" class="amount">Amount</th>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td class="summary total">Total</td>
                                        <td class="amount total-value">$5,920</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 invoice-message"><span class="title">Thank you for choosing us</span>
                                <p>
                                    At The Luxury Bubbles, we share the belief that washing a car is just not an act but an experience, hence, we have created a system that is not just quick, efficient and cost effective, but also convenient.
                                </p>
                            </div>
                        </div>
                        <div class="row invoice-company-info">
                            <div class="col-sm-6 col-md-2 logo"><img src="{{ asset('dashboard/img/logo-symbol.png') }}" alt="{{ config('app.name') }} Logo-symbol"></div>
                            <div class="col-sm-6 col-md-4 summary"><span class="title">{{ config('app.name') }} Nigeria</span>
                                <p>We are concerned about the safety and care of your vehicle. </p>
                            </div>
                            <div class="col-sm-6 col-md-3 phone">
                                <ul class="list-unstyled">
                                    <li>Mobile Number</li>
                                </ul>
                            </div>
                            <div class="col-sm-6 col-md-3 email">
                                <ul class="list-unstyled">
                                    <li>hello@luxurybubbles.com.ng</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row invoice-footer">
                            <div class="col-md-12">
                                <button onclick="window.print()" class="btn btn-lg btn-space btn-primary">Print</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.dashboard')

@section('content')
    <div class="be-content">
        <div class="main-content container-fluid">
            @if(Auth::User()->status == '1')
            <div class="row">
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="widget widget-tile">
                        <div id="spark1" class="chart sparkline"></div>
                        <div class="data-info">
                            <div class="desc">Total Users</div>
                            <div class="value"><span class="indicator indicator-equal mdi mdi-chevron-right"></span><span data-toggle="counter" data-end="{{ $users }}" class="number">0</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="widget widget-tile">
                        <div id="spark2" class="chart sparkline"></div>
                        <div class="data-info">
                            <div class="desc">Total Requests</div>
                            <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="{{ $transactions }}" data-suffix="R" class="number">0</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="widget widget-tile">
                        <div id="spark3" class="chart sparkline"></div>
                        <div class="data-info">
                            <div class="desc">Completed</div>
                            <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="{{ $completeTransactions }}" class="number">0</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-3">
                    <div class="widget widget-tile">
                        <div id="spark4" class="chart sparkline"></div>
                        <div class="data-info">
                            <div class="desc">Uncompleted</div>
                            <div class="value"><span class="indicator indicator-negative mdi mdi-chevron-down"></span><span data-toggle="counter" data-end="{{ $uncompleteTransactions }}" class="number">0</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="widget widget-fullwidth be-loading">
                        <div class="widget-head">
                            <div class="tools">
                                <div class="dropdown"><span data-toggle="dropdown" class="icon mdi mdi-more-vert visible-xs-inline-block dropdown-toggle"></span>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><a href="#">Week</a></li>
                                        <li><a href="#">Month</a></li>
                                        <li><a href="#">Year</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#">Today</a></li>
                                    </ul>
                                </div><span class="icon mdi mdi-chevron-down"></span><span class="icon toggle-loading mdi mdi-refresh-sync"></span><span class="icon mdi mdi-close"></span>
                            </div>
                            <div class="button-toolbar hidden-xs">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default">Week</button>
                                    <button type="button" class="btn btn-default active">Month</button>
                                    <button type="button" class="btn btn-default">Year</button>
                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default">Today</button>
                                </div>
                            </div><span class="title">Recent Movement</span>
                        </div>
                        <div class="widget-chart-container">
                            <div class="widget-chart-info">
                                <ul class="chart-legend-horizontal">
                                    <li><span data-color="main-chart-color1"></span> Purchases</li>
                                    <li><span data-color="main-chart-color2"></span> Plans</li>
                                    <li><span data-color="main-chart-color3"></span> Services</li>
                                </ul>
                            </div>
                            <div class="widget-counter-group widget-counter-group-right">
                                <div class="counter counter-big">
                                    <div class="value">25%</div>
                                    <div class="desc">Purchase</div>
                                </div>
                                <div class="counter counter-big">
                                    <div class="value">5%</div>
                                    <div class="desc">Plans</div>
                                </div>
                                <div class="counter counter-big">
                                    <div class="value">5%</div>
                                    <div class="desc">Services</div>
                                </div>
                            </div>
                            <div id="main-chart" style="height: 260px;"></div>
                        </div>
                        <div class="be-spinner">
                            <svg width="40px" height="40px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg">
                                <circle fill="none" stroke-width="4" stroke-linecap="round" cx="33" cy="33" r="30" class="circle"></circle>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <div class="row">
                    <div class="col-xs-12 col-md-7 col-lg-4">
                        <div class="widget widget-tile">
                            <div id="spark2" class="chart sparkline"></div>
                            <div class="data-info">
                                <div class="desc">My Total Requests</div>
                                <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="{{ $userTransactions }}" data-suffix="R" class="number">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-7 col-lg-4">
                        <div class="widget widget-tile">
                            <div id="spark3" class="chart sparkline"></div>
                            <div class="data-info">
                                <div class="desc">Completed</div>
                                <div class="value"><span class="indicator indicator-positive mdi mdi-chevron-up"></span><span data-toggle="counter" data-end="{{ $userCompleteTransactions }}" class="number">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-7 col-lg-4">
                        <div class="widget widget-tile">
                            <div id="spark4" class="chart sparkline"></div>
                            <div class="data-info">
                                <div class="desc">Uncompleted</div>
                                <div class="value"><span class="indicator indicator-negative mdi mdi-chevron-down"></span><span data-toggle="counter" data-end="{{ $userUncompleteTransactions }}" class="number">0</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="widget widget-fullwidth be-loading">
                            <div class="col-xs-12 col-md-4 col-md-offset-1">
                                <div class="widget be-loading">
                                    <div class="widget-head">
                                    </div>
                                    <div class="widget-chart-container">
                                        <i>image here</i>
                                        <div id="top-sales" style="height: 178px;"></div>
                                        <div style="font-size:24px" class="chart-pie-counter">We guarantee 99.9% quality service</div>
                                    </div>
                                    <div class="chart-legend">
                                        <table>
                                            <a class="btn btn-block btn-primary btn-lg" href="{{ url('request-wash') }}">Request Wash</a>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4 col-md-offset-1">
                                <div class="widget be-loading">
                                    <div class="widget-head">
                                    </div>
                                    <div class="widget-chart-container">
                                        <i>image here</i>
                                        <div id="top-sales" style="height: 178px;"></div>
                                        <div style="font-size:24px" class="chart-pie-counter">Our Customer Support is 100%</div>
                                    </div>
                                    <div class="chart-legend">
                                        <table>
                                            <a class="btn btn-block btn-primary btn-lg" href="{{ url('contact') }}">Speak to Support Agent</a>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            @endif
        </div>
    </div>

    </div>
@endsection

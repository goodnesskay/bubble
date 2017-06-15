<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a href="{{ url('/home') }}" class="left-sidebar-toggle">Dashboard</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">Menu</li>
                        <li class="active"><a href="{{ url('/home') }}"><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                        </li>
                        <li><a href="{{ url('profile') }}/{{ Auth::User()->id }}/{{ str_slug(Auth::User()->username) }}"><i class="icon mdi mdi-face"></i><span>Profile</span></a>
                        </li>
                        <li class="active"><a href="{{ url('request-wash') }}"><i class="icon mdi mdi-time-countdown"></i><span>Request Wash</span></a>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-tab"></i><span>Transactions</span></a>
                            <ul class="sub-menu">
                                @if(Auth::User()->status == 1)
                                    <li><a href="{{ url('all-transactions') }}">All</a></li>
                                @endif
                                <li><a href="{{ url('my-transactions') }}">My Requests</a></li>
                            </ul>
                        </li>
                        @if(Auth::User()->status == 1)
                            <li><a href="{{ url('users') }}"><i class="icon mdi mdi-face"></i><span>Platform Users</span></a>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
        <div class="progress-widget">
            <div class="progress-data"><span class="progress-value">99.9%</span><span class="name">Our Service</span></div>
            <div class="progress">
                <div style="width: 100%;" class="progress-bar progress-bar-success"></div>
            </div>
        </div>
    </div>
</div>
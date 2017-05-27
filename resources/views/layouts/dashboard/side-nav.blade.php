<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a href="#" class="left-sidebar-toggle">Dashboard</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li class="divider">Menu</li>
                        <li class="active"><a href=""><i class="icon mdi mdi-home"></i><span>Dashboard</span></a>
                        </li>
                        <li><a href=""><i class="icon mdi mdi-face"></i><span>Profile</span></a>
                        </li>
                        <li class="active"><a href="{{ url('request-wash') }}"><i class="icon mdi mdi-time-countdown"></i><span>Request Wash</span></a>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-tab"></i><span>Transactions</span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('all-transactions') }}">All</a></li>
                            </ul>
                        </li>

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
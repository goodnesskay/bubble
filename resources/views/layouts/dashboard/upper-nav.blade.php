<div class="be-wrapper be-fixed-sidebar">
    <nav class="navbar navbar-default navbar-fixed-top be-top-header">
        <div class="container-fluid">
            <div class="navbar-header"><a href="{{ url('/home') }}" class="navbar-brand"></a>
            </div>
            <div class="be-right-navbar">
                <ul class="nav navbar-nav navbar-right be-user-nav">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="dropdown-toggle"><img src="{{ asset('dashboard/img/avatar.png') }}" alt="Avatar"><span class="user-name">Túpac Amaru</span></a>
                        <ul role="menu" class="dropdown-menu">
                            <li>
                                <div class="user-info">
                                    <div class="user-name">{{ Auth::User()->full_name }}</div>
                                    <div class="user-position online">Online</div>
                                </div>
                            </li>
                            <li><a href="{{ url('profile') }}/{{ Auth::User()->id }}/{{ str_slug(Auth::User()->username) }}"><span class="icon mdi mdi-face"></span> Account</a></li>
                            <li><a href="{{ url('password-reset') }}/{{ Auth::User()->id }}/{{ str_slug(Auth::User()->username) }}"><span class="icon mdi mdi-settings"></span> Password Reset</a></li>
                            <li>
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                                    <span class="icon mdi mdi-power"></span> Logout</a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="page-title"><span>Dashboard</span></div>
                <ul class="nav navbar-nav navbar-right be-icons-nav">
                    <li class="dropdown"><a href="{{ url('password-reset') }}/{{ Auth::User()->id }}/{{ str_slug(Auth::User()->username) }}" role="button" aria-expanded="false" ><span class="icon mdi mdi-settings"></span></a></li>
                </ul>
            </div>
        </div>
    </nav>
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">

        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <img src="{{url('images/adminLogo.png')}}" alt="" width="235px">
                </div>
            </li>

            {{--ADMIN MENU--}}
                @if (Auth::user()->role == "admin")
                    <li @if (Request::is('home')) class="active" @endif><a href="/home"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>

                    <li class="treeview @if (Request::is('advisors/*')) active @endif">
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Advisers</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/advisors/approved">Active Advisers</a></li>
                            <li><a href="/advisors/new">Pending Approval</a></li>
                        </ul>
                    </li>

                    <li @if (Request::is('reports/view')) class="active" @endif><a href="/reports/view"><i class="fa fa-tachometer"></i> <span>Investor DNA Profile</span></a></li>

                    <li @if (Request::is('rates')) class="active" @endif><a href="/rates"><span>Token Rates</span></a></li>
                    <li @if (Request::is('profile')) class="active" @endif><a href="/profile"><span>Profile</span></a></li>


            {{--FIRM MENU--}}
                @elseif (Auth::user()->role == "firm")
                    <li @if (Request::is('home')) class="active" @endif><a href="/home"><i class="fa fa-tachometer"></i> <span>Financial Practice Dashboard</span></a></li>

                    <li class="treeview @if (Request::is('advisors/*')) active @endif">
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Advisers</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/advisors/approved">Active Advisers</a></li>
                            <li><a href="/advisors/new">Pending Approval</a></li>
                        </ul>
                    </li>


                    <li @if (Request::is('reports/view')) class="active" @endif><a href="/reports/view"><i class="fa fa-file-text"></i> <span>Completed Investor DNA Profiles</span></a></li>


                    <li class="treeview @if (Request::is('tokens/*')) active @endif">
                        <a href="#"><i class="fa fa-dollar"></i> <span class="nav-label">Tokens</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="/tokens/purchase">Purchase</a></li>
                            <li><a href="/tokens/history">Purchase History</a></li>
                            {{--<li><a href="/tokens/usage">Usage History</a></li>--}}
                        </ul>
                    </li>

                <li @if (Request::is('profile')) class="active" @endif><a href="/profile"><i class="fa fa-user"></i> <span>Financial Practice Profile </span></a></li>


            {{--ADVISOR MENU--}}
                @elseif (Auth::user()->role == "advisor")
                    <li @if (Request::is('home')) class="active" @endif><a href="{{url('/home')}}"><i class="fa fa-tachometer"></i> <span>Adviser Dashboard</span></a></li>
                    {{--<li><a href="/clients"><i class="fa fa-users"></i> <span>Clients</span></a></li>--}}

                     <li class="treeview @if (Request::is('reports/*')) active @endif">
                        <a href="/reports/new"><i class="fa fa-file-text"></i> <span>Investor DNA Profile </span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="nav nav-second-level collapse">
                            <li><a href="{{url('/reports/new')}}">Add New</a></li>
                            <li><a href="{{url('/reports/view')}}">View </a></li>
                        </ul>
                    </li>
                    <li @if (Request::is('profile')) class="active" @endif><a href="{{url('/profile')}}"><i class="fa fa-user"></i> <span>Profile</span></a></li>
                @endif

        </ul>

    </div>
</nav>

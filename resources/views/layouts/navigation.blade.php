<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">

        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element" style="text-align: center;">
                    <img src="{{url('images/adminLogo.png')}}" alt="" width="190px" style=" padding-top: 10px">
                </div>
            </li>
            {{--ADMIN MENU--}}
                @if (Auth::user()->role == "admin")
                    <li @if (Request::is('home')) class="active" @endif><a href="/home"><i class="fa fa-tachometer"></i> <span>Home</span></a></li>

                    <li class="treeview @if (Request::is('advisors/*')) active @endif">
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Financial Advisers</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="@if (Request::is('advisors/approved')) active @endif"><a href="/advisors/approved">Active Advisers</a></li>
                            <li class="@if (Request::is('advisors/new')) active @endif"><a href="/advisors/new">Pending Approval</a></li>
                        </ul>
                    </li>

                    <li @if (Request::is('/admin/firms')) class="active" @endif><a href="{{route('firms.index')}}"><i class="fa fa-tachometer"></i> <span>Firms</span></a></li>

                    <li @if (Request::is('reports/view')) class="active" @endif><a href="/reports/view"><i class="fa fa-tachometer"></i> <span>Investor DNA Profile</span></a></li>

                    <li @if (Request::is('rates')) class="active" @endif><a href="/rates"><span>Token Rates</span></a></li>
                    <li @if (Request::is('profile')) class="active" @endif><a href="/profile"><span>Profile</span></a></li>


            {{--FIRM MENU--}}
                @elseif (Auth::user()->role == "firm")
                    <li @if (Request::is('home')) class="active" @endif><a href="/home"><i class="fa fa-tachometer"></i> <span>Financial Practice Dashboard</span></a></li>

                    <li class="treeview @if (Request::is('advisors/*')) active @endif">
                        <a href="#"><i class="fa fa-users"></i> <span class="nav-label">Financial Advisers</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="@if (Request::is('advisors/approved')) active @endif"><a href="/advisors/approved">Approved Financial Advisers</a></li>
                            <li class="@if (Request::is('advisors/new')) active @endif"><a href="/advisors/new">Financial Advisers - Approval Pending</a></li>
                            <li class="@if (Request::is('adviser/add')) active @endif"><a href="/adviser/add">Add new Financial Adviser</a></li>
                        </ul>
                    </li>


                    <li @if (Request::is('reports/view')) class="active" @endif><a href="/reports/view"><i class="fa fa-file-text"></i> <span>Completed Investor DNA Profiles</span></a></li>


                    <li class="treeview @if (Request::is('tokens/*')) active @endif">
                        <a href="#"><i class="fa fa-dollar"></i> <span class="nav-label">Tokens</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="@if (Request::is('tokens/purchase')) active @endif"><a href="/tokens/purchase">Purchase</a></li>
                            <li class="@if (Request::is('tokens/history')) active @endif"><a href="/tokens/history">Purchase History</a></li>
                            <li class="@if (Request::is('tokens/usage')) active @endif"><a href="/tokens/usage">Usage History</a></li>
                        </ul>
                    </li>

                <li @if (Request::is('profile')) class="active" @endif><a href="/profile"><i class="fa fa-user"></i> <span>Financial Practice Profile </span></a></li>


            {{--ADVISOR MENU--}}
                @elseif (Auth::user()->role == "advisor")
                    <li @if (Request::is('home')) class="active" @endif><a href="{{url('/home')}}"><i class="fa fa-tachometer"></i> <span>Financial Adviser Dashboard</span></a></li>
                    <li><a href="/clients"><i class="fa fa-users"></i> <span>Clients</span></a></li>

                     <li class="treeview @if (Request::is('reports/*')) active @endif">
                        <a href="/reports/new"><i class="fa fa-file-text"></i> <span>Investor DNA Profile </span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="@if (Request::is('reports/new')) active @endif"><a href="{{url('/reports/new')}}">Add New</a></li>
                            <li class="@if (Request::is('reports/view')) active @endif"><a href="{{url('/reports/view')}}">View </a></li>
                        </ul>
                    </li>
                    <li @if (Request::is('profile')) class="active" @endif><a href="{{url('/profile')}}"><i class="fa fa-user"></i> <span>Financial Adviser Profile</span></a></li>

            {{--ADVISOR MENU--}}
                @elseif (Auth::user()->role == "iclient")
                    <li @if (Request::is('home')) class="active" @endif><a href="{{url('/home')}}"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>

                     <li class="treeview @if (Request::is('reports/*')) active @endif">
                        <a href="/reports/new"><i class="fa fa-file-text"></i> <span>Investor DNA Profile </span> <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="nav nav-second-level collapse">
                            <li class="@if (Request::is('reports/new/')) active @endif"><a href="{{url('/reports/new')}}">Add New</a></li>
                            <li class="@if (Request::is('reports/view/')) active @endif"><a href="{{url('/reports/view')}}">View </a></li>
                        </ul>
                    </li>
                    <li @if (Request::is('profile')) class="active" @endif><a href="{{url('/profile')}}"><i class="fa fa-user"></i> <span>Profile</span></a></li>

                @endif

        </ul>


        <div class="info" style="<?php if(Auth::user()->role == "iclient") echo "display:none"; ?>">
            <ul class="info">
                <li><?php
                    if(Auth::user()->role == "advisor")
                        echo "<b>Financial Practice Name</b>" .'<br/> - '. \App\User::where("code", Auth::user()->firm_code)->get()->first()->firm_name;
                    else if(Auth::user()->role == "firm")
                         echo "<b>Financial Practice Name</b>" .'<br/> - '. Auth::user()->firm_name;
                    ?></li>
                <li><?php
                    if(Auth::user()->role == "firm")
                        echo '<b>Financial Practice ID</b>' .'<br/> - '. Auth::user()->code;
                    else if(Auth::user()->role == "advisor")
                        echo '<b>Financial Practice ID</b>' .'<br/> - '. Auth::user()->firm_code;
                    ?>
                </li>
                <li>
                    <?php
                    if(Auth::user()->role == "firm")
                        echo '<b>Financial Practice Registration Date</b>' .'<br/> - '. date("F j, Y", strtotime(Auth::user()->created_at));
                    else if(Auth::user()->role == "advisor")
                        echo '<b>Financial Practice Registration Date</b>' .'<br/> - '. date("F j, Y", strtotime(\App\User::where("code", Auth::user()->firm_code)->get()->first()->created_at));
                    ?>
                </li>
                <li>
                    <?php if(Auth::user()->role == "advisor")
                        echo "<b>Accreditation date</b>" .'<br/> - '. Auth::user()->accreditation_date;
                    ?></li>
                </li>



            </ul>
        </div>

    </div>
</nav>

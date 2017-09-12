<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            @if (Auth::user()->role == "admin")
                <li @if (Request::is('home')) class="active" @endif><a href="/home"><span>Home</span></a></li>
                <li @if (Request::is('rates')) class="active" @endif><a href="/rates"><span>Token Rates</span></a></li>
                <li @if (Request::is('profile')) class="active" @endif><a href="/profile"><span>Profile</span></a></li>
            @elseif (Auth::user()->role == "firm")
                <li @if (Request::is('home')) class="active" @endif><a href="/home"><span>Home</span></a></li>
                <li class="treeview @if (Request::is('advisors/*')) active @endif">
                    <a href="/advisors/new"><span>Advisors</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/advisors/new">New</a></li>
                        <li><a href="/advisors/approved">Approved</a></li>
                    </ul>
                </li>
                <li class="treeview @if (Request::is('tokens/*')) active @endif">
                    <a href="/tokens/purchase"><span>Tokens</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/tokens/purchase">Purchase</a></li>
                        <li><a href="/tokens/history">Purchase History</a></li>
                        <li><a href="/tokens/usage">Usage History</a></li>
                    </ul>
                </li>
                <li @if (Request::is('reports/view')) class="active" @endif><a href="/reports/view"><span>Investor DNA Profile </span></a></li>
                <li @if (Request::is('profile')) class="active" @endif><a href="/profile"><span>Profile</span></a></li>
            @elseif (Auth::user()->role == "advisor")
                <li @if (Request::is('home')) class="active" @endif><a href="/home"><span>Home</span></a></li>
                <li class="treeview @if (Request::is('reports/*')) active @endif">
                    <a href="/reports/new"><span>Reports</span> <i class="fa fa-angle-left pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li><a href="/reports/new">Add New</a></li>
                        <li><a href="/reports/view">View</a></li>
                    </ul>
                </li>
                <li @if (Request::is('profile')) class="active" @endif><a href="/profile"><span>Profile</span></a></li>
            @endif

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header" style="display: none;">
            {{--<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>--}}
            <p style="margin: 0px; padding: 0px 25px; line-height: 60px">
                <?php if(Auth::user()->role == "advisor")
                    echo "Firm Name - " . \App\User::where("code", Auth::user()->firm_code)->get()->first()->name . "|";
                ?>

                <?php
                    if(Auth::user()->role == "firm")
                        echo 'Financial Practice ID - ' . Auth::user()->code;
                    else if(Auth::user()->role == "advisor")
                        echo 'Financial Practice ID - ' . Auth::user()->firm_code;
                ?>

                <?php
                    if(Auth::user()->role == "firm")
                        echo ' | Firm Registration Date -' . date("F j, Y", strtotime(Auth::user()->created_at));
                    else if(Auth::user()->role == "advisor")
                        echo ' | Firm Registration Date -' . date("F j, Y", strtotime(\App\User::where("code", Auth::user()->firm_code)->get()->first()->created_at));
                ?>
            </p>
        </div>
        <ul class="nav navbar-top-links navbar-right">

            <li>Welcome <?php echo Auth::user()->name; ?></li>
            <li>

                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fa fa-sign-out"></i> Log out
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </ul>
    </nav>
</div>

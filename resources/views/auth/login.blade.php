@extends('layouts.auth')

<style>


    /*.gray-bg, .bg-muted {*/
        /*background: url('images/bg.jpg');*/
    /*}*/

    .gray-bg, .bg-muted {
        background: url(images/652568722.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .inside {
        background: #18a689;
        padding: 0px 50px 50px;
    }

    h2 {
        color: #fff!important;
        padding: 30px 0px;
    }

    .btn-primary {
        background-color: #1ab394;
        border-color: #fff!important;
        color: #FFFFFF;
    }

</style>

@section('content')
    {{--<img src="images/new_banner.jpg" alt="" width="100%">--}}

    <div class="container">


        <div class="middle-box text-center loginscreen   animated fadeInDown">
            <div>
                <div  style="margin-bottom: 40px">
                    <img src="images/logoi.png" alt="">
                    <h1 style="margin-top:0px"  class="logo-name">Investor DNA</h1>

                </div>


                <div class="inside">
                <h2>LOGIN</h2>

                @if ($errors->has('error'))
                    <div class="alert alert-warning">
                        <strong>{{ $errors->first('error') }}</strong>
                    </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <input id="email" placeholder="Email Address" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>
                    </div>



                <a href="{{ route('password.request') }}"><small>Forgot password?</small></a>
                <p class="text-muted text-center" style="color: #fff"><small>Do not have an account?</small></p>
                    <div class="form-group">

                    <a class="btn btn-sm btn-white btn-block" href="{{ url('/register') }}">Create an account</a>

                    </div>

                </form>

                </div>

                <p class="m-t"> <small>Investor DNA &copy; 2018</small> </p>
            </div>
        </div>

    </div>



@endsection

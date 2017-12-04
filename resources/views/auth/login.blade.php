@extends('layouts.auth')

<style>


    .gray-bg, .bg-muted {
        background-color: #2f4050!important;
    }

</style>

@section('content')
    {{--<img src="images/new_banner.jpg" alt="" width="100%">--}}

    <div class="container">


        <div class="middle-box text-center loginscreen   animated fadeInDown">
            <div>
                <div  style="margin-bottom: 80px">
                    <img src="images/logoi.png" alt="">
                    <h1 style="margin-top:0px"  class="logo-name">Investor DNA</h1>

                </div>
                <h2>Login</h2>

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


                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="{{ route('password.request') }}"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="{{ url('/register') }}">Create an account</a>


                </form>

                <p class="m-t"> <small>Investor DNA &copy; 2017</small> </p>
            </div>
        </div>

    </div>



@endsection

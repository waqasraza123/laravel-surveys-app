@extends('layouts.auth')

<style>


    /*.gray-bg, .bg-muted {*/
    /*background-color: #2f4050!important;*/
    /*}*/

    .gray-bg, .bg-muted {
        background: url(../images/bg.jpg) no-repeat center center fixed;
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

    <div class="container">


        <div class="middle-box text-center loginscreen   animated fadeInDown">
            <div>
                <div  style="margin-bottom: 40px">
                    <img src="../images/logoi.png" alt="">
                    <h1 style="margin-top:0px"  class="logo-name">Investor DNA</h1>

                </div>

                <div class="inside">

                <h2>Reset Password</h2>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <input id="email" type="email" placeholder="Email Address" class="form-control" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                    </div>

                    <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Send Password Reset Link
                            </button>
                    </div>
                </form>

                </div>


                <p class="m-t"> <small>Investor DNA &copy; 2018</small> </p>
            </div>
        </div>

    </div>


@endsection

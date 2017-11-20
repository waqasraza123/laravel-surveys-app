@extends('layouts.auth')

@section('content')
    <img src="../images/new_banner.jpg" alt="" width="100%">


    <div class="container">


        <div class="middle-box text-center loginscreen   animated fadeInDown">
            <div>
                <div>
                    <img src="../images/logoi.png" alt="">
                    <h1 style="margin-top:0px"  class="logo-name">Investor DNA</h1>

                </div>
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

                <p class="m-t"> <small>Investor DNA &copy; 2017</small> </p>
            </div>
        </div>

    </div>


@endsection

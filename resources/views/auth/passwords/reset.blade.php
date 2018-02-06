@extends('layouts.auth')

@section('content')


    <div class="container">


        <div class="middle-box text-center loginscreen   animated fadeInDown">
            <div>
                <div>

                    <h1 class="logo-name">Investor DNA</h1>

                </div>
                <h2>Reset Password</h2>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
                    {{ csrf_field() }}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <input id="email" type="email" placeholder="Email Address" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

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

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                            @endif
                    </div>

                    <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                Reset Password
                            </button>
                    </div>
                </form>

                <p class="m-t"> <small>Investor DNA &copy; 2018</small> </p>
            </div>
        </div>

    </div>







@endsection

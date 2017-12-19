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

                <img src="images/logoi.png" alt="" width="220px">
                <h1 style="margin-top:0px" class="logo-name">Investor DNA</h1>

            </div>
            <h3>Create an account</h3>
            <form class="form-horizontal" role="form" method="POST">
                {{ csrf_field() }}

                @if ($errors->has('success'))
                    <div class="alert alert-success">
                        <strong>{{ $errors->first('success') }}</strong>
                    </div>
                @endif
                @if ($errors->has('error'))
                    <div class="alert alert-warning">
                        <strong>{{ $errors->first('error') }}</strong>
                    </div>
                @endif

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                        <input id="name" placeholder="Personal Name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('mobile_number') ? ' has-error' : '' }}">

                        <input id="mobile_number" placeholder="Mobile" type="text" class="form-control" name="mobile_number" value="{{ old('mobile_number') }}" required>

                        @if ($errors->has('mobile_number'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('mobile_number') }}</strong>
                                    </span>
                        @endif
                </div>

                <div class="form-group">
                    <div class="checkbox i-checks"><label> <input type="checkbox"><i></i>I Agree to the Terms & Conditions </label></div>
                </div>

                <div class="box-footer text-center">
                    <script
                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="{{ env('STRIPE_PUBLIC_KEY', '') }}"
                            data-name="{{ config('app.name', 'Investor DNA') }}"
                            data-amount="{{ $price }}"
                            data-description="Independent Client"
                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                            data-locale="auto">
                    </script>
                </div>

            </form>
            <p class="m-t"> <small>Investor DNA &copy; 2017</small> </p>
        </div>
    </div>

</div>
@endsection

@extends('layouts.auth')

@section('content')
    <div class="container">


        <div class="middle-box text-center loginscreen   animated fadeInDown">
            <div>
                <div>

                    <h1 class="logo-name">Investor DNA</h1>

                </div>

                {{--If Advisor --}}
                <h2>Thank you for your registartion. Your firm's administrator has been notified.
                    You will be able to login, when the account has been approved.
                </h2>


                {{--If Firm--}}
                <h2>Thank you for your registartion. We have sent you an activation link.
                Please click on the link within the email to activate and login to your account.
                </h2>




                <p class="m-t"> <small>Investor DNA &copy; 2017</small> </p>
            </div>
        </div>

    </div>
@endsection

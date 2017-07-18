@extends('layouts.auth')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div>

                <h1 class="logo-name text-center" style="font-size: 65px;">Investor DNA</h1>

            </div>
            <h2 class="text-center">Welcome to the Investor DNA Questionnaire</h2>

            <div class="ibox float-e-margins">
                <div class="ibox-content text-center">
                    <p>
                        The Investor DNA questionnaire produces a personal investor profile that provides you with self-insight into your financial personality. The subsequent Investor DNA profile provides self-insight into your investment decision-making, your approach to risk and preferred asset classes, assisting your adviser in providing a tailored investment solution based on your own unique investment psychology.  It is worth considering that your financial net worth today is largely the sum of all of your financial decisions made up until this point in time. Therefore It makes intuitive sense that improving the way you think and approach your investment decisions will increase the likelihood of wealth creation over time, safeguarding your lifestyle today, tomorrow and in retirement. And this is the ultimate goal of the Investor-DNA system.
                    </p>
                    <p>
                        There are no right or wrong answers, only different investment styles that hold significant implications for your investment success.
                    </p>
                    <p>
                        There are 3 sections to the questionnaire and will take you approximately 30 minutes to complete.
                    </p>
                    <p>
                        When completed, you will receive your own Investment DNA profile and your adviser will walk you through the results.
                    </p>
                </div>
                <div class="panel-footer text-center">
                    <a href="/questioner/{{ $code }}/part/1"><button type="button" class="btn btn-primary lg">Start Questionnaire</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

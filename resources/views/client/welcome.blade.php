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




                    <p>The Investor DNA questionnaire produces a personal investor profile that provides you with self-insight into your financial personality.
                        The subsequent Investor DNA profile provides self-insight into your investment decision-making, your approach to risk and preferred asset
                        classes, assisting your adviser in providing a tailored investment solution based on your own unique investment psychology.</p>

                    <p>There are no right or wrong answers, only different investment styles that hold significant implications for your investment success.</p>

                    <p>The questionnaire should take you approximately 20 to 25 minutes to complete.</p>

                    <p>When completed, you will receive your own Investment DNA profile and your adviser will walk you through the results.</p>

                    <p>If you need to exit the questionnaire before finishing, please complete the current section of the questionnaire and hit save. This will allow you to return to your questionniare at a latter time for completion using your questionnaire email link</p>

                </div>
                <div class="panel-footer text-center">
                    <a href="{{ Request::url() }}/part/1"><button type="button" class="btn btn-primary lg">Start Questionnaire</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

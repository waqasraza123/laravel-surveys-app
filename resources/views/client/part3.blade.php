@extends('layouts.auth')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="container">

        <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <form class="form-horizontal" method="post" action="/questioner/{{ $code }}/part/3">
                {{ csrf_field() }}

                <h1 class="logo-name" style="font-size: 65px; margin-left: -5px;">Part C</h1>

                <h2>Instructions</h2>
                Please choose the statement that is MOST LIKE YOU

                <div class="ibox float-e-margins" style="margin-top: 40px">
                    <div class="ibox-content">


                        <div class="form-group">
                            <label>
                                <input type="radio" name="part3" value="5" required @if($saved_input['part3'] == "5") checked @endif>
                                I take a substantial level of investment risk expecting substantial investment returns.
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="part3" value="4" required @if($saved_input['part3'] == "4") checked @endif>
                                I take an above average level of investment risk expecting above average investment returns.
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="part3" value="3" required @if($saved_input['part3'] == "3") checked @endif>
                                I take an average level of investment risk expecting average investment returns.
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="part3" value="2" required @if($saved_input['part3'] == "2") checked @endif>
                                I take a below average level of investment risk expecting a below average investment returns.
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="part3" value="1" required @if($saved_input['part3'] == "1") checked @endif>
                                I am not willing to take financial risks. I am only comfortable with investing in investment vehicles that have guaranteed returns.
                            </label>
                        </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href="/questioner/{{ $code }}/part/2"><button type="button" class="btn btn-primary">Back</button></a>
                        <div style="float:right">
                            <button type="submit" class="btn btn-primary">Save & Next</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection

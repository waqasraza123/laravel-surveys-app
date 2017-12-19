@extends('layouts.auth')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="container">

        <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <form class="form-horizontal" method="post" action="../submit">
                {{ csrf_field() }}

                <h1 class="logo-name" style="font-size: 65px; margin-left: -5px;">Part G</h1>

                <h2>Instructions</h2>
                Please choose the statement that is MOST LIKE YOU

                <div class="ibox float-e-margins" style="margin-top: 40px">
                    <div class="ibox-content">


                        <div class="form-group">
                            <label>
                                <input type="radio" name="part7" value="5" required @if(isset($saved_input['part7']) && $saved_input['part7'] == "5") checked @endif>
                                I take a substantial level of investment risk expecting substantial investment returns.
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="part7" value="4" required @if(isset($saved_input['part7']) && $saved_input['part7'] == "4") checked @endif>
                                I take an above average level of investment risk expecting above average investment returns.
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="part7" value="3" required @if(isset($saved_input['part7']) && $saved_input['part7'] == "3") checked @endif>
                                I take an average level of investment risk expecting average investment returns.
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="part7" value="2" required @if(isset($saved_input['part7']) && $saved_input['part7'] == "2") checked @endif>
                                I take a below average level of investment risk expecting a below average investment returns.
                            </label>
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="radio" name="part7" value="1" required @if(isset($saved_input['part7']) && $saved_input['part7'] == "1") checked @endif>
                                I am not willing to take financial risks. I am only comfortable with investing in investment vehicles that have guaranteed returns.
                            </label>
                        </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href="../part/6"><button type="button" class="btn btn-primary">Back</button></a>
                        <div style="float:right">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection

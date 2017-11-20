@extends('layouts.auth')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="container">

        <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <form class="form-horizontal" method="post" action="/questioner/{{ $code }}/part/5">
                {{ csrf_field() }}

                <h1 class="logo-name" style="font-size: 65px; margin-left: -5px;">Part E</h1>

                <h2>Please read the following statements and decide which statement is MOST LIKE YOU from the two statements presented</h2>

                <div class="ibox float-e-margins" style="margin-top: 40px">
                    <div class="ibox-content">
                        <div class="radio">
                            <label>
                                <input type="radio" name="1" value="1" required @if(isset($saved_input['1']) && $saved_input['1'] == "1") checked @endif>
                                I am attracted to investments that are creative, novel and 'out of the box'
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="1" value="2" required @if(isset($saved_input['1']) && $saved_input['1'] == "2") checked @endif>
                                I am attracted to investments that are traditional and have a proven track record
                            </label>
                        </div>
                        <hr>
                        <div class="radio">
                            <label>
                                <input type="radio" name="2" value="1" required @if(isset($saved_input['2']) && $saved_input['2'] == "1") checked @endif>
                                I prefer to plan, organise and manage my investments in a structured and systematic manner
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="2" value="2" required @if(isset($saved_input['2']) && $saved_input['2'] == "2") checked @endif>
                                I prefer to remain flexible when investing and keep my options open
                            </label>
                        </div>
                        <hr>
                        <div class="radio">
                            <label>
                                <input type="radio" name="3" value="1" required @if(isset($saved_input['3']) && $saved_input['3'] == "1") checked @endif>
                                I prefer to make my investment decisions based on facts, data and rational analysis
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="3" value="2" required @if(isset($saved_input['3']) && $saved_input['3'] == "2") checked @endif>
                                I prefer to make my investment decisions based on my strongly held principles and beliefs
                            </label>
                        </div>
                        <hr>
                        <div class="radio">
                            <label>
                                <input type="radio" name="4" value="1" required @if(isset($saved_input['4']) && $saved_input['4'] == "1") checked @endif>
                                I am intellectual in my approach and like to understand all aspects of the investment process
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="4" value="2" required @if(isset($saved_input['4']) && $saved_input['4'] == "2") checked @endif>
                                I an instinctive in my approach, preferring to 'go with my gut' and back my personal intuition
                            </label>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href="/questioner/{{ $code }}/part/4"><button type="button" class="btn btn-primary">Back</button></a>
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

@extends('layouts.auth')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="container">

        <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <form class="form" method="post" action="/questioner/{{ $code }}/part/1">
                {{ csrf_field() }}


                    <h1 class="logo-name" style="font-size: 65px; margin-left: -5px;">Part A</h1>

                    <h2>Instructions</h2>
                        Please rate the following statements using the scale below.
                        <ul> 
                            <li>0. NOT LIKE ME at all</li>
                            <li>1. A BIT like me</li>
                            <li>2. SOMEWHAT like me</li>
                            <li>3. QUITE like me</li>
                            <li>4. VERY CLOSE to me</li>
                            <li>5. SPOT ON - this is me!</li>
                        </ul>


                    <div class="ibox float-e-margins" style="margin-top: 40px">
                        <div class="ibox-content">
                        @foreach($questions as $key => $question)
                            <div class="form-group">
                                <label class="control-label" for="{{ $key+1 }}">{{ $key+1 }}. {{ $question }}</label><br/>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="0" required @if(isset($saved_input[$key+1]) && $saved_input[$key+1] == "0") checked @endif> 0. NOT LIKE ME at all
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="1" required @if(isset($saved_input[$key+1]) && $saved_input[$key+1] == "1") checked @endif> 1. A BIT like me
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="2" required @if(isset($saved_input[$key+1]) && $saved_input[$key+1] == "2") checked @endif> 2. SOMEWHAT like me
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="3" required @if(isset($saved_input[$key+1]) && $saved_input[$key+1] == "3") checked @endif> 3. QUITE like me
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="4" required @if(isset($saved_input[$key+1]) && $saved_input[$key+1] == "4") checked @endif> 4. VERY CLOSE  to me
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="5" required @if(isset($saved_input[$key+1]) && $saved_input[$key+1] == "5") checked @endif> 5. SPOT ON - this is  me!
                                </label>





                            </div>
                            @if($key < count($questions) - 1)
                                <hr>
                            @endif
                        @endforeach
                    </div>
                    <div class="panel-footer">
                        <a href="/questioner/{{ $code }}"><button type="button" class="btn btn-primary">Back</button></a>
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

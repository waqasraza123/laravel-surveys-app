@extends('layouts.auth')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form class="form" method="post" action="/questioner/{{ $code }}/submit">
                {{ csrf_field() }}



                <h1 class="logo-name" style="font-size: 65px; margin-left: -5px;">Part D</h1>

                <h2>Instructions</h2>
                When considering the relationship you have with your Financial Adviser, please rate the following statements using the scale below. Please not that you can have no more than 4 items classified in each of the categories below. (i.e. No more than 4 items classified as ‘Very Important’, no more than 4 items classified as ‘Important’ etc.)
                <ul>
                    <li>VERY IMPORTANT  - This is very important to me when working with my adviser</li>
                    <li>IMPORTANT - This is important to me when working with my adviser</li>
                    <li>SOMEWHAT IMPORTANT - This is somewhat important to me when working with my adviser</li>
                    <li>UNIMPORTANT – This is not important to me.</li>
                </ul>


                <div class="ibox float-e-margins" style="margin-top: 40px">
                    <div class="ibox-content">
                        @foreach($questions as $key => $question)
                            <div class="form-group">
                                <label class="control-label" for="{{ $key+1 }}">{{ $key+1 }}. {{ $question }}</label><br/>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="4" required @if($saved_input[$key+1] == "4") checked @endif> Very Important
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="3" required @if($saved_input[$key+1] == "3") checked @endif> Important
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="2" required @if($saved_input[$key+1] == "2") checked @endif> Somewhat Important
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="1" required @if($saved_input[$key+1] == "1") checked @endif> Unimportant
                                </label>
                            </div>
                            @if($key < count($questions) - 1)
                                <hr>
                            @endif
                        @endforeach
                    </div>
                    <div class="panel-footer">
                        <a href="/questioner/{{ $code }}/part/3"><button type="button" class="btn btn-primary">Back</button></a>
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

@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form class="form" method="post" action="/questioner/{{ $code }}/part/1">
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="text-center"><h3>Part 1</h3></div>
                        <hr>
                        <div class="text-center"><b>Instructions</b></div>
                        Please rate the following statements using the scale below.
                        <ul>
                            <li>I STRONGLY AGREE with the statement. I do this vast majority of the time.</li>
                            <li>I AGREE with the statement. I do this most of the time.</li>
                            <li>I SOMEWHAT AGREE with the statement. I do this sometimes and sometimes I don't.</li>
                            <li>I DISAGREE with the statement. I seldom do this.</li>
                            <li>I STRONGLY DISAGREE with the statement. I almost never do this, if at all.</li>
                            <li>This DOESN'T APPLY to me. I wouldn’t never even think about doing this, let alone do it.</li>
                        </ul>
                    </div>
                    <div class="panel-body">
                        @foreach($questions as $key => $question)
                            <div class="form-group">
                                <label class="control-label" for="{{ $key+1 }}">{{ $key+1 }}. {{ $question }}</label><br/>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="5" required @if($saved_input[$key+1] == "5") checked @endif> Strongly	Agree
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="4" required @if($saved_input[$key+1] == "4") checked @endif> Agree
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="3" required @if($saved_input[$key+1] == "3") checked @endif> Somewhat	Agree
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="2" required @if($saved_input[$key+1] == "2") checked @endif> Disagree
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="1" required @if($saved_input[$key+1] == "1") checked @endif> Strongly Disagree
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="0" required @if($saved_input[$key+1] == "0") checked @endif> Doesn't Apply
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
@endsection

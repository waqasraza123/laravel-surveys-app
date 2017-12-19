@extends('layouts.auth')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="container">

        <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <form class="form-horizontal" method="post">
                {{ csrf_field() }}

                <h1 class="logo-name" style="font-size: 65px; margin-left: -5px;">Part E</h1>

                <h2>Instructions</h2>
                    Please rate the following statements using the scale below.
                    <ul> 
                        <li>1. A BIT like me</li>
                        <li>2. SOMEWHAT like me</li>
                        <li>3. A LOT like me</li>
                    </ul>

                <div class="ibox float-e-margins" style="margin-top: 40px">
                    <div class="ibox-content">
                        @foreach($questions as $key => $question)
                            <div class="form-group">
                                <label class="control-label" for="{{ $key+1 }}">{{ $key+1 }}. {{ $question }}</label><br/>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="1" required @if(isset($saved_input[$key+1]) && $saved_input[$key+1] == "1") checked @endif> 1. A BIT like me
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="2" required @if(isset($saved_input[$key+1]) && $saved_input[$key+1] == "2") checked @endif> 2. SOMEWHAT like me
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="3" required @if(isset($saved_input[$key+1]) && $saved_input[$key+1] == "3") checked @endif> 3. A LOT like me
                                </label>
                            </div>
                            <hr>
                        @endforeach
                        <div class="form-group">
                            <label for="9">9. Of the statements above, please select the statement that is most like you</label>
                            <select name="9" class="form-control">
                                @foreach($questions as $key => $question)
                                    <option value="{{ $key+1 }}">{{ $question }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a href="../part/4"><button type="button" class="btn btn-primary">Back</button></a>
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

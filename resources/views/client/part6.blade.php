@extends('layouts.auth')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form class="form" id="part4Form" method="post" action="/questioner/{{ $code }}/part/6">
                {{ csrf_field() }}



                <h1 class="logo-name" style="font-size: 65px; margin-left: -5px;">Part F</h1>

                <h2>Instructions</h2>
                The relationship you have with your Financial Adviser is important. Please rate the following statements using the scale below.
                Whilst all the statements presented are important to some degree, we are seeking to identify those that are most important for you.
                Please note you can only use each scorig option (i.e. Most important, important and less important up to four (4) times only).


                <br/><br/>



                <div class="ibox float-e-margins" style="margin-top: 40px">
                    <div class="ibox-content">
                        @foreach($questions as $key => $question)
                            <div class="form-group">
                                <label class="control-label" for="{{ $key+1 }}">{{ $key+1 }}. {{ $question }}</label><br/>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="4" onclick="clicked(4, {{ $key+1 }});" required @if($saved_input[$key+1] == "4") checked @endif> <b>Most Important</b> - This is most important when selecting my Financial Adviser
                                </label><br/>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="3" onclick="clicked(3, {{ $key+1 }});" required @if($saved_input[$key+1] == "3") checked @endif> <b>Important</b> - This is important when selecting my Financial Adviser
                                </label><br/>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="2" onclick="clicked(2, {{ $key+1 }});" required @if($saved_input[$key+1] == "2") checked @endif> <b>Less Important</b> - Whilst this is important, it is less important than other statements presented in this section.
                                </label>
                                {{--<label class="radio-inline">--}}
                                    {{--<input type="radio" name="{{ $key+1 }}" value="1" onclick="clicked(1, {{ $key+1 }});" required @if($saved_input[$key+1] == "1") checked @endif> Unimportant--}}
                                {{--</label>--}}
                            </div>
                            @if($key < count($questions) - 1)
                                <hr>
                            @endif
                        @endforeach
                    </div>
                    <div class="panel-footer">
                        <a href="/questioner/{{ $code }}/part/5"><button type="button" class="btn btn-primary">Back</button></a>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.min.css">
<script>
    var arr = [0, 0, 0, 0];
    var old = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

    function clicked(opt, row){
        if (old[row-1] != opt){
            if(old[row-1] != 0){
                arr[old[row-1]-1]--;
                $("input[type=radio][value=" + old[row-1] + "]").prop("disabled",false);
            }
            old[row-1] = opt;
            arr[opt-1]++;
        }


        if(arr[opt-1] >= 4){
            $("input[type=radio][value=" + opt + "]:not(:checked)").prop("disabled",true);
        }
    }
</script>
@endsection

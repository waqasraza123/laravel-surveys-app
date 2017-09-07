@extends('layouts.auth')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form class="form" id="part4Form" method="post" action="/questioner/{{ $code }}/submit">
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
                                    <input type="radio" name="{{ $key+1 }}" value="4" onclick="return clicked(4, {{ $key+1 }});" required @if($saved_input[$key+1] == "4") checked @endif> Very Important
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="3" onclick="return clicked(3, {{ $key+1 }});" required @if($saved_input[$key+1] == "3") checked @endif> Important
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="2" onclick="return clicked(2, {{ $key+1 }});" required @if($saved_input[$key+1] == "2") checked @endif> Somewhat Important
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="{{ $key+1 }}" value="1" onclick="return clicked(1, {{ $key+1 }});" required @if($saved_input[$key+1] == "1") checked @endif> Unimportant
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.min.css">
<script>
    var arr = [0, 0, 0, 0];
    var old = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

    function clicked(opt, row){
        if(arr[opt-1] >= 4){
            var text;
            switch(opt){
                case 4:
                    text = "Very Important"; break;
                case 3:
                    text = "Important"; break;
                case 2:
                    text = "Somewhat Important"; break;
                case 1:
                    text = "Unimportant"; break;
            }
            swal(
              'Error!',
              "you have already selected {" + text + "} 4 times",
              'warning'
            );
            return false;
        }
        else if (old[row-1] != opt){
            if(old[row-1] != 0){
                arr[old[row-1]-1]--;
            }
            old[row-1] = opt;
            arr[opt-1]++;
            return true;
        }
    }
</script>
@endsection

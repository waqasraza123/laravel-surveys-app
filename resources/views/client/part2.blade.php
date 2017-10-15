@extends('layouts.auth')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="container">

        <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <form class="form" method="post" action="/questioner/{{ $code }}/part/2">
                {{ csrf_field() }}

                <h1 class="logo-name" style="font-size: 65px; margin-left: -5px;">Part B</h1>

                <h2>Instructions</h2>
                Please look at the following pairs of words and choose the word that is MORE LIKE YOU.


                <div class="ibox float-e-margins" style="margin-top: 40px">
                    <div class="ibox-content" style="padding:0px">
                            <div class="form-group">
                                <table class="table table-striped">
                                    <?php $count = 1; ?>
                                    @foreach($questions as $key => $question)
                                        <tr>
                                            <td>
                                                {{ $count++ }}
                                            </td>
                                            <td>
                                                <label class="control-label" for="{{ $key+1 }}-a">{{ $question[0] }}</label>
                                            </td>
                                            <td>
                                                <label class="radio-inline">
                                                    <input type="radio" name="{{ $key+1 }}-a" value="2" onclick="return clicked({{ $key+1 }}, 'a', 2);" required @if(isset($saved_input[($key+1) . "-a"]) && $saved_input[($key+1) . "-a"] == "2") checked @endif> Much Like Me
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="{{ $key+1 }}-a" value="1" onclick="return clicked({{ $key+1 }}, 'a', 1);" required @if(isset($saved_input[($key+1) . "-a"]) && $saved_input[($key+1) . "-a"] == "1") checked @endif> Somewhat Like Me
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="{{ $key+1 }}-a" value="0" onclick="return clicked({{ $key+1 }}, 'a', 0);" required @if(isset($saved_input[($key+1) . "-a"]) && $saved_input[($key+1) . "-a"] == "0") checked @endif> Not At All
                                                </label>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                {{ $count++ }}
                                            </td>
                                            <td>
                                                <label class="control-label" for="{{ $key+1 }}-b">{{ $question[1] }}</label>
                                            </td>
                                            <td>
                                                <label class="radio-inline">
                                                    <input type="radio" name="{{ $key+1 }}-b" value="2" onclick="return clicked({{ $key+1 }}, 'b', 2);" required @if(isset($saved_input[($key+1) . "-b"]) && $saved_input[($key+1) . "-b"] == "2") checked @endif> Much Like Me
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="{{ $key+1 }}-b" value="1" onclick="return clicked({{ $key+1 }}, 'b', 1);" required @if(isset($saved_input[($key+1) . "-b"]) && $saved_input[($key+1) . "-b"] == "1") checked @endif> Somewhat Like Me
                                                </label>
                                                <label class="radio-inline">
                                                    <input type="radio" name="{{ $key+1 }}-b" value="0" onclick="return clicked({{ $key+1 }}, 'b', 0);" required @if(isset($saved_input[($key+1) . "-b"]) && $saved_input[($key+1) . "-b"] == "0") checked @endif> Not At All
                                                </label>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                    </div>
                    <div class="panel-footer">
                        <a href="/questioner/{{ $code }}/part/1"><button type="button" class="btn btn-primary">Back</button></a>
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
    var selected = {};
    function clicked(key, pair, option){
        if(pair == 'a'){
            if(selected[key+'b'] == option){
                swal(
                  'Alert!',
                  "You cannot select same option for both words of pair.",
                  'Please choose another response.'
                );
                return false;
            }
        }
        else{
            if(selected[key+'a'] == option){
                swal(
                  'Alert!',
                  "You cannot select same option for both words of pair.",
                  'Please choose another response.'
                );
                return false;
            }
        }

        selected[key+pair] = option;
        return true;
    }
</script>
@endsection

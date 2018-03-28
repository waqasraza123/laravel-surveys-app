@extends('layouts.auth')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <form class="form" id="part7Form" method="post" action="../submit">
                        {{ csrf_field() }}



                        <h1 class="logo-name" style="font-size: 65px; margin-left: -5px;">Part G</h1>

                        <h2>Instructions</h2>
                        The relationship you have with your Financial Adviser is important. Please rate the following statements using the scale below.
                        Whilst all the statements presented are important to some degree, we are seeking to identify those that are most important for you.
                        Please note you can only use each scorig option (i.e. Most important, important and less important up to four (4) times only).<br/><br/>
                        Please review all statements PRIOR to making your selections.<br/>
                        Then, please select the 4 statements that you feel are 'most important' for developing trust between you and your financial adviser.<br/>
                        Next, please select the 4 statements that you feel are 'important' for developing trust between you and your financial adviser.<br/>
                        Finally, please select the 4 statements that you feel are the 'least important' for developing trust between you and your financial adviser.<br/>



                        <div class="ibox float-e-margins" style="margin-top: 40px">
                            <div class="ibox-content">
                                @foreach($questions as $key => $question)
                                    <div class="form-group">
                                        <label class="control-label" for="{{ $key+1 }}">{{ $key+1 }}. {{ $question }}</label><br/>
                                        <label class="radio-inline">
                                            <input type="radio" class="radio-button" name="{{ $key+1 }}" value="4"   required @if($saved_input[$key+1] == "4") checked @endif> <b>Most Important</b> - This is most important when selecting my Financial Adviser.
                                        </label><br/>
                                        <label class="radio-inline">
                                            <input type="radio" class="radio-button" name="{{ $key+1 }}" value="3"  required @if($saved_input[$key+1] == "3") checked @endif> <b>Important</b> - This is important when selecting my Financial Adviser.
                                        </label><br/>
                                        <label class="radio-inline">
                                            <input type="radio" class="radio-button" name="{{ $key+1 }}" value="2"  required @if($saved_input[$key+1] == "2") checked @endif> <b>Less Important</b> - Whilst this is important, it is less important than other statements presented in this section.
                                        </label>
                                        {{--<label class="radio-inline">--}}
                                        {{--<input type="radio" class="radio-button" name="{{ $key+1 }}" value="1"  required @if($saved_input[$key+1] == "1") checked @endif> Unimportant--}}
                                        {{--</label>--}}
                                    </div>
                                    @if($key < count($questions) - 1)
                                        <hr>
                                    @endif
                                @endforeach
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.6.10/sweetalert2.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>
        var arr = [0, 0, 0, 0];
        var old = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        var radio_button=false;

        $('.radio-button').on("click", function(event){
            var this_input=$(this);
            var opt = $(this).val();
            var row = this.name;
            if (this_input.attr('checked1')=='11') {
                this_input.attr('checked1','11')
            } else {
                this_input.attr('checked1','22')
            }

            if (this_input.attr('checked1')=='11') {
                this_input.prop('checked', false);
                this_input.attr('checked1','22')
                old[row-1] = 0;
                clicked(opt, row, 'reclicked');
            } else {
                $('input[name=' + row + ']').attr('checked1', '22');
                this_input.prop('checked', true);
                this_input.attr('checked1','11');
                clicked(opt, row, 'firstclicked');
            }

        });

        function clicked(opt, row, actionType){
            if (old[row-1] != opt) {
                if(actionType == 'firstclicked') {
                    if (old[row-1] != 0){
                        arr[old[row-1]-1]--;
                        $("input[type=radio][value=" + old[row-1] + "]").prop("disabled",false);
                    }
                    old[row-1] = opt;
                    arr[opt-1]++;
                } else if (actionType == 'reclicked') {
                    arr[opt-1]--;
                }
            }
            if(arr[opt-1] < 4){
                $("input[type=radio][value=" + opt + "]:not(:checked)").prop("disabled", false);
            }

            if(arr[opt-1] >= 4){
                $("input[type=radio][value=" + opt + "]:not(:checked)").prop("disabled",true);
            }
        }
    </script>
@endsection

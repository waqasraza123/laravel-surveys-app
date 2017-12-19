@extends('layouts.auth')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="container">

        <div class="row">

        <div class="col-md-10 col-md-offset-1">
            <form class="form" method="post">
                {{ csrf_field() }}

                <h1 class="logo-name" style="font-size: 65px; margin-left: -5px;">Part B</h1>

                <h2>Instructions</h2>
                Please read the following pairs of words and select the word that is MOST LIKE YOU.


                <div class="ibox float-e-margins" style="margin-top: 40px">
                    <div class="ibox-content">
                        @foreach($questions as $key => $question)
                            <div class="form-group">
                                <table>
                                    <tr>
                                        <td>
                                            <label class="control-label" for="{{ $key+1 }}">{{ $key+1 }}.</label>
                                        </td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <label class="radio-inline">
                                                <input type="radio" name="{{ $key+1 }}" value="1" required @if($saved_input[$key+1] == "1") checked @endif> {{ $question[0] }}
                                            </label>
                                        </td>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <label class="radio-inline">
                                                <input type="radio" name="{{ $key+1 }}" value="2" required @if($saved_input[$key+1] == "2") checked @endif> {{ $question[1] }}
                                            </label>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            @if($key < count($questions) - 1)
                                <hr>
                            @endif
                        @endforeach
                    </div>
                    <div class="panel-footer">
                        <a href="../part/1"><button type="button" class="btn btn-primary">Back</button></a>
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

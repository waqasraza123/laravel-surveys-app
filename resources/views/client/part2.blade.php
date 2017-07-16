@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form class="form" method="post" action="/questioner/{{ $code }}/part/2">
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="text-center"><h3>Part 2</h3></div>
                        <hr>
                        Please look at the following pairs of words and choose the word that is MORE LIKE YOU.
                    </div>
                    <div class="panel-body">
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
@endsection

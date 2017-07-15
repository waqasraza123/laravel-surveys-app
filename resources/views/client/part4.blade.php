@extends('layouts.client')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <form method="post" action="/questioner/{{ $code }}/submit">
                {{ csrf_field() }}
                <div class="panel panel-default">
                    <div class="panel-heading text-center">
                        <b>Part 4</b>
                    </div>
                    <div class="panel-body">
                        asdf
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
@endsection

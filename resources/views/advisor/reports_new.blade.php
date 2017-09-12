@extends('layouts.app')

@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-6">

            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Invite Client </h5>
                </div>
                <div class="ibox-content">
                @if ($errors->has('success'))
                    <div class="alert alert-success">
                        <strong>{{ $errors->first('success') }}</strong>
                    </div>
                @endif
                @if ($errors->has('error'))
                    <div class="alert alert-warning">
                        <strong>{{ $errors->first('error') }}</strong>
                    </div>
                @endif
                @if ($tokens > 0)
                    <form class="form-horizontal" method="post">
                        {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                <label for="first_name" class="col-sm-4 control-label">Client First Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" required>
                                    @if ($errors->has('first_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                <label for="last_name" class="col-sm-4 control-label">Client Last Name</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" required>
                                    @if ($errors->has('last_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-sm-4 control-label">Client Email</label>
                                <div class="col-sm-8">
                                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        <div class="form-group text-right" style="margin-right: 0px">
                                <button type="submit" class="btn btn-primary">
                                    Invite Client
                                </button>
                        </div>
                    </form>
                @else
                    <div class="box-body">
                        <h4>You cannot create any report as your Firm's token balance is 0.</h4>
                    </div>
                @endif
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Profile</div>

                <div class="panel-body">
                    @if ($errors->has('profileUpdated'))
                        <div class="alert alert-success">
                            <strong>{{ $errors->first('profileUpdated') }}</strong>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('profileUpdate') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $name }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email }}" disabled required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="code" class="col-md-4 control-label">Firm Code</label>

                            <div class="col-md-6">
                                <input id="code" type="text" class="form-control" name="code" value="{{ $code }}" disabled required>
                            </div>
                        </div>

                        <hr>

                        <div class="form-group{{ $errors->has('company_position') ? ' has-error' : '' }}">
                            <label for="company_position" class="col-md-4 control-label">Company Position</label>

                            <div class="col-md-6">
                                <input id="company_position" type="text" class="form-control" name="company_position" value="{{ $company_position }}" required>

                                @if ($errors->has('company_position'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company_position') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile_number') ? ' has-error' : '' }}">
                            <label for="mobile_number" class="col-md-4 control-label">Mobile</label>

                            <div class="col-md-6">
                                <input id="mobile_number" type="text" class="form-control" name="mobile_number" value="{{ $mobile_number }}" required>

                                @if ($errors->has('mobile_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('firm_name') && old('role') == 'firm' ? ' has-error' : '' }}">
                            <label for="firm_name" class="col-md-4 control-label">Firm Name</label>

                            <div class="col-md-6">
                                <input id="firm_name" type="text" class="form-control" name="firm_name" value="{{ $firm_name }}">

                                @if ($errors->has('firm_name') && old('role') == 'firm')
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firm_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('address') && old('role') == 'firm' ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ $address }}">

                                @if ($errors->has('address') && old('role') == 'firm')
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('suburb') && old('role') == 'firm' ? ' has-error' : '' }}">
                            <label for="suburb" class="col-md-4 control-label">Suburb</label>

                            <div class="col-md-6">
                                <input id="suburb" type="text" class="form-control" name="suburb" value="{{ $suburb }}">

                                @if ($errors->has('suburb') && old('role') == 'firm')
                                    <span class="help-block">
                                        <strong>{{ $errors->first('suburb') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('state') && old('role') == 'firm' ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">State</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" value="{{ $state }}">

                                @if ($errors->has('state') && old('role') == 'firm')
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('postcode') && old('role') == 'firm' ? ' has-error' : '' }}">
                            <label for="postcode" class="col-md-4 control-label">Postcode</label>

                            <div class="col-md-6">
                                <input id="postcode" type="text" class="form-control" name="postcode" value="{{ $postcode }}">

                                @if ($errors->has('postcode') && old('role') == 'firm')
                                    <span class="help-block">
                                        <strong>{{ $errors->first('postcode') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('firm_website') && old('role') == 'firm' ? ' has-error' : '' }}">
                            <label for="firm_website" class="col-md-4 control-label">Firm Website</label>

                            <div class="col-md-6">
                                <input id="firm_website" type="text" class="form-control" name="firm_website" value="{{ $firm_website }}">

                                @if ($errors->has('firm_website') && old('role') == 'firm')
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firm_website') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('firm_phone') && old('role') == 'firm' ? ' has-error' : '' }}">
                            <label for="firm_phone" class="col-md-4 control-label">Firm Phone</label>

                            <div class="col-md-6">
                                <input id="firm_phone" type="text" class="form-control" name="firm_phone" value="{{ $firm_phone }}">

                                @if ($errors->has('firm_phone') && old('role') == 'firm')
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firm_phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Change Password</div>

                <div class="panel-body">
                    @if ($errors->has('passwordChanged'))
                        <div class="alert alert-success">
                            <strong>{{ $errors->first('passwordChanged') }}</strong>
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('updatePassword') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">New Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm New Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

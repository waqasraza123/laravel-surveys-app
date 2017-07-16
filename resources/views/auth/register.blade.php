@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">

                    @if ($errors->has('error'))
                        <div class="alert alert-warning">
                            <strong>{{ $errors->first('error') }}</strong>
                        </div>
                    @endif
                    
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <hr>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

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
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <hr>

                        <div class="form-group{{ $errors->has('company_position') ? ' has-error' : '' }}">
                            <label for="company_position" class="col-md-4 control-label">Company Position</label>

                            <div class="col-md-6">
                                <input id="company_position" type="text" class="form-control" name="company_position" value="{{ old('company_position') }}" required>

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
                                <input id="mobile_number" type="text" class="form-control" name="mobile_number" value="{{ old('mobile_number') }}" required>

                                @if ($errors->has('mobile_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="role" class="col-md-4 control-label">Role</label>

                            <div class="col-md-6">
                                <select class="form-control" id="role" name="role" onchange="role_changed(this);">
                                    <option value="advisor">Advisor</option>
                                    @if (old('role') == 'firm')
                                        <option value="firm" selected>Firm</option>
                                    @else
                                        <option value="firm">Firm</option>
                                    @endif

                                </select>
                            </div>
                        </div>

                        <div id="div_advisor">

                            <div class="form-group{{ $errors->has('firm_code') && old('role') == 'advisor' ? ' has-error' : '' }}">
                                <label for="firm_code" class="col-md-4 control-label">Firm Code</label>

                                <div class="col-md-6">
                                    <input id="firm_code" type="text" class="form-control" name="firm_code" value="{{ old('firm_code') }}" required>

                                    @if ($errors->has('firm_code') && old('role') == 'advisor')
                                        <span class="help-block">
                                            <strong>{{ $errors->first('firm_code') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div id="div_firm" style="display:none">

                            <div class="form-group{{ $errors->has('firm_name') && old('role') == 'firm' ? ' has-error' : '' }}">
                                <label for="firm_name" class="col-md-4 control-label">Firm Name</label>

                                <div class="col-md-6">
                                    <input id="firm_name" type="text" class="form-control" name="firm_name" value="{{ old('firm_name') }}">

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
                                    <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}">

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
                                    <input id="suburb" type="text" class="form-control" name="suburb" value="{{ old('suburb') }}">

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
                                    <input id="state" type="text" class="form-control" name="state" value="{{ old('state') }}">

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
                                    <input id="postcode" type="text" class="form-control" name="postcode" value="{{ old('postcode') }}">

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
                                    <input id="firm_website" type="text" class="form-control" name="firm_website" value="{{ old('firm_website') }}">

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
                                    <input id="firm_phone" type="text" class="form-control" name="firm_phone" value="{{ old('firm_phone') }}">

                                    @if ($errors->has('firm_phone') && old('role') == 'firm')
                                        <span class="help-block">
                                            <strong>{{ $errors->first('firm_phone') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                    <script>
                        @if (old('role') == 'firm')
                            show_firm();
                        @endif
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

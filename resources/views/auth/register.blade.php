@extends('layouts.auth')

<style>


    /*.gray-bg, .bg-muted {*/
        /*background-color: #2f4050!important;*/
    /*}*/

    .gray-bg, .bg-muted {
        background: url(images/652568722.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .inside {
        background: #18a689;
        padding: 0px 50px 50px;
    }

    h2 {
        color: #fff!important;
        padding: 30px 0px;
    }

    .btn-primary {
        background-color: #1ab394;
        border-color: #fff!important;
        color: #FFFFFF;
    }

</style>

@section('content')

    <div class="container">


    <div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div  style="margin-bottom: 40px">

                <img src="images/logoi.png" alt="" width="220px">
                <h1 style="margin-top:0px" class="logo-name">Investor DNA</h1>

            </div>

            <div class="inside">

            <h2>Create an account</h2>
                <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}


                <div class="form-group">
                        <select class="form-control" id="role" name="role" onchange="role_changed(this);">
                            {{--<option value="">Select Account Type</option>--}}
                            <option value="advisor">Financial Adviser</option>

                            @if (old('role') == 'firm')
                                <option value="firm" selected>Financial Practice</option>
                            @else
                                <option value="firm">Financial Practice</option>
                            @endif

                        </select>
                </div>

                <div id="div_advisor">

                    <div class="firm_code_outer form-group{{ $errors->has('firm_code') && old('role') == 'advisor' ? ' has-error' : '' }}">

                            <input id="firm_code" placeholder="Financial Practice Code" type="text" class="form-control" name="firm_code" value="{{ old('firm_code') }}" required>

                            @if ($errors->has('firm_code') && old('role') == 'advisor')
                                <span class="help-block">
                                            <strong>{{ $errors->first('firm_code') }}</strong>
                                        </span>
                            @endif
                    </div>

                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                        <input id="name" placeholder="Personal Name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                        <input id="email" placeholder="Email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('mobile_number') ? ' has-error' : '' }}">

                        <input id="mobile_number" placeholder="Mobile" type="text" class="form-control" name="mobile_number" value="{{ old('mobile_number') }}" required>

                        @if ($errors->has('mobile_number'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('mobile_number') }}</strong>
                                    </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('company_position') ? ' has-error' : '' }}">

                        <input id="company_position" placeholder="Company Position" type="text" class="form-control" name="company_position" value="{{ old('company_position') }}" required>

                        @if ($errors->has('company_position'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('company_position') }}</strong>
                                    </span>
                        @endif
                </div>

                <div id="div_firm" style="display:none">

                    <div class="form-group{{ $errors->has('firm_name') && old('role') == 'firm' ? ' has-error' : '' }}">

                            <input id="firm_name" placeholder="Financial Practice Name" type="text" class="form-control" name="firm_name" value="{{ old('firm_name') }}">

                            @if ($errors->has('firm_name') && old('role') == 'firm')
                                <span class="help-block">
                                            <strong>{{ $errors->first('firm_name') }}</strong>
                                        </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('address') && old('role') == 'firm' ? ' has-error' : '' }}">

                            <input id="address" placeholder="Address" type="text" class="form-control" name="address" value="{{ old('address') }}">

                            @if ($errors->has('address') && old('role') == 'firm')
                                <span class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('suburb') && old('role') == 'firm' ? ' has-error' : '' }}">

                            <input id="suburb" placeholder="Suburb" type="text" class="form-control" name="suburb" value="{{ old('suburb') }}">

                            @if ($errors->has('suburb') && old('role') == 'firm')
                                <span class="help-block">
                                            <strong>{{ $errors->first('suburb') }}</strong>
                                        </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('state') && old('role') == 'firm' ? ' has-error' : '' }}">

                        <select class="form-control" id="state" name="state">
                            <option value="ACT">ACT</option>
                            <option value="NSW">NSW</option>
                            <option value="NT">NT</option>
                            <option value="QLD">QLD</option>
                            <option value="SA">SA</option>
                            <option value="TAS">TAS</option>
                            <option value="VIC">VIC</option>
                            <option value="WA">WA</option>

                        </select>

                            @if ($errors->has('state') && old('role') == 'firm')
                                <span class="help-block">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('postcode') && old('role') == 'firm' ? ' has-error' : '' }}">

                            <input id="postcode" placeholder="Postcode" type="text" class="form-control" name="postcode" value="{{ old('postcode') }}">

                            @if ($errors->has('postcode') && old('role') == 'firm')
                                <span class="help-block">
                                            <strong>{{ $errors->first('postcode') }}</strong>
                                        </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('firm_website') && old('role') == 'firm' ? ' has-error' : '' }}">

                            <input id="firm_website" placeholder="Website" type="text" class="form-control" name="firm_website" value="{{ old('firm_website') }}">

                            @if ($errors->has('firm_website') && old('role') == 'firm')
                                <span class="help-block">
                                            <strong>{{ $errors->first('firm_website') }}</strong>
                                        </span>
                            @endif
                    </div>

                    <div class="form-group{{ $errors->has('firm_phone') && old('role') == 'firm' ? ' has-error' : '' }}">

                            <input id="firm_phone" placeholder="Phone Number (Including area code)" type="text" class="form-control" name="firm_phone" value="{{ old('firm_phone') }}">

                            @if ($errors->has('firm_phone') && old('role') == 'firm')
                                <span class="help-block">
                                            <strong>{{ $errors->first('firm_phone') }}</strong>
                                        </span>
                            @endif
                    </div>


                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                        <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>
                        <em style="color: #fff">Min 8 characters and must include uppercase letter and a number</em>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                </div>

                <div class="form-group">

                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                </div>




                <div class="form-group" style="margin-bottom: 30px">
                    <div class="checkbox i-checks"><label style="padding-top: 5px"> <input type="checkbox" id="terms"  required><i></i> </label>


                    <span style="color: #fff; cursor: pointer;" data-toggle="modal" data-target="#myModal">
                                Click here to read and agree to the terms & conditions
                            </span>
                    </div>

                    {{--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>--}}


                </div>




                    <div class="form-group">

                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>
                    </div>


                <p class="text-muted text-center" style="color:#fff"><small>Already have an account?</small></p>

                    <div class="form-group">

                    <a class="btn btn-sm btn-white btn-block" href="{{ url('/login') }}">Login</a>
                    </div>

            </form>




                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Terms & Conditions</h4>
                            </div>
                            <div class="modal-body">
                                <p>Terms to go here....</p>
                            </div>
                            <div class="modal-footer">
                                <div class="checkbox i-checks"><label> <input type="checkbox" id="agree" required><i></i><span>I Agree to the Terms & Conditions</span> </label></div>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>




            </div>

                <script>
                @if (old('role') == 'firm')
                    show_firm();
                @endif
            </script>
            <p class="m-t"> <small>Investor DNA &copy; 2018</small> </p>
        </div>
    </div>

</div>
@endsection
@section('footer-scripts')
    <script>
        /*validate the practice code*/
        $("#firm_code").change(function () {
            var practiceCode = $(this).val()
            $.ajax({
                url: '{{route('practice-code')}}',
                data: {'firm_code': practiceCode, "_token": "{{ csrf_token() }}"},
                type: 'POST',
                success: function (data) {
                    //code did not match
                    if(data != 0){
                        $(".firm_code_outer").after("<div class='form-group firm-name-append-dynamic'><input type='text' name='firm_name' id='firm_name' value='" + data + "' class='form-control' placeholder='Firm Name' required readonly></div>")
                    }
                    else{
                        $(".firm-name-append-dynamic").remove()
                    }
                },
                error: function (error) {

                }
            })
        })




            $("#agree").change(function() {
                if(this.checked) {
                    $('#terms').prop('checked', true);
                }
            });


            $("#agree").change(function() {
                if(!this.checked) {
                    $('#terms').prop('checked', false);
                }
            });

    </script>
@endsection

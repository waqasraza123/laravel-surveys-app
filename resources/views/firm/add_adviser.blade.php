@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="middle-box text-center loginscreen   animated fadeInDown">
            <div>

                <div class="inside">

                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('firm_add') }}">
                        {{ csrf_field() }}



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



                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <input id="password" placeholder="Password" type="password" class="form-control" name="password" required>
                            <em>Min 8 characters and must include uppercase letter and a number</em>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">

                            <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary block full-width m-b">Register</button>
                        </div>


                    </form>

                </div>

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
    </script>
@endsection

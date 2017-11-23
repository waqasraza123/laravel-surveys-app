<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <script src="{{ asset('js/script.js') }}"></script>



    <link rel="stylesheet" href="{!! asset('theme/css/vendor.css') !!}" />
    <link rel="stylesheet" href="{!! asset('theme/css/app.css') !!}" />
    <link rel="stylesheet" href="{!! asset('css/custom.css') !!}" />

    <link href="{!! asset('theme/css/plugins/datapicker/datepicker3.css') !!}" rel="stylesheet">
    <link href="{!! asset('theme/css/plugins/jasny/jasny-bootstrap.min.css') !!}" rel="stylesheet">
    <link href="{!! asset('theme/css/plugins/dataTables/datatables.min.css') !!}" rel="stylesheet">
    <script src="https://use.fontawesome.com/a086f7a707.js"></script>



</head>
<body>



<!-- Wrapper-->
<div id="wrapper">

    <!-- Navigation -->
    @include('layouts.navigation')

    <!-- Page wraper -->
    <div id="page-wrapper" class="gray-bg">

        <!-- Page wrapper -->
        @include('layouts.topnavbar')

        <!-- Page wrapper -->
        @include('layouts.sub')


        <!-- Main view  -->
        @yield('content')


        <!-- Footer -->
        @include('layouts.footer')

    </div>
    <!-- End page wrapper-->

</div>
<!-- End wrapper-->

<script src="{!! asset('theme/js/app.js') !!}" type="text/javascript"></script>

<!-- Data picker -->
<script src="{!! asset('theme/js/plugins/datapicker/bootstrap-datepicker.js') !!}"></script>
<script src="{!! asset('theme/js/plugins/dataTables/datatables.min.js') !!}"></script>
<script src="{!! asset('theme/js/plugins/jasny/jasny-bootstrap.min.js') !!}"></script>

<!-- Custom and plugin javascript -->
<script src="{!! asset('theme/js/inspinia.js') !!}"></script>







    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}"></script>--}}

@if (session()->has('success'))
    <script>
        $('div.alert').delay(4000).slideUp(300);
    </script>
@endif
<script>
    if(($('.alert')).length > 0){
        $('.alert').delay(4000).slideUp(300);
    }
</script>
</body>
</html>

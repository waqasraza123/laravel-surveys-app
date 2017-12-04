@extends('layouts.app')

@section('content')


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">

                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover dataTables-example" >
                                <thead>
                                <tr>
                                    <th>Financial Adviser</th>
                                    <th>Financial Adviser Email</th>
                                    <th>Client Name</th>
                                    <th>Client Email</th>
                                    <th>Date</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count = 1; ?>
                                @foreach($entries as $entry)
                                    <tr>
                                        <td>{{ $entry["advisor_name"] }}</td>
                                        <td>{{ $entry["advisor_email"] }}</td>
                                        <td>{{ $entry["first_name"] }} {{ $entry["last_name"] }}</td>
                                        <td>{{ $entry["email"] }}</td>
                                        <td>{{ $entry["created_at"] }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Custom and plugin javascript -->
    <script src="{!! asset('theme/js/app.js') !!}" type="text/javascript"></script>
    <script src="{!! asset ('theme/js/inspinia.js') !!}"></script>
    <script src="{!! asset ('theme/js/plugins/dataTables/datatables.min.js') !!}"></script>


    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                pageLength: 10,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                        customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                .addClass('compact')
                                .css('font-size', 'inherit');
                        }
                    }
                ]

            });

        });

    </script>


@endsection

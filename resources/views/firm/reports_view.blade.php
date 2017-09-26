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
                                    <th>Report ID</th>
                                    <th>Completion Date</th>
                                    <th>Client Name</th>
                                    <th>Advisor Name</th>
                                    <th>Score</th>
                                    <th>Report</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count = 1; ?>
                                @foreach($reports as $report)
                                    <tr>
                                        <td>{{ $report["id"] }}</td>
                                        <td>
                                            @if($report["completed"])
                                                {{ $report["updated_at"] }}
                                            @else
                                                Not Completed
                                            @endif
                                        </td>
                                        <td>{{ $report["first_name"] }} {{ $report["last_name"] }}</td>
                                        <td>{{ $report["advisor_name"] }}</td>
                                        <td>
                                            @if($report["completed"])
                                                {{ $report["score"] }}
                                            @else
                                                Not Completed
                                            @endif
                                        </td>
                                        <td>
                                            @if($report["completed"])
                                                <a target="_blank" href="/reports/view/{{ $report['code'] }}">View Report</a>
                                            @else
                                                Not Completed
                                            @endif
                                        </td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Report ID</th>
                                    <th>Completion Date</th>
                                    <th>Client Name</th>
                                    <th>Advisor Name</th>
                                    <th>Score</th>
                                    <th>Report</th>
                                </tr>
                                </tfoot>
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


{{--<script>--}}
    {{--$(function () {--}}
        {{--$('#reports').DataTable({--}}
            {{--"paging": true,--}}
            {{--"lengthChange": false,--}}
            {{--"searching": true,--}}
            {{--"ordering": true,--}}
            {{--"info": true,--}}
            {{--"autoWidth": false--}}
        {{--});--}}
    {{--});--}}
{{--</script>--}}

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

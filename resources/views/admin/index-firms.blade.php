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
                                    <th>Register Date</th>
                                    <th>Name</th>
                                    <th>Firm Name</th>
                                    <th>Firm Code</th>
                                    <th>Reports</th>
                                    <th>Token Balance</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($firms as $firm)
                                    <tr>
                                        <td>{{ \Carbon\Carbon::parse($firm["created_at"])->format('d-m-Y') }}</td>
                                        <td>{{ $firm["name"] }}</td>
                                        <td>{{ $firm["firm_name"] }}</td>
                                        <td>{{ $firm["code"] }}</td>
                                        <td><a href="/reports/view?advisor={{ $firm['id'] }}">{{ $firm["total_reports"] }}</a></td>
                                        <td>{{ $firm["tokens_available"] }}</td>
                                        <td> <a href="{{route('firms.edit', ['id' => $firm['id']])}}" class="btn btn-white btn-bitbucket">
                                                <i class="fa fa-pencil"></i>
                                            </a>
                                            <a class="btn btn-white btn-bitbucket">
                                                <i class="fa fa-ban"></i>
                                            </a>
                                            <a class="btn btn-white btn-bitbucket" onclick="deleteFirm({{ $firm["id"] }}, '{{ $firm["name"] }}')">
                                                <i class="fa fa-trash"></i>
                                            </a>
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
        $(function () {
            $('#advisors_approved').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });

        function deleteFirm(id, name){
            if (confirm('Are you sure you want to delete firm ' + name + '?')) {
                window.location = "/admin/firms/delete/"+id;
            }
        }
    </script>

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
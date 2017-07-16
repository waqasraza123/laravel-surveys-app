@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header text-center">
                    <h3 class="box-title">Reports</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="reports" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email Address</th>
                                <th>Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 1; ?>
                            @foreach($reports as $report)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $report["first_name"] }}</td>
                                <td>{{ $report["last_name"] }}</td>
                                <td>{{ $report["email"] }}</td>
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
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Email Address</th>
                                <th>Report</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            <!-- /.box-body -->
            </div>
          <!-- /.box -->
        </div>
    </div>
</div>
<script src="{{ asset ("/plugins/datatables/jquery.dataTables.min.js") }}"></script>
<script src="{{ asset ("/plugins/datatables/dataTables.bootstrap.min.js") }}"></script>
<script>
    $(function () {
        $('#reports').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
@endsection

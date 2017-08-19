@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header text-center">
                    <h3 class="box-title">Usage History</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="usage_history" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>Advisor Name</th>
                                <th>Advisor Email</th>
                                <th>Client Name</th>
                                <th>Client Email</th>
                                <th>Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 1; ?>
                            @foreach($entries as $entry)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $entry["advisor_name"] }}</td>
                                <td>{{ $entry["advisor_email"] }}</td>
                                <td>{{ $entry["first_name"] }} {{ $entry["last_name"] }}</td>
                                <td>{{ $entry["email"] }}</td>
                                <td>{{ $entry["created_at"] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sr.</th>
                                <th>Advisor Name</th>
                                <th>Advisor Email</th>
                                <th>Client Name</th>
                                <th>Client Email</th>
                                <th>Timestamp</th>
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
        $('#usage_history').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>
@endsection

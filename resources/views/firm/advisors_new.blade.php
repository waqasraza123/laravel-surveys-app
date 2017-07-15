@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header text-center">
                    <h3 class="box-title">New Advisors</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="advisors_new" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Mobile Number</th>
                                <th>Company Position</th>
                                <th>Approve</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($advisors as $advisor)
                            <tr>
                                <td>{{ $advisor["name"] }}</td>
                                <td>{{ $advisor["email"] }}</td>
                                <td>{{ $advisor["mobile_number"] }}</td>
                                <td>{{ $advisor["company_position"] }}</td>
                                <td><img src="{{ asset ("/images/approve.png") }}" onclick="approveAdvisor({{ $advisor["id"] }}, '{{ $advisor["name"] }}')"></td>
                                <td><img src="{{ asset ("/images/delete.png") }}" onclick="deleteAdvisor({{ $advisor["id"] }}, '{{ $advisor["name"] }}')"></td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email Address</th>
                                <th>Mobile Number</th>
                                <th>Company Position</th>
                                <th>Approve</th>
                                <th>Delete</th>
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
        $('#advisors_new').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });

    function approveAdvisor(id, name){
        if (confirm('Are you sure you want to approve advisor ' + name + '?')) {
            window.location = "/advisors/approve/"+id;
        }
    }

    function deleteAdvisor(id, name){
        if (confirm('Are you sure you want to delete advisor ' + name + '?')) {
            window.location = "/advisors/delete/"+id;
        }
    }
</script>
@endsection

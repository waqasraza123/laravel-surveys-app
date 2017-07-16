@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header text-center">
                    <h3 class="box-title">Purchase History</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="transaction_history" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Sr.</th>
                                <th>Token Amount</th>
                                <th>Rate ($/token)</th>
                                <th>Total Price ($)</th>
                                <th>Timestamp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $count = 1; ?>
                            @foreach($transactions as $transactions)
                            <tr>
                                <td>{{ $count++ }}</td>
                                <td>{{ $transactions["tokens"] }}</td>
                                <td>{{ $transactions["rate"] }}</td>
                                <td>{{ $transactions["tokens"] * $transactions["rate"] }}</td>
                                <td>{{ $transactions["created_at"] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Sr.</th>
                                <th>Token Amount</th>
                                <th>Rate ($/token)</th>
                                <th>Total Price ($)</th>
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
        $('#transaction_history').DataTable({
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

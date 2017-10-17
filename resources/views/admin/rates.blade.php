@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Add New Rate Matrix</h3><br>
                    Note:
                    <ul>
                        <li>First rate should have Start value 1.</li>
                        <li>Every successive row should have Start value one greater than the End value of previous row.</li>
                        <li>If firm enters purchase number greater then the End value of last row then last row's rate will be applied.</li>
                        <li>Firms cannot purchase tokens if no rate matrix is present</li>
                    </ul>
                </div>
                @if ($errors->has('success'))
                    <div class="alert alert-success">
                        <strong>{{ $errors->first('success') }}</strong>
                    </div>
                @endif
                <form class="form-horizontal" method="post" action="/rates/new">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('start') ? ' has-error' : '' }}">
                            <label for="start" class="col-sm-2 control-label">Start</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="start" name="start" min="1" value="{{ old('start') }}" required>
                                @if ($errors->has('start'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('start') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('end') ? ' has-error' : '' }}">
                            <label for="end" class="col-sm-2 control-label">End</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="end" name="end" min="1" value="{{ old('end') }}" required>
                                @if ($errors->has('end'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('end') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="form-group{{ $errors->has('rate') ? ' has-error' : '' }}">
                            <label for="rate" class="col-sm-2 control-label">Rate ($)</label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control" id="rate" name="rate" step="0.1" min="0" value="{{ old('rate') }}" required>
                                @if ($errors->has('rate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('rate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-info pull-right">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header text-center">
                    <h3 class="box-title pull-left">Token Rates</h3>
                    <form method="post" action="/rates/clear" id="clear_rates">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger pull-right" style="display:block">Clear Rates</button>
                    </form>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="rates" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Quantity Start</th>
                                <th>Quantity End</th>
                                <th>Rate ($)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rates as $rate)
                            <tr>
                                <td>{{ $rate["start"] }}</td>
                                <td>{{ $rate["end"] }}</td>
                                <td>{{ $rate["rate"] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Quantity Start</th>
                                <th>Quantity End</th>
                                <th>Rate ($)</th>
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
        $('#rates').DataTable({
            "paging": false,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });

    $(document).on("submit", "#clear_rates", function() {
        event.preventDefault();

        if (confirm('Are you sure you want to clear all rates?')) {
            this.submit();
        }
    });
</script>
@endsection

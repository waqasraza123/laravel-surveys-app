@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-info">
                <div class="box-header with-border">
                    <h3 class="box-title">Purchase Tokens</h3><br>
                </div>
                @if ($errors->has('success'))
                    <div class="alert alert-success">
                        <strong>{{ $errors->first('success') }}</strong>
                    </div>
                @endif
                @if ($errors->has('error'))
                    <div class="alert alert-warning">
                        <strong>{{ $errors->first('error') }}</strong>
                    </div>
                @endif
                @if (count($rates) != 0)
                    <form class="form-horizontal" method="post">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                                <label for="quantity" class="col-sm-2 control-label">Quantity</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="quantity" name="quantity" min="1" value="{{ old('quantity') }}" onkeyup="setPrice()" required>
                                    @if ($errors->has('quantity'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('quantity') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="price" class="col-sm-2 control-label">Price ($)</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="price" name="price" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="box-footer text-right">
                            <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="{{ env('STRIPE_PUBLIC_KEY', '') }}"
                                data-name="{{ config('app.name', 'Survey App') }}"
                                data-description="Tokens Purchase Form"
                                data-email="{{ Auth::user()->email }}"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto">
                            </script>
                        </div>
                    </form>
                @else
                    <div class="box-body">
                        <h4>You cannot purchase tokens until admin define token rates</h4>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header text-center">
                    <h3 class="box-title pull-left">Token Rates</h3>
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

    function setPrice(){
        var quantity = document.getElementById('quantity').value;
        var rate = calculate(quantity);
        document.getElementById('price').value = quantity * rate;
    }

    function calculate(quantity){
        @if (count($rates) == 1)
            @foreach($rates as $rate)
                return {{ $rate["rate"] }};
            @endforeach
        @elseif (count($rates) > 1)
            @foreach($rates as $rate)
                @if ($rate["end"] != "∞")
                    if(quantity >= {{ $rate["start"] }} && quantity <= {{ $rate["end"] }})
                        return {{ $rate["rate"] }};
                @else
                if(quantity >= {{ $rate["start"] }})
                    return {{ $rate["rate"] }};
                @endif
            @endforeach
        @endif
    }
</script>
@endsection

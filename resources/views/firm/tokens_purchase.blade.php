@extends('layouts.app')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">

        <div class="col-lg-6">

            <div class="widget style1 navy-bg">
                <div class="row">
                    <div class="col-xs-6">
                        <h1 style="margin-top: 6px">Token Balance</h1>
                    </div>
                    <div class="col-xs-6 text-right">
                        <span></span>
                        <h2 style="margin-top: 8px" class="font-bold">{{ $tokens }}</h2>
                    </div>
                </div>
            </div>


            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Purchase Tokens</h5>
                </div>

                <div class="ibox-content">
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
                                        data-name="{{ config('app.name', 'Investor DNA') }}"
                                        data-label="Buy Now"
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


        <div class="col-lg-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Token Rates</h5>
                </div>

                <div class="ibox-content">

                    <table id="rates" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Quantity From</th>
                                <th>Quantity To</th>
                                <th>Price Per Token ($)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rates as $rate)
                            <tr>
                                <td>{{ $rate["start"] }}</td>
                                <td>{{ $rate["end"] }}</td>
                                <td>${{ $rate["rate"] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Quantity From</th>
                                <th>Quantity To</th>
                                <th>Price Per Token ($)</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
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

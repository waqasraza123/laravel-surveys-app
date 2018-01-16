

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Receipt</title>

    {{--<link href="css/bootstrap.min.css" rel="stylesheet">--}}
    {{--<link href="font-awesome/css/font-awesome.css" rel="stylesheet">--}}

    {{--<link href="css/animate.css" rel="stylesheet">--}}
    {{--<link href="css/style.css" rel="stylesheet">--}}



    <style>
        body {
            font-size: 12px;
            color: #000;
            font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif!important;
        }

        tr {
            font-weight: 300;
        }

        tr.sub {
            border: none;
        }

        td {
            border: none!important;
        }

        th {
            color: #7889a1;
            padding: 3px 8px!important;
        }

        td.two, th.two {
            text-align: right!important;
        }

        td.one, th.one {
            text-align: left!important;
        }

        .table > thead > tr > th {
            vertical-align: bottom;
            border-bottom: 0px solid #ddd!important;
        }

        .table > thead > tr > th {
            vertical-align: bottom;
            border-bottom: 0px solid #ddd!important;
            font-weight: normal;
        }


        .well {
            border: none !important;
        }


        tr.list td {
            padding: 0px 8px!important;
        }

        tr.sub td {
            padding: 8px 8px 3px!important;
        }

        tr.item td{
            border-bottom: 1px dashed #ccc!important;
        }


    </style>


</head>

<body class="white-bg">
<div class="wrapper wrapper-content p-xl">
    <div class="ibox-content p-xl">
        <div class="row">
            <div class="col-lg-12">
                <table width="100%">
                    <tbody>
                    <tr>
                        <td width="50%">
                            <address style="font-style: normal">
                                <strong><b>InvestorDNA Pty Ltd</b></strong><br>
                                <em>address to go here...</em>
                            </address>
                        </td>
                        <td style="text-align: right">
                            <img src="http://128.199.88.244/images/logoi.png" width="200px" align="right">
                        </td>
                    </tr>
                    </tbody>
                </table>

                <p style="font-size: 22px; color: #000;">Receipt #: {{$transaction->id}}</p>
            </div>

            <div class="clearfix"></div>

            <div class="col-lg-12">
                <table width="100%">
                    <tbody>
                    <tr>
                        <td width="100%">
                            <address style="font-style: normal">
                                {{--<b>INVOICE TO</b><br>--}}
                                {{$user->firm_name}}<br>
                                {{$user->address}}<br>
                                {{$user->suburb}} {{$user->state}} {{$user->postcode}}
                            </address>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <hr style="margin-top: 0px;">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="table-responsive m-t">
            <table class="table invoice-table" width="100%">
                <thead style="background: #e4e7ec">
                <tr>
                    <th class="one">ACTIVITY</th>
                    <th class="two">QTY</th>
                    <th class="two">RATE</th>
                    <th class="two">AMOUNT</th>
                </tr>
                </thead>
                <tbody>
                <?php $subTotal = ($qty * $rate); ?>
                <?php $gstTotal = ($subTotal * 0.1); ?>

                    <tr class="item">
                        <td class="one" style="text-align:left; width:50%;">Token Purchase</td>
                        <td class="two">{{$qty}}</td>
                        <td class="two">${{ number_format((float)$rate, 2) }}</td>
                        <td class="two">${{ number_format((float)$subTotal, 2)}}</td>
                    </tr>


                <tr class="sub list">
                    <td></td>
                    <td>SUBTOTAL</td>
                    <td></td>
                    <td style="text-align: right">${{ number_format((float)$subTotal - $gstTotal, 2)}}</td>
                </tr>
                <tr style="border: none" class="list">
                    <td></td>
                    <td>GST</td>
                    <td></td>
                    <td style="text-align: right">${{ number_format((float)$gstTotal, 2) }}</td>
                </tr>
                <tr class="sub list">
                    <td></td>
                    <td>TOTAL</td>
                    <td></td>
                    <td style="text-align: right">${{ number_format((float)$subTotal, 2)}}</td>
                </tr>
                <tr style="border: none" class="list">
                    <td></td>
                    <td>PAID</td>
                    <td></td>
{{--                    <td style="text-align: right">${{ number_format((float)$subTotal - $totalDiscount + $gstTotal, 2) }}</td>--}}
                    <td style="text-align: right">${{ number_format((float)$subTotal, 2) }}</td>

                </tr>
                <tr style="border: none" class="list">
                    <td></td>
                    <td>BALANCE DUE</td>
                    <td></td>
                    <td style="text-align: right">$0</td>

                </tr>

                </tbody>
            </table>
        </div>
        <!-- /table-responsive -->
        <hr>
        {{--<div class="table-responsive m-t" style="margin-top: 60px">--}}
            {{--<table class="table invoice-table" width="100%">--}}
                {{--<tr>--}}
                    {{--<td>--}}
                        {{--<strong><b>EFT Details:</b></strong><br>--}}
                        {{--<em>Bank details to go here..</em><br>--}}
                        {{--<br>Ref: Invoice number--}}
                    {{--</td>--}}
                {{--</tr>--}}
            {{--</table>--}}
        {{--</div>--}}





    </div>

</div>

{{--<!-- Mainly scripts -->--}}
{{--<script src="js/jquery-3.1.1.min.js"></script>--}}
{{--<script src="js/bootstrap.min.js"></script>--}}
{{--<script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>--}}

{{--<!-- Custom and plugin javascript -->--}}
{{--<script src="js/inspinia.js"></script>--}}


</body>

</html>

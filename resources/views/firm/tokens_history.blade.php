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
                                    <th>Purchase Date</th>
                                    <th>Total Quantity Purchased</th>
                                    <th>Token Per Price</th>
                                    <th>Total Cost ex GST</th>
                                    <th>GST amount</th>
                                    <th>GRAND TOTAL GST Inclusive</th>
                                    <th>Receipt</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $count = 1; ?>
                                @foreach($transactions as $transactions)
                                    <tr>
                                        <td>{{ $transactions["created_at"] }}</td>
                                        <td>{{ $transactions["tokens"] }}</td>
                                        <td>{{ $transactions["rate"] }}</td>
                                        <td>{{ $transactions["tokens"] * $transactions["rate"] }}</td>
                                        <td>{{ ($transactions["tokens"] * $transactions["rate"]) * 0.1  }}</td>
                                        <td>{{ $transactions["tokens"] * $transactions["rate"] + ($transactions["tokens"] * $transactions["rate"]) * 0.1}}</td>
                                        <th><a class="btn btn-white btn-bitbucket" href="{{url('pdf/Receipt_'.$transactions['id'].'.pdf')}}">
                                                <i class="fa fa-download"></i>
                                            </a>
                                        </th>
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

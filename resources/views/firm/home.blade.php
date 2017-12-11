@extends('layouts.app')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
         <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Investor DNA Profiles Generated
                            <small>Last 12 months</small>
                        </h5>
                    </div>
                    <div class="ibox-content">
                        <div>
                            <canvas id="lineChart" height="50"></canvas>
                        </div>
                    </div>
                </div>
         </div>


        <div class="col-lg-3">
            <div class="ibox float-e-margins">
               <a href="/tokens/purchase">
                   <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-2 text-center">
                                <i class="fa fa-dollar fa-4x"></i>
                            </div>
                            <div class="col-xs-10 text-right">
                                <span> Token Balance </span>
                                <h2 class="font-bold">{{ $tokens_available }}</h2>
                            </div>
                        </div>
                    </div>
               </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <a href="/reports/view">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-2 text-center">
                                <i class="fa fa-file fa-4x"></i>
                            </div>
                            <div class="col-xs-10 text-right">
                                <span> Completed Investor DNA Profiles </span>
                                <h2 class="font-bold">{{ $completed_reports }}</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <a href="/advisors/new">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-2 text-center">
                                <i class="fa fa-users fa-4x"></i>
                            </div>
                            <div class="col-xs-10 text-right">
                                <span> Financial Advisers Pending Approval </span>
                                <h2 class="font-bold">{{ $pending_advisors }}</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="ibox float-e-margins">
                <a href="/advisors/approved">
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-2 text-center">
                                <i class="fa fa-users fa-4x"></i>
                            </div>
                            <div class="col-xs-10 text-right">
                                <span> Approved Financial Advisers </span>
                                <h2 class="font-bold">{{ $active_advisors }}</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>

        <div class="row">

            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Last 5 Investor DNA Profiles Generated</h5>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Client </th>
                                <th>Financial Adviser </th>
                                <th>Investor DNA Profiles</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($latest_reports as $report)
                                    <tr>
                                        <td>{{ $report->updated_at }}</td>
                                        <td>{{ $report->first_name }} {{ $report->last_name }}</td>
                                        <td>{{ $report->advisor_name }}</td>
                                        <td>
                                            <a class="btn btn-white btn-bitbucket" target="_blank" href="/reports/view/{{ $report->code }}">
                                                <i class="fa fa-download"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Top Financial Advisers by Investor DNA Profiles Generated </h5>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Financial Adviser </th>
                                <th>Investor DNA Profiles</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($top_advisors as $advisor)
                                <tr>
                                        <td>{{ $advisor->name }}</td>
                                        <td>{{ $advisor->reports }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>


</div>

    <script src="{!! asset('theme/js/plugins/Chart.min.js') !!}"></script>

    <script>
        var ctx = document.getElementById("lineChart");
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                datasets: [{
                    label: '# of Investor DNA Profiles',
                    data: [12, 19, 3, 5, 2, 3, 13, 14, 17, 20, 20, 12],
                    backgroundColor: 'rgba(26,179,148,0.5)',

                    borderColor: [
                        'rgba(255,99,132,1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });



    </script>

@endsection

@extends('layouts.app')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
         <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Reports Generated
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


        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                        <div class="row">
                            <div class="col-xs-4 text-center">
                                <i class="fa fa-rocket fa-4x"></i>
                            </div>
                            <div class="col-xs-8 text-right">
                                <span> Token Balance </span>
                                <h2 class="font-bold">432</h2>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-xs-4 text-center">
                            <i class="fa fa-file fa-4x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Completed Reports </span>
                            <h2 class="font-bold">705</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="ibox float-e-margins">
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-xs-4 text-center">
                            <i class="fa fa-users fa-4x"></i>
                        </div>
                        <div class="col-xs-8 text-right">
                            <span> Active Advisors </span>
                            <h2 class="font-bold">264</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

        <div class="row">

            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Last 5 Reports Generated</h5>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Client </th>
                                <th>Advisor </th>
                                <th>Report</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>23-06-2017</td>
                                <td>Michael De Silva</td>
                                <td>Aaron Busary</td>
                                <td>
                                    <a class="btn btn-white btn-bitbucket">
                                        <i class="fa fa-download"></i>
                                    </a>

                                </td>
                            </tr>
                            <tr>
                                <td>21-06-2017</td>
                                <td>Mario Forbes</td>
                                <td>Aaron Busary</td>
                                <td>
                                    <a class="btn btn-white btn-bitbucket">
                                        <i class="fa fa-download"></i>
                                    </a>

                                </td>
                            </tr>
                            <tr>
                                <td>19-06-2017</td>
                                <td>Krystal Lewis</td>
                                <td>Christine Fernandez</td>
                                <td>
                                    <a class="btn btn-white btn-bitbucket">
                                        <i class="fa fa-download"></i>
                                    </a>

                                </td>
                            </tr>
                            <tr>
                                <td>12-06-2017</td>
                                <td>James Lee</td>
                                <td>Mourad Benhaqi</td>
                                <td>
                                    <a class="btn btn-white btn-bitbucket">
                                        <i class="fa fa-download"></i>
                                    </a>

                                </td>
                            </tr>
                            <tr>
                                <td>01-06-2017</td>
                                <td>Daniel Smith</td>
                                <td>Aaron Busary</td>
                                <td>
                                    <a class="btn btn-white btn-bitbucket">
                                        <i class="fa fa-download"></i>
                                    </a>

                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Top Advisors by Reports Generated </h5>
                    </div>
                    <div class="ibox-content">

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Advisor </th>
                                <th>Reports</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Aaron Busary</td>
                                <td>75</td>
                            </tr>
                            <tr>
                                <td>Mourad Benhaqi</td>
                                <td>61</td>
                            </tr>
                            <tr>
                                <td>Christine Fernandez</td>
                                <td>54</td>
                            </tr>
                            <tr>
                                <td>Lindsay Kelly</td>
                                <td>31</td>
                            </tr>
                            <tr>
                                <td>Craig Hatt</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <td>Taron Silva</td>
                                <td>24</td>
                            </tr>
                            <tr>
                                <td>Mark Stewart</td>
                                <td>16</td>
                            </tr>
                            <tr>
                                <td>Kylie Hobbs</td>
                                <td>15</td>
                            </tr>


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
                    label: '# of Reports',
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

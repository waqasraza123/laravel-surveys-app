@extends('layouts.app')

@section('content')
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">

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
                            min: 1,
                            max: 20,
                            stepSize: 5,
                        }
                    }]
                }
            }
        });



    </script>

@endsection

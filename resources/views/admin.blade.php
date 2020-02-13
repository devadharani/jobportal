@extends('layouts.app')
@section('content')
    <body class=" bg-light background_img">
    <div class="row">
        <div class="container" style="float:left;">
    <h4><a href="{{url('users')}}" style="color:white;">Users</a>
        <a href="{{url('employers')}}" style="color:white;">Employers</a></h4>
        </div>
    </div>
    <div class="container">
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info" style="border-radius:8px;">
                <div class="inner">
                    <h3>{{$totalUsers}}</h3>
                    <p>Total Users</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success" style="border-radius:8px;">
                <div class="inner">
                    <h3>{{$totalEmployers}}</h3>

                    <p>Total Employers</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning" style="border-radius:8px;">
                <div class="inner">
                    <h3>{{$totalJobsPosted}}</h3>

                    <p>Total Jobs</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->


    </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <!-- /.card -->
            <div class="col-md-6">
                    <div style="float:left;" class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Jobs</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="canvas" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
            </div>
            <div class="col-md-6">
                    <div style="float:right;" class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Users and Employers</h3>
                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart">
                                <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
        </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <div style="float:left;"class="card card-danger">
                <div class="card-header">
                    <h3 class="card-title">No of applied users</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
            </div>
            </div>
            <div class="col-md-6">
                <div style="float:right;" class="card card-danger">
                    <div class="card-header">
                        <h3 class="card-title">Posted Jobs</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="doughnutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <script>
        var chartdata = {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($month); ?>,
                // labels: month,
                datasets: [
                    {
                        label: 'No of jobs',
                        backgroundColor: '#16a9a9',
                        borderWidth: 1,
                        data: <?php echo json_encode($jobs); ?>
                    }
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        }
        var ctx = document.getElementById('canvas').getContext('2d');
        new Chart(ctx, chartdata);
    </script>
    <script>
        $(function () {

            var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
            var areaChartData = {
                labels  : ['Jan', 'Feb', 'Mar', 'April', 'May', 'June', 'July','Aug','Sep','Oct','Nov','Dec'],
                datasets: [
                    {
                        label               : 'Digital Goods',
                        backgroundColor     : 'rgba(60,141,188,0.9)',
                        borderColor         : 'rgba(60,141,188,0.8)',
                        pointRadius          : false,
                        pointColor          : '#3b8bba',
                        pointStrokeColor    : 'rgba(60,141,188,1)',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(60,141,188,1)',
                        data                : <?php echo json_encode($employers); ?>
                    },
                    {
                        label               : 'Electronics',
                        backgroundColor     : 'rgba(210, 214, 222, 1)',
                        borderColor         : 'rgba(210, 214, 222, 1)',
                        pointRadius         : false,
                        pointColor          : 'rgba(210, 214, 222, 1)',
                        pointStrokeColor    : '#c1c7d1',
                        pointHighlightFill  : '#fff',
                        pointHighlightStroke: 'rgba(220,220,220,1)',
                        data                :<?php echo json_encode($user); ?>
                    },
                ]
            }
            var areaChartOptions = {
                maintainAspectRatio : false,
                responsive : true,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        gridLines : {
                            display : false,
                        }
                    }],
                    yAxes: [{
                        gridLines : {
                            display : false,
                        }
                    }]
                }
            }
            var areaChart       = new Chart(areaChartCanvas, {
                type: 'line',
                data: areaChartData,
                options: areaChartOptions
            })
        })

      //piechart

        var ctx = document.getElementById("pieChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels:<?php echo json_encode($postedJobsId); ?>,
                datasets: [{
                    backgroundColor: [
                        "#2ecc71", "#3498db", "#95a5a6", "#9b59b6", "#f1c40f", "#e74c3c", "#34495e", "#34573d", "#94b6b7",
                        "#3cee51","#1adee6","#f34de7","#16a9a9","#57789d"
                    ],
                    data: <?php echo json_encode($appliedJobs); ?>,
                }]
            }
        });

        //doughnutChart

        var ctx = document.getElementById("doughnutChart").getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels:<?php echo json_encode($postedEmployersId); ?>,
                datasets: [{
                    backgroundColor: [
                        "#2ecc71", "#3498db", "#95a5a6", "#9b59b6", "#f1c40f", "#e74c3c", "#34495e", "#34573d", "#94b6b7",
                        "#3cee51","#1adee6","#f34de7","#16a9a9","#57789d"
                    ],
                    data: <?php echo json_encode($employersJob); ?>,
                }]
            }
        });
    </script>

    @endsection
    </body>

<!DOCTYPE html>
<html lang="en">

<head>
    <!--SCRIPT-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--LOGO WEB ICON-->
    <link rel="icon" href="/assets/logo bpkad.png" type="image/png">
    <link rel="shortcut icon" href="/assets/logo bpkad.png" type="image/png">


    <!--TITLE-->
    <title>Admin Dashboard</title>
    <!--STYLE CSS/BOOSTRAP-->
    <style>
        body,
        html {
            overflow: hidden;
        }

        body {
            background-color: #f8f9fa;
        }

        .card {
            border: none;
            transition: transform 0.3s;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .card:hover {
            transform: scale(1.05);
        }

        .nav-link:hover {
            color: #007bff !important;
        }

        .bg-dark {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%, hsl(218, 41%, 35%) 15%, hsl(218, 41%, 19%) 80%, transparent 10%),
                radial-gradient(1250px circle at 100% 100%, hsl(218, 41%, 20%) 75%, transparent 10%);
        }

        .bg-glass {
            background-color: hsla(0, 0%, 100%, 0.9) !important;
            backdrop-filter: saturate(200%) blur(25px);
        }

        .chart-container {
            width: 200px;
            height: 200px;
            margin: auto;
            margin-top: 20px;
            float: left;

        }

        .line-chart-container {
            width: 400px;
            height: 200px;
            margin: auto;
            margin-top: 20px;
            float: right;

        }
    </style>

</head>

<!--STYLE CSS/BOOSTRAP-->

<body style="background-color: #f8f9fa;">

    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <!--LOGO BPKAD-->
                    <img src="assets/logo bpkad.png" alt="Logo BPKAD" width="120" height="60">
                    </a>
                    <!--GARIS PEMISAH-->
                    <hr style="border-color: #343a40; width: 80%;">
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <!--SIDEBAR-->
                        <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-light">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                        <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu"></ul>

                        </li>
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-light">
                                <i class="fs-4 bi-bootstrap"></i> <span class="ms-1 d-none d-sm-inline">Menu</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="/cekadmin" class="nav-link px-0 text-light"> <span class="d-none d-sm-inline">Check Pengaduan</span></a>
                                </li>
                                <li>
                                    <a href="/jawabadmin" class="nav-link px-0 text-light"> <span class="d-none d-sm-inline">Jawab Pengaduan</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="#" class="nav-link px-0 text-light"> <span class="d-none d-sm-inline">Product</span> 1</a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link px-0 text-light"> <span class="d-none d-sm-inline">Product</span> 2</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="nav-link px-0 align-middle text-light">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                    </ul>
                    <hr style="border-color: #343a40;">
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Admin</span>
                        </a>
                        <!--LOG OUT-->
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="/loginadmin">Log out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--ISI HALAMAN-->
            <div class="col-9 py-3">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Total Complaints</h5>
                                <p class="card-text">2 <span class="text-success">+</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Resolved Complaints</h5>
                                <p class="card-text">2 <span class="text-success">+</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Pending Complaints</h5>
                                <p class="card-text">2 <span class="text-success">+</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--GRAFIK BUNDAR-->
                <div class="chart-container">
                    <canvas id="myCircularChart"></canvas>
                </div>
                <!--GRAFIK LURUS-->
                <div class="line-chart-container">
                    <canvas id="myLineChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <script>
        var ctx = document.getElementById('myCircularChart').getContext('2d');
        var myCircularChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Total Complaints', 'Resolved Complaints', 'Pending Complaints'],
                datasets: [{
                    label: 'Complaints',
                    data: [2, 2, 2],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                cutoutPercentage: 70,
                animation: {
                    animateScale: true
                }
            }
        });

        //GARIS GRAFIK
        var ctxLine = document.getElementById('myLineChart').getContext('2d');
        var myLineChart = new Chart(ctxLine, {
            type: 'line',
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                datasets: [{
                    label: 'Example Dataset',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    fill: false,
                    borderColor: 'rgb(75, 192, 192)',
                    tension: 0.1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>

</html>
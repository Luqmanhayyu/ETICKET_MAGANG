<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>

    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <style>
            body {
                background-color: #f8f9fa;
                overflow-x: hidden;
            }

            .card {
                border: none;
                transition: transform 0.3s;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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
                background-color: rgba(255, 255, 255, 0.9) !important;
                backdrop-filter: saturate(200%) blur(25px);
            }

            .chart-container {
                width: 100%;
                max-width: 400px;
                margin: auto;
                margin-top: 20px;
                float: left;
            }

            .line-chart-container {
                width: 100%;
                max-width: 400px;
                margin: auto;
                margin-top: 20px;
                float: right;
            }

            @media (max-width: 768px) {

                .chart-container,
                .line-chart-container {
                    max-width: none;
                }
            }
        </style>
    </head>
    <!--SIDE BAR-->

    <body>
        <div class="container-fluid">
            <div class="row flex-nowrap">
                <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                    <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                        <a href="/admindashboard">
                            <img src="assets/logo bpkad.png" alt="Logo BPKAD" width="120" height="60">
                        </a>
                        <hr style="border-color: #5a6268; width: 80%;">
                        <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle text-light">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu"></ul>
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
                        </ul>
                        <!--PROFIL ADMIN-->
                        <hr style="border-color: #5a6268;">
                        <div class="dropdown pb-4">
                            <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                                <span class="d-none d-sm-inline mx-1">Admin</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                                <li><a class="dropdown-item" href="/loginadmin">Log out</a></li>

                            </ul>
                        </div>
                    </div>
                </div>

    </html>

</body>

</html>
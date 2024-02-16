<!DOCTYPE html>
<html lang="en">

<head>
    <!--SCRIPT-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--LOGO WEB ICON-->
    <link rel="icon" href="/assets/logo bpkad.png" type="image/png">
    <link rel="shortcut icon" href="/assets/logo bpkad.png" type="image/png">
    <!--TITLE-->
    <title>E-TICKET</title>
</head>
<!--STYLE CSS-->
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


    .nav-link:hover {
        color: #007bff !important;
    }

    .bg-dark {
        background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(650px circle at 0% 0%,
                hsl(218, 41%, 35%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%),
            radial-gradient(1250px circle at 100% 100%,
                hsl(218, 41%, 45%) 15%,
                hsl(218, 41%, 30%) 35%,
                hsl(218, 41%, 20%) 75%,
                hsl(218, 41%, 19%) 80%,
                transparent 100%);
    }

    .bg-glass {
        background-color: hsla(0, 0%, 100%, 0.9) !important;
        backdrop-filter: saturate(200%) blur(25px);
    }
</style>
<!--SIDE BAR-->

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
                        <a href="/admindashboard" class="nav-link px-0 align-middle text-light">
                            <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline">Dashboard</span>
                        </a>
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
                    </ul>
                    <!--PROFILE USER-->
                    <hr style="border-color: #343a40;">
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://github.com/mdo.png" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Admin</span>
                        </a>
                        <!--LOG OUT-->
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="/loginadmin">Log out</a></li>
                            <li><a class="dropdown-item" href="/settingprofileadmin">Setting Profile</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--ISI HALAMAN-->
            <div class="col py-5">
                <div class="card">
                    <div class="card-body">
                        <h2>Form Jawab Pengaduan</h2>
                        <form>
                            <div class="mb-3">
                                <label for="pengaduanTitle" class="form-label">Judul Pengaduan</label>
                                <input type="text" class="form-control" id="pengaduanTitle" name="pengaduanTitle" readonly value="Pengaduan 1">
                            </div>

                            <div class="mb-3">
                                <label for="pengaduanContent" class="form-label">Isi Pengaduan</label>
                                <textarea class="form-control" id="pengaduanContent" name="pengaduanContent" rows="5" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et eleifend ligula, vel tristique lacus. Proin in consectetur augue. Nullam id vulputate libero. Integer id quam a ligula porttitor ultrices nec at velit.</textarea>
                            </div>

                            <div class="mb-3">
                                <label for="response" class="form-label">Jawaban Anda</label>
                                <textarea class="form-control" id="response" name="response" rows="5" required></textarea>
                            </div>
                            <button type="button" class="btn btn-primary" onclick="onKirim()">Kirim Jawaban</button>
                        </form>
                    </div>
                </div>
            </div>
            <!--SCRIPT POP UP-->
            <script>
                function onKirim() {
                    alert("Jawaban Berhasil Di Kirim");

                }
            </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-sOME53wYWEFqXq8iZAkY0JP7eOzmm5CFwDFq8OtABy8uPf/7a9l+IoQ5GZhZV6wSiISdqVvNbkHyi8eWfUTiJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-pVlZr+i1I/y3z5DpKiLZYsbgFOf0PeCxpoExPZFiujmaGegVyKS0Mopx9VYSX8HT4h6nGc9SUxnZMNDtk3Ho/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-sOME53wYWEFqXq8iZAkY0JP7eOzmm5CFwDFq8OtABy8uPf/7a9l+IoQ5GZhZV6wSiISdqVvNbkHyi8eWfUTiJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cBqVbqk3F5sib9xrbzF6dhxkYY5bPb1SboF2F1n9zfuLZjX1uxbIogHwX2BohjD" crossorigin="anonymous"></script>
    <!--TITLE -->
    <title>Halaman</title>
</head>

<body>
    <!--STYLE CSS/BOOSTRAP-->
    <section class="background-radial-gradient overflow-hidden">
        <style>
            .background-radial-gradient {
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

            #radius-shape-1 {
                height: 220px;
                width: 220px;
                top: -60px;
                left: -130px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
            }

            #radius-shape-2 {
                border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                bottom: -60px;
                right: -110px;
                width: 300px;
                height: 300px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
            }

            .bg-glass {
                background-color: hsla(0, 0%, 100%, 0.9) !important;
                backdrop-filter: saturate(200%) blur(25px);
            }

            .img-fluid {
                border-radius: 0px;
                margin-top: 0px;
            }

            .card:hover {
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                transform: scale(1.05);
                transition: box-shadow 0.3s ease, transform 0.3s ease;
            }
        </style>
        <!--NAVBAR-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img src="assets/logo bpkad.png" alt="Logo" width="100" height="40" class="d-inline-block align-text-top">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/tentangkami">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/informasi">Informasi</a>
                        </li>
                    </ul>
                </div>
                <!--BUTTON LOG OUT -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-danger" href="/login">
                            <i class="fas fa-sign-out-alt"></i> Log Out
                        </a>
                    </li>
                </ul>

            </div>
        </nav>
        <!--GAMBAR DI BAWAH NAVBAR-->
        <img src="assets/kotasurabaya.png" alt="Logo" width="643" height="340" class="d-inline-block align-text-top" style="float: left;">
        <img src="assets/kotasurabaya2.png" alt="Logo" width="700" height="340" class="d-inline-block align-text-top" style="float: right;">

        <!--TEXT 1-->
        <div class="container px-2 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-1 align-items-center mb-3">
                <div class="col-lg-6 mb-5 mb-lg-5" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        E-TICKET Aduan <br />
                        <span style="color: hsl(218, 81%, 75%)">Dan Layanan</span>
                    </h1>
                </div>
                <!--TEXT 2-->
                <div class="col">

                    <h5 class="mb-1 opacity-70" style="color: hsl(218, 81%, 85%)">
                        "Komitmen kami terhadap resolusi cepat dan efektif terhadap setiap pengaduan E-TICKET.
                        Setiap laporan menjadi kesempatan bagi kami untuk memperbaiki dan memberikan layanan terbaik."
                    </h5>
                </div>
            </div>

            <div class="row">

                <!--CARD MENU1-->
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/pengaduan.png" class="card-img-top" alt="Your Image Alt Text" style="height:200px">
                        <div class="card-body">
                            <p class="card-text">Pengaduan</p>
                            <a href="/pengaduan" class="btn btn-primary">Click Disini</a>

                        </div>
                    </div>
                </div>
                <!--CARD MENU2 -->
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/cekpengaduan.png" class="card-img-top" alt="..." style="height:200px">
                        <div class=" card-body">
                            <p class="card-text">Cek Pengaduan</p>
                            <a href="/cekpengaduan" class="btn btn-primary">Click Disini</a>

                        </div>
                    </div>
                </div>
                <!--CARD MENU3-->
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <img src="assets/informasi.png" class="card-img-top" alt="..." style="height:200px">
                        <div class="card-body">
                            <p class="card-text">Tata Cara</p>
                            <a href="/tatacara" class="btn btn-primary">Click Disini</a>

                        </div>
                    </div>
                </div>
            </div>


            <!-- your existing content -->
            <div class="bottomnavbar text-center pt-5 pb-5" style="color: white;">
                ETICKET &copy; 2024
            </div>


</html>
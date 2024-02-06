<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--TITLE-->
    <title>Tentang Kami</title>
    <!--SCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cBqVbqk3F5sib9xrbzF6dhxkYY5bPb1SboF2F1n9zfuLZjX1uxbIogHwX2BohjD" crossorigin="anonymous"></script>

</head>

<body style="overflow: hidden;">
    <!--STYLE CSS/BOOSTRAP-->
    <section class="background-radial-gradient overflow-hidden">
        <style>
            .body {
                overflow: hidden;
            }

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
                top: 249px;
                left: -140px;
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

            .card-img-box {
                position: relative;
                overflow: hidden;
                height: 200px;
                /* Sesuaikan tinggi gambar */
            }

            .card-img-box img {
                object-fit: cover;
                width: 100%;
                height: 100%;
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
                            <a class="nav-link active" aria-current="page" href="/halaman">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/informasi">Informasi</a>
                        </li>
                    </ul>
                    <!--LOG OUT BUTTON-->

                </div>
            </div>
        </nav>


        <!--ISI HALAMAN -->
        <section class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">Tentang Kami</h2>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        Selamat datang di E-TICKET! Kami adalah tim yang berkomitmen untuk memberikan layanan terbaik
                        dalam menangani pengaduan E-TICKET. Setiap laporan yang Anda berikan merupakan kesempatan bagi kami
                        untuk memperbaiki dan meningkatkan kualitas layanan kami.
                    </p>
                </div>

                <div class="col-lg-6">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <h5 class="card-title">Visi Kami</h5>
                            <p class="card-text">
                                Menjadi platform pengaduan terkemuka yang memberikan solusi cepat dan efektif untuk
                                setiap pengguna E-TICKET.
                            </p>
                            <h5 class="card-title mt-4">Misi Kami</h5>
                            <ul class="card-text">
                                <li>Memberikan pelayanan pelanggan yang terbaik.</li>
                                <li>Menanggapi setiap pengaduan dengan cepat dan tepat.</li>
                                <li>Terus meningkatkan kualitas layanan.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--FOOTER NAVIGATOR BOTTOM-->
        <div class="container text-center pt-5 pb-5" style="color: white;">
            ETICKET &copy; 2024
        </div>
</body>

</html>
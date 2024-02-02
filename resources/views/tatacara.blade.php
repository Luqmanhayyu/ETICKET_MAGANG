<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--LINK CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" integrity="sha384-k6LZvF6GZl2vqjW/GSEsbT6AU9pgsAKUeO2qfRXu7DEu8tFZegBoEFDs7/Cdg9fS" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js" integrity="sha384-A1B/D/ehMgUtt6pp5V1pA1+9vl5vTjNVuTwj5qu5stwE3jZbxEDazP6KWEqzFDPt" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Tata Cara</title>
    <!--Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cBqVbqk3F5sib9xrbzF6dhxkYY5bPb1SboF2F1n9zfuLZjX1uxbIogHwX2BohjD" crossorigin="anonymous"></script>

</head>

<body>
    <!--STYLE CSS/BOOSTRAP -->
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

            #radius-shape-1,
            #radius-shape-2 {
                position: absolute;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
            }

            #radius-shape-1 {
                height: 220px;
                width: 220px;
                top: -60px;
                left: -130px;
            }

            #radius-shape-2 {
                border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
                bottom: -60px;
                right: -110px;
                width: 300px;
                height: 300px;
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
                            <a class="nav-link active" aria-current="page" href="/tentangkami">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/tatacara">Tata Cara</a>
                        </li>
                    </ul>
                    <!--BUTTON LOG OUT-->
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="btn btn-danger" href="/login">
                                <i class="fas fa-sign-out-alt"></i> Log Out
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--HALAMAN ISI-->

        <!--CARD1-->
        <div class="container px-2 py-2 px-md-2 text-center text-lg-start my-5">
            <div class="row gx-lg-4 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Tuctorial<br />
                        <span style="color: hsl(218, 81%, 75%)">Aduan Dan Layanan</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        "Komitmen kami terhadap resolusi cepat dan efektif terhadap setiap pengaduan E-TICKET.
                        Setiap laporan menjadi kesempatan bagi kami untuk memperbaiki dan memberikan layanan terbaik."
                    </p>
                </div>

                <!-- POSISI CARD1-->
                <div class="col-lg-6 mb-5 mb-lg-6 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <!--ISI CARD1-->
                            <img src="assets/informasi.png" class="card-img-top" alt="..." style="height: 140px;" data-aos="fade-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--CARD 2-->
        <div class="container px-2 py-2 px-md-2 text-center text-lg-start my-5">
            <div class="row gx-lg-4 align-items-center mb-5">
                <!--POSISI CARD2-->
                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <!--ISI CARD 1-->
                            <img src="assets/pengaduan.png" class="card-img-top" alt="..." style="height: 140px;" data-aos="fade-left">
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Tuctorial<br />
                        <span style="color: hsl(218, 81%, 75%)">Repoert Pengaduan</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        "Komitmen kami terhadap resolusi cepat dan efektif terhadap setiap pengaduan E-TICKET.
                        Setiap laporan menjadi kesempatan bagi kami untuk memperbaiki dan memberikan layanan terbaik."
                    </p>
                </div>
            </div>
        </div>
        <!--CARD3-->
        <div class="container px-2 py-2 px-md-2 text-center text-lg-start my-5">
            <div class="row gx-lg-4 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        Contact Us<br />
                        <span style="color: hsl(218, 81%, 75%)">Aduan Dan Layanan</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        "Komitmen kami terhadap resolusi cepat dan efektif terhadap setiap pengaduan E-TICKET.
                        Setiap laporan menjadi kesempatan bagi kami untuk memperbaiki dan memberikan layanan terbaik."
                    </p>
                </div>
                <!--POSISI CARD2-->
                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <!--ISI CARD 2-->
                            <img src="assets/cekpengaduan.png" class="card-img-top" alt="..." style="height: 140px;" data-aos="fade-right">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--FOOTER NAVIGATOR BOTTOM-->
        <div class="container text-center pt-5 pb-5" style="color: white;">
            ETICKET &copy; 2024
        </div>
        <script>
            AOS.init();
        </script>
    </section>
</body>

</html>
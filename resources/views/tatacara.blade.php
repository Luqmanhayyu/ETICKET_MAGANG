<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--TITLE-->
    <title>E-TICKET</title>
    <!--SCRIPT CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css">
    <!--STYLE CSS-->
    <style>
        /* Tambahkan gaya CSS khusus jika diperlukan */
        .background-radial-gradient {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%, hsl(218, 41%, 35%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%), radial-gradient(1250px circle at 100% 100%, hsl(218, 41%, 45%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%);
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

        .profile-dropdown {
            margin-right: 100px;
            margin-left: auto;
            margin-top: 18px;
        }

        .nav-link:hover {
            color: #007bff !important;
        }

        .bg-glass {
            background-color: rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(4px);
        }
    </style>
</head>

<body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <img src="assets/logo bpkad.png" alt="Logo" width="100" height="40" class="d-inline-block align-text-top">
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
                </ul>
                <!--PROFILE DROPDOWN-->
                <div class="dropdown pb-4 profile-dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false" onclick="toggleDropdown()">
                        <div class="rounded-circle overflow-hidden me-2" style="width: 30px; height: 30px;">
                            <img src="https://github.com/mdo.png" alt="Profile" class="img-fluid">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" id="dropdownMenu">
                        <li><a class="dropdown-item" href="/login">Log out</a></li>
                        <li><a class="dropdown-item" href="/settingprofile">Setting Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!--HALAMAN ISI-->
    <section id="tata-cara" class="background-radial-gradient overflow-hidden">
        <div class="container">
            <!-- 
    <!-- CARD 1 -->
            <div class="container px-2 py-2 px-md-2 text-center text-lg-start my-5">
                <div class="row gx-lg-4 align-items-center mb-5" data-aos="fade-up">
                    <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10" data-aos="fade-right">
                        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                            Tuctorial<br />
                            <span style="color: hsl(218, 81%, 75%)">Aduan Dan Layanan</span>
                        </h1>
                        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                            "Komitmen kami terhadap resolusi cepat dan efektif terhadap setiap pengaduan E-TICKET.
                            Setiap laporan menjadi kesempatan bagi kami untuk memperbaiki dan memberikan layanan terbaik."
                        </p>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-6 position-relative" data-aos="fade-left">
                        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                        <div class="card bg-glass">
                            <div class="card-body px-4 py-5 px-md-5">
                                <img src="assets/informasi.png" class="card-img-top" alt="..." style="height: 140px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="container px-2 py-2 px-md-2 text-center text-lg-start my-5">
                <div class="row gx-lg-4 align-items-center mb-5" data-aos="fade-up">
                    <div class="col-lg-6 mb-5 mb-lg-0 position-relative" data-aos="fade-right">
                        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                        <div class="card bg-glass">
                            <div class="card-body px-4 py-5 px-md-5">
                                <img src="assets/pengaduan.png" class="card-img-top" alt="..." style="height: 140px;">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10" data-aos="fade-left">
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

            <!-- CARD 3 -->
            <div class="container px-2 py-2 px-md-2 text-center text-lg-start my-5">
                <div class="row gx-lg-4 align-items-center mb-5" data-aos="fade-up">
                    <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10" data-aos="fade-right">
                        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                            Contact Us<br />
                            <span style="color: hsl(218, 81%, 75%)">Aduan Dan Layanan</span>
                        </h1>
                        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                            "Komitmen kami terhadap resolusi cepat dan efektif terhadap setiap pengaduan E-TICKET.
                            Setiap laporan menjadi kesempatan bagi kami untuk memperbaiki dan memberikan layanan terbaik."
                        </p>
                    </div>
                    <div class="col-lg-6 mb-5 mb-lg-0 position-relative" data-aos="fade-left">
                        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                        <div class="card bg-glass">
                            <div class="card-body px-4 py-5 px-md-5">
                                <img src="assets/cekpengaduan.png" class="card-img-top" alt="..." style="height: 140px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--SCRIPT AOS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <!--SCRIPT DROPWON -->
    <script>
        function toggleDropdown() {
            var dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.classList.toggle("show");
        }
        AOS.init();
    </script>
</body>

</html>
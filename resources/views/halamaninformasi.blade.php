<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--LOGO WEB ICON-->
    <link rel="icon" href="/assets/logo bpkad.png" type="image/png">
    <link rel="shortcut icon" href="/assets/logo bpkad.png" type="image/png">
    <!--TITLE-->
    <title>E-TICKET</title>
    <!--SCRIPT-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cBqVbqk3F5sib9xrbzF6dhxkYY5bPb1SboF2F1n9zfuLZjX1uxbIogHwX2BohjD" crossorigin="anonymous"></script>
    <!-- LINK CDN AOS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
</head>

<body style="overflow: hidden;">
    <!--STYLE CSS-->
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

            .profile-dropdown {
                margin-right: 100px;
                margin-left: 0;
                margin-top: 18px;
            }

            @media (max-width: 992px) {
                .profile-dropdown {
                    margin-right: 0.5rem;
                }
            }

            @media (max-width: 768px) {
                .profile-dropdown {
                    margin-right: 0.2rem;
                }
            }

            @media (max-width: 576px) {
                .profile-dropdown {
                    margin-right: 0;
                }
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

            }

            .card-img-box img {
                object-fit: cover;
                width: 100%;
                height: 100%;
            }

            .nav-link:hover {
                color: #007bff !important;
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
                            <a class="nav-link active" aria-current="page" href="/tentangkami1">Tentang Kami</a>
                        </li>
                    </ul>

                </div>
            </div>
            <!--PROFILE DROPDOWN-->
            <div class="dropdown pb-4 profile-dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false" onclick="toggleDropdown()">
                    <div class="rounded-circle overflow-hidden me-2" style="width: 30px; height: 30px;">
                        <img src="https://github.com/mdo.png" alt="Profile" class="img-fluid">
                    </div>
                    <span class="profile-name">John Doe</span> <!-- Tambahkan nama disini -->
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" id="dropdownMenu">
                    <li><a class="dropdown-item" href="/login">Log out</a></li>

                </ul>
            </div>
        </nav>

        </nav>



        <!--ISI HALAMAN -->
        <section class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <h2 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)" id="fade-in">Tata Cara Pengaduan E-TICKET Pelayanan yang Benar</h2>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)" id="slide-up">
                        Selamat datang di E-TICKET! Kami adalah tim yang berkomitmen untuk memberikan layanan terbaik
                        dalam menangani pengaduan E-TICKET. Setiap laporan yang Anda berikan merupakan kesempatan bagi kami
                        untuk memperbaiki dan meningkatkan kualitas layanan kami.
                    </p>
                </div>

                <div class="col-lg-6">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

                    <div class="card bg-glass" id="fade-in-up">
                        <div class="card-body px-4 py-5">
                            <p>1. Pastikan Anda telah memiliki akun E-TICKET yang terdaftar.</p>
                            <p>2. Login ke akun E-TICKET Anda.</p>
                            <p>3. Pilih menu "Pengaduan" atau "Laporkan Masalah" di aplikasi E-TICKET.</p>
                            <p>4. Isi formulir pengaduan dengan lengkap dan jelas.</p>
                            <p>5. Unggah bukti-bukti pendukung jika diperlukan.</p>
                            <p>6. Klik tombol "Kirim" untuk mengirim pengaduan Anda.</p>
                            <p>7. Tunggu konfirmasi dari pihak E-TICKET mengenai status pengaduan Anda.</p>
                        </div>

                    </div>
        </section>


        <!--FOOTER NAVIGATOR BOTTOM-->
        <div class="bottomnavbar text-center pt-5 pb-5" style="color: white;">
            <i class="fas fa-phone-alt">E-TICKET 2024</i>
        </div>
        <!--SCRIPT AOS ANIMATE JS -->
        <script>
            anime({
                targets: '#fade-in',
                opacity: [0, 1],
                duration: 1500,
                easing: 'easeInOutQuad',
            });

            anime({
                targets: '#slide-up',
                translateY: [50, 0],
                opacity: [0, 1],
                duration: 1500,
                easing: 'easeInOutQuad',
                delay: 300,
            });


            anime({
                targets: '#fade-in-up',
                translateY: [50, 0],
                opacity: [0, 1],
                duration: 1500,
                easing: 'easeInOutQuad',
                delay: 500,
            });
        </script>

        <!--SCRIPT DROPDOWN MENU PROFILE-->
        <script>
            function toggleDropdown() {
                var dropdownMenu = document.getElementById("dropdownMenu");
                dropdownMenu.classList.toggle("show");
            }
        </script>
</body>


</html>
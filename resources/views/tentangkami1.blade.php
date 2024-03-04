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
    <!-- Anime.js Library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body style="overflow-x: hidden;">
    <!--NAVBAR-->
    @include('navbar.navbar')


    <!--ISI HALAMAN -->
    <section class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0">
                <h2 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)" id="fade-in">Tentang Kami</h2>
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


    <!--FOOTER-->
    @include('footer.footer')

    <!-- Script untuk Anime.js -->
    <script>
        // Animasi fade in untuk judul
        anime({
            targets: '#fade-in',
            opacity: [0, 1],
            duration: 1500,
            easing: 'easeInOutQuad',
        });

        // Animasi slide up untuk paragraf
        anime({
            targets: '#slide-up',
            translateY: [50, 0],
            opacity: [0, 1],
            duration: 1500,
            easing: 'easeInOutQuad',
            delay: 300,
        });

        // Animasi fade in up untuk card
        anime({
            targets: '#fade-in-up',
            translateY: [50, 0],
            opacity: [0, 1],
            duration: 1500,
            easing: 'easeInOutQuad',
            delay: 500,
        });
    </script>
</body>

</html>
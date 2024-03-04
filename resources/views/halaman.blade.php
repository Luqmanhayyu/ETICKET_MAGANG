<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--LOGO WEB ICON-->
    <link rel="icon" href="/assets/logo bpkad.png" type="image/png">
    <link rel="shortcut icon" href="/assets/logo bpkad.png" type="image/png">
    <!--SCRIPT CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-sOME53wYWEFqXq8iZAkY0JP7eOzmm5CFwDFq8OtABy8uPf/7a9l+IoQ5GZhZV6wSiISdqVvNbkHyi8eWfUTiJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-pVlZr+i1I/y3z5DpKiLZYsbgFOf0PeCxpoExPZFiujmaGegVyKS0Mopx9VYSX8HT4h6nGc9SUxnZMNDtk3Ho/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--TITLE -->
    <title>E-TICKET</title>
    <!--STYLE CSS-->
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--NAVBAR-->
    @include('navbar.navbar')

    <!--GAMBAR-->
    <div class="container-fluid">
        <div class="row" style="margin-right: -15px; margin-left: -15px;">
            <div class="col-md-6 px-0">
                <img src="assets/kotasurabaya.png" class="d-block w-100" alt="..." style="object-fit: cover; height: 50vh;">
            </div>
            <div class="col-md-6 px-0">
                <img src="assets/kotasurabaya2.png" class="d-block w-100" alt="..." style="object-fit: cover; height: 50vh;">
            </div>
        </div>
    </div>




    <!--TEXT 1-->
    <div class="container px-2 py-5 px-md-5 text-center text-lg-start my-5" data-aos="fade-up">
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
                    "Komitmen kami terhadap resolusi cepat dan efektif terhadap setiap pengaduan E-TICKET. Setiap laporan menjadi kesempatan bagi kami untuk memperbaiki dan memberikan layanan terbaik."
                </h5>
            </div>
        </div>

        <div class="row">
            <!--CARD MENU1-->
            <div class="col-md-4" data-aos="fade-right">
                <div class="card" style="width: 18rem;">
                    <img src="assets/pengaduan.png" class="card-img-top" alt="Your Image Alt Text" style="height:200px">
                    <div class="card-body">
                        <p class="card-text">Pengaduan</p>
                        <a href="/pengaduan" class="btn btn-primary">Click Disini</a>
                    </div>
                </div>
            </div>
            <!--CARD MENU2 -->
            <div class="col-md-4" data-aos="fade-up">
                <div class="card" style="width: 18rem;">
                    <img src="assets/cekpengaduan.png" class="card-img-top" alt="..." style="height:200px">
                    <div class=" card-body">
                        <p class="card-text">Cek Pengaduan</p>
                        <a href="/cekpengaduan" class="btn btn-primary">Click Disini</a>
                    </div>
                </div>
            </div>
            <!--CARD MENU3-->
            <div class="col-md-4" data-aos="fade-left">
                <div class="card" style="width: 18rem;">
                    <img src="assets/informasi.png" class="card-img-top" alt="..." style="height:200px">
                    <div class="card-body">
                        <p class="card-text">Tata Cara</p>
                        <a href="/halamaninformasi" class="btn btn-primary">Click Disini</a>
                    </div>
                </div>
            </div>
        </div>
        <!--FOOTER-->
        @include('footer.footer')

    </div>
    </section>
    <!-- AOS LIBARARY SCRIPT-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
        AOS.init();
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
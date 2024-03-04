<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--SCRIPT CDN-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cBqVbqk3F5sib9xrbzF6dhxkYY5bPb1SboF2F1n9zfuLZjX1uxbIogHwX2BohjD" crossorigin="anonymous"></script>
    <!--LOGO WEB ICON-->
    <link rel="icon" href="/assets/logo bpkad.png" type="image/png">
    <link rel="shortcut icon" href="/assets/logo bpkad.png" type="image/png">
    <!--TITLE -->
    <title>E-TICKET</title>
    <!--STYLE CSS-->
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #141e30, #243b55);
        }

        .container {
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px;
        }

        .form-control {
            background-color: rgba(255, 255, 255, 0.9);
        }

        .btn-primary:active,
        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #6c5ce7;
            border-color: #6c5ce7;
        }

        .text-white {
            color: white !important;
        }

        .header-text {
            padding: 20px;
            font-size: 2.5em;
            font-weight: bold;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .header-text::after {
            content: "";
            display: block;
            margin: 0 auto;
            width: 50px;
            height: 3px;
            background-color: #6c5ce7;
            margin-top: 10px;
        }

        .bottom-navbar {
            background-color: #6c5ce7;
            color: white;
            padding: 10px;
        }

        .profile-dropdown {
            margin-right: 100px;
            margin-left: auto;
            margin-top: 18px;
        }
    </style>
</head>

<body>
    <!--NAVBAR-->
    @include('navbar.navbar')

    <!--ISI HALAMAN-->
    <div class="header-text text-center">Cek Ajuan Ticket</div>
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <p class="text-black">Pernah mengirimkan pengaduan? Silahkan masukkan nomor tiket Anda untuk melakukan tracking data dan atau mengirimkan pengaduan lagi!
        </p>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Cari Pengaduan" aria-label="Search">
            <button type="button" class="btn btn-primary" onclick="onKirim()">Cari</button>
        </form>
        <!--ISI HASIL PENGECEKAN-->
    </div>
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <p class="text-black">HASIL PENCARIAN</p>
    </div>

    <!--FOOTER NAVIGATOR BOTTOM-->
    <div class="bottomnavbar text-center pt-5 pb-5" style="color: white;">
        <i class="fas fa-phone-alt">E-TICKET 2024</i>
    </div>
    <!--SCRIPT DROPDOWN MENU PROFILE-->
    <script>
        function toggleDropdown() {
            var dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.classList.toggle("show");
        }

        function onKirim() {
            alert("Data Berhasil Di Temukan");
        }
    </script>
    </section>


</body>

</html>
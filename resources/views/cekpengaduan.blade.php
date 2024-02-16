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
            overflow: hidden;
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
                        <a class="nav-link active" aria-current="page" href="/informasi">Informasi</a>
                    </li>
                </ul>
            </div>
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
    </nav>
    </nav>
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
    <!--SCRIPT-->
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
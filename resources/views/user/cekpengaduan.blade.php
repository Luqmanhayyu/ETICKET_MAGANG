<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="/assets/logo bpkad.png" type="image/png">
    <link rel="shortcut icon" href="/assets/logo bpkad.png" type="image/png">
    <title>E-TICKET</title>
    <!--STYLE CSS -->
    <link rel="stylesheet" href="/css/style.css">
    <!--BACKGROUDN COLOR -->
    <section class="background-radial-gradient overflow-hidden">

</head>

<body>
    <!--NAVBAR-->
    @include('navbar.navbars')

    <!--ISI HALAMAN-->
    <div class="header-text text-center">Cek Ajuan Ticket</div>
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <p class="text-black">Pernah mengirimkan pengaduan? Silahkan masukkan nomor tiket Anda untuk melakukan tracking data dan atau mengirimkan pengaduan lagi!</p>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Cari Pengaduan" aria-label="Search">
            <button type="button" class="btn btn-primary" onclick="onKirim()">Cari</button>
        </form>
    </div>
    <!--ISI HASIL PENGECEKAN-->
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <p class="text-black">HASIL PENCARIAN</p>
    </div>

    <!--FOOTER NAVIGATOR BOTTOM-->
    @include('footer.footer')
    <!--SCRIPT FUNGSI JAVA SCRIPT-->
    <script>
        function onKirim() {
            alert("Data Ditemukan");
        }
    </script>
</body>

</html>
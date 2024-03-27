<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--LOGO WEB ICON-->
    <link rel="icon" href="/assets/logo bpkad.png" type="image/png">
    <link rel="shortcut icon" href="/assets/logo bpkad.png" type="image/png">
    <!--TITLE-->
    <title>E-TICKET</title>
    <!-- STYLE CSS -->
    <stle>
        <section class="background-radial-gradient overflow-hidden">

    </stle>
</head>

<body>
    <!--NAVBAR-->
    @include('navbar.navbars')

    <!--ISI HALAMAN-->
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <!--FORM PENGISIAN PENGADUAN-->
        <div class="card bg-glass" style="transform: none;">
            <div class="card-body px-4 py-5 px-md-5">
                <div class="form-outline mb-4">
                    <label class="form-label" for="nama">Nama</label>
                    <input type="text" id="nama" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="Email">Email</label>
                    <input type="email" id="Email" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="NoTelephone">No Telephone</label>
                    <input type="tel" id="NoTelephone" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                    <label class="form-label" for="PesanPengaduan">Pesan Pengaduan</label>
                    <textarea id="PesanPengaduan" class="form-control" rows="4"></textarea>
                </div>
                <button type="button" class="btn btn-primary" onclick="onKirim()">Kirim Pengaduan</button>
            </div>
        </div>
    </div>

    <!--FOOTER-->
    @include('footer.footer')

    <!--SCRIPT FUNGSI JAVA SCRIPT-->
    <script>
        function onKirim() {
            alert("Pengaduan Berhasil Di kirim");
            setTimeout(function() {
                window.location.href = '/halaman';
            }, 1000);
        }
    </script>
</body>

</html>
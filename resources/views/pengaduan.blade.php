<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cBqVbqk3F5sib9xrbzF6dhxkYY5bPb1SboF2F1n9zfuLZjX1uxbIogHwX2BohjD" crossorigin="anonymous"></script>
    <!--LOGO WEB ICON-->
    <link rel="icon" href="/assets/logo bpkad.png" type="image/png">
    <link rel="shortcut icon" href="/assets/logo bpkad.png" type="image/png">
    <!--TITLE-->
    <title>E-TICKET</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--NAVBAR-->
    @include('navbar.navbar')
    <!--ISI  HALAMAN-->
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
        <!--FORM PENGISIAN PENGADUAN-->
        <div class="card">
            <div class="card-body">
                <form>
                    <h2>Data Pengadu</h2>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="noTelp" class="form-label">Nomor Telepon</label>
                        <input type="tel" class="form-control" id="noTelp" name="noTelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="Kodepengaduan" class="form-label">Kode Pengaduan</label>
                        <select class="form-select" id="Kodepengaduan" name="Kodepengaduan" required>
                            <option value="umum">Umum</option>
                            <option value="not_umum">not Umum</option>
                        </select>
                    </div>

                    <h2>Kategori</h2>
                    <div class="mb-3">
                        <label for="kategori" class="form-label">Kategori</label>
                        <select class="form-select" id="kategori" name="kategori" required>
                            <option value="umum">Umum</option>
                            <option value="not_umum">not Umum</option>
                        </select>
                    </div>

                    <h2>Isi Aduan</h2>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" required>
                    </div>
                    <div class="mb-3">
                        <label for="pesan" class="form-label">Pesan</label>
                        <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" onclick="onKirim()">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <!--FOOTER-->
    @include('footer.footer')

    <!--SCRIPT  POP UP DAN DROPDOWN MENU-->
    <script>
        function onKirim() {
            alert("Pesan telah dikirim!");
        }

        function toggleDropdown() {
            var dropdownMenu = document.getElementById("dropdownMenu");
            dropdownMenu.classList.toggle("show");
        }

        function onKirim() {
            alert("Pengadaduan Berhasil Di Kirim");
        }
    </script>
    </section>

</body>

</html>
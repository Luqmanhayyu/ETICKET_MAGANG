<!DOCTYPE html>
<html lang="en">

<head>
    <!--SCRIPT-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--LOGO WEB ICON-->
    <link rel="icon" href="/assets/logo bpkad.png" type="image/png">
    <link rel="shortcut icon" href="/assets/logo bpkad.png" type="image/png">
    <!--TITLE-->
    <title>E-TICKET</title>
</head>
<!--SIDE BAR-->
@include('sidebar.sidebar')
<!--ISI HALAMAN-->
<div class="col py-5">
    <div class="card">
        <div class="card-body">
            <h2>Form Jawab Pengaduan</h2>
            <form>
                <div class="mb-3">
                    <label for="pengaduanTitle" class="form-label">Judul Pengaduan</label>
                    <input type="text" class="form-control" id="pengaduanTitle" name="pengaduanTitle" readonly value="Pengaduan 1">
                </div>

                <div class="mb-3">
                    <label for="pengaduanContent" class="form-label">Isi Pengaduan</label>
                    <textarea class="form-control" id="pengaduanContent" name="pengaduanContent" rows="5" readonly>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et eleifend ligula, vel tristique lacus. Proin in consectetur augue. Nullam id vulputate libero. Integer id quam a ligula porttitor ultrices nec at velit.</textarea>
                </div>

                <div class="mb-3">
                    <label for="response" class="form-label">Jawaban Anda</label>
                    <textarea class="form-control" id="response" name="response" rows="5" required></textarea>
                </div>
                <button type="button" class="btn btn-primary" onclick="onKirim()">Kirim Jawaban</button>
            </form>
        </div>
    </div>
</div>
<!--SCRIPT POP UP-->
<script>
    function onKirim() {
        alert("Jawaban Berhasil Di Kirim");

    }
</script>

</body>

</html>
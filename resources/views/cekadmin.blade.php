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
<!--TABLE-->
<div class="col py-5">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Pengaduan ID</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Pengaduan 1</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</td>
                <td>
                    <a href="/jawabadmin" class="btn btn-primary">Jawab Pengaduan</a>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Pengaduan 2</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</td>
                <td>
                    <a href="/jawabadmin" class="btn btn-primary">Jawab Pengaduan</a>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Pengaduan 3</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</td>
                <td>
                    <a href="/jawabadmin" class="btn btn-primary">Jawab Pengaduan</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
</div>
</div>

</body>

</html>
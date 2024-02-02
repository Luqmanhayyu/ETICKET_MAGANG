<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Informasi Pengaduan</title>
    <!--Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cBqVbqk3F5sib9xrbzF6dhxkYY5bPb1SboF2F1n9zfuLZjX1uxbIogHwX2BohjD" crossorigin="anonymous"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #141e30, #243b55);
            color: white;
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

        .header-text {
            padding: 20px;
            font-size: 2.5em;
            font-weight: bold;
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
            padding: 10px;
        }

        .complaint-card {
            background-color: #2c3e50;
            border: 1px solid #34495e;
            border-radius: 10px;
            padding: 20px;
            margin-top: 20px;
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
                        <a class="nav-link active" aria-current="page" href="/tatacara">Tata Cara</a>
                    </li>
                </ul>
                <!-- Log Out Link (Moved to the right) -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="btn btn-danger" href="/login">
                            <i class="fas fa-sign-out-alt"></i> Log Out
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--ISI -->
    <div class="header-text text-center">Informasi Pengaduan</div>
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5"></div>
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5"></div>
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5"></div>



    <!--Navigator Bottom-->
    <div class="bottomnavbar text-center pt-5 pb-5" style="color: white;">
        ETICKET &copy; 2024

    </div>
</body>

</html>
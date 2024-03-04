<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .background-radial-gradient {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%, hsl(218, 41%, 35%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%), radial-gradient(1250px circle at 100% 100%, hsl(218, 41%, 45%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%);
        }

        #radius-shape-2 {
            border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
            bottom: -60px;
            right: -110px;
            width: 300px;
            height: 300px;
            background: radial-gradient(#44006b, #ad1fff);
            overflow: hidden;
        }

        .img-fluid {
            border-radius: 0px;
            margin-top: 0px;
        }

        .card {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transform: scale(1.05);
        }

        .profile-dropdown {
            margin-right: 100px;
            margin-left: 0;
            margin-top: 18px;
        }

        .navbar-brand {
            margin-right: auto;
        }

        .nav-link:hover {
            color: #007bff !important;
        }

        @media (max-width: 992px) {
            .profile-dropdown {
                margin-right: 0.5rem;
            }
        }

        @media (max-width: 768px) {
            .profile-dropdown {
                margin-right: 0.2rem;
            }
        }

        @media (max-width: 576px) {
            .profile-dropdown {
                margin-right: 0;
            }
        }

        @media (max-width: 576px) {
            .navbar-brand img {
                width: 80px;
                height: auto;
            }
        }

        @media (max-width: 480px) {
            .navbar-collapse {
                justify-content: center;
            }
        }

        @media (max-width: 380px) {
            .navbar-brand img {
                width: 70px;
            }
        }

        /* Added media query for smaller screens */
        @media (max-width: 575px) {
            .navbar-collapse {
                background-color: hsl(218, 41%, 15%);
            }

            .navbar-nav {
                margin-top: 20px;
            }

            .dropdown {
                margin-top: 20px;
                margin-right: 20px;
            }

            .profile-dropdown {
                margin-right: 20px;
            }

            .card {
                margin-bottom: 20px;
            }

            .bottomnavbar {
                margin-top: 20px;
            }

            .navbar-brand img {
                width: 60px;
                height: auto;
            }

            .display-5 {
                font-size: 2rem;
            }

            .card-body {
                padding: 10px;
            }

            .btn-primary {
                padding: 5px 10px;
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <section class="background-radial-gradient overflow-hidden">
        <!--NAVBAR-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a href="/halaman">
                    <img src="assets/logo bpkad.png" alt="Logo" width="100" height="40" class="navbar-brand d-inline-block align-text-top">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/tentangkami1">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/halamaninformasi">Informasi</a>
                        </li>
                    </ul>
                </div>
                <!--PROFILE DROPDOWN-->
                <div class="dropdown pb-4 profile-dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false" onclick="toggleDropdown()">
                        <div class="rounded-circle overflow-hidden me-2" style="width: 30px; height: 30px;">
                            <img src="https://github.com/mdo.png" alt="Profile" class="img-fluid">
                        </div>
                        <span class="profile-name">John Doe</span> <!-- Tambahkan nama disini -->
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow" id="dropdownMenu">
                        <li><a class="dropdown-item" href="/login">Log out</a></li>

                    </ul>
                </div>
        </nav>

</body>

</html>
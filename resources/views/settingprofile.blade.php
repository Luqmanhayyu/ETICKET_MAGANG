<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--LOGO WEB ICON-->
    <link rel="icon" href="/assets/logo bpkad.png" type="image/png">
    <link rel="shortcut icon" href="/assets/logo bpkad.png" type="image/png">
    <!-- Link CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-sOME53wYWEFqXq8iZAkY0JP7eOzmm5CFwDFq8OtABy8uPf/7a9l+IoQ5GZhZV6wSiISdqVvNbkHyi8eWfUTiJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-pVlZr+i1I/y3z5DpKiLZYsbgFOf0PeCxpoExPZFiujmaGegVyKS0Mopx9VYSX8HT4h6nGc9SUxnZMNDtk3Ho/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--TITLE -->
    <title>Setting Profile Admin</title>
    <!--STYLE CSS-->
    <style>
        .background-radial-gradient {
            background-color: hsl(218, 41%, 15%);
            background-image: radial-gradient(650px circle at 0% 0%, hsl(218, 41%, 35%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%), radial-gradient(1250px circle at 100% 100%, hsl(218, 41%, 45%) 15%, hsl(218, 41%, 30%) 35%, hsl(218, 41%, 20%) 75%, hsl(218, 41%, 19%) 80%, transparent 100%);
        }

        .navbar-brand {
            margin-right: auto;
        }

        .profile-dropdown {
            margin-right: 100px;
            margin-left: auto;
            margin-top: 18px;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 10px 0 rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 10px 10px 0 0;
            position: relative;
        }

        .profile-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
        }

        .btn-outline-primary {
            border-color: #007bff !important;
            color: #007bff !important;
            transition: all 0.3s ease;
        }

        .btn-outline-primary:hover {
            background-color: #0056b3 !important;
            border-color: #0056b3 !important;
            color: #fff !important;
        }

        .btn-outline-primary:focus {
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.5) !important;
        }

        .btn-update-profile {
            margin-top: 10px;
        }

        @media (min-width: 576px) {
            .card {
                margin-top: 50px;
            }
        }

        .nav-link:hover {
            color: #007bff !important;
        }

        .close {
            position: absolute;
            top: 0;
            right: 600x;
            font-size: 1.5rem;
            color: #fff;
            background-color: transparent;
            border: none;
            outline: none;
            cursor: pointer;
        }

        .close:hover {
            color: #ccc;

        }
    </style>
</head>

<body class="background-radial-gradient">
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="assets/logo bpkad.png" alt="Logo" width="100" height="40" class="navbar-brand d-inline-block align-text-top">
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
                </ul>
            </div>
        </div>
    </nav>
    <!--SETTING PROFILE CARD-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <a href="/halaman" class="close" aria-label="Close" onclick="closeSettingProfile()">
                            <span aria-hidden="true">&times;</span>
                        </a>
                        <h4 class="text-center">Setting Profile</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://github.com/mdo.png" alt="Profile Image" class="profile-image">
                        </div>
                        <div class="form-group mt-4">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Enter password">
                        </div>
                        <button type="button" class="btn btn-primary" onclick="onKirim()">Ubah Profile</button>
                    </div>
                </div>
            </div>
            <!--FOOTER NAVIGATOR BOTTOM-->
            <div class="bottomnavbar text-center pt-5 pb-5" style="color: white;">
                <i class="fas fa-phone-alt">E-TICKET 2024</i>
            </div>
            <!--SCRIPT DROPDOWN DAN POP UP-->
            <script>
                function toggleDropdown() {
                    var dropdownMenu = document.getElementById("dropdownMenu");
                    dropdownMenu.classList.toggle("show");
                }

                function onKirim() {
                    alert("Profile berhasil Di Ubah");
                }

                function closeSettingProfile() {}
            </script>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Link Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-sOME53wYWEFqXq8iZAkY0JP7eOzmm5CFwDFq8OtABy8uPf/7a9l+IoQ5GZhZV6wSiISdqVvNbkHyi8eWfUTiJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            font-size: 0.875rem;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        .sidebar {
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            z-index: 1000;
            padding-top: 56px;
            box-shadow: inset -1px 0 0 rgba(0, 0, 0, 0.1);
            background-color: #1f3577;
            /* Sidebar background color */
            color: white;
            /* Text color */
            width: 250px;
            transition: width 0.3s;
            overflow-x: hidden;
        }

        .nav-link {
            font-size: 1rem;
            color: white;
            padding: 12px 16px;
            /* Text color */
            transition: padding 0.3s;
        }

        .nav-link:hover {
            padding-left: 20px;
            background-color: #283d71;
            /* Highlight color on hover */
        }

        main {
            padding: 24px;
            margin-left: 250px;
            transition: margin-left 0.3s;
        }

        .border-bottom {
            border-bottom: 1px solid #dee2e6;
            /* Border color between header and main content */
        }

        h1 {
            color: #1f3577;
            /* Header text color */
        }

        .navbar {
            background-color: #1f3577;
            /* Navbar background color */
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar-brand,
        .navbar-text {
            color: white;
            /* Navbar text color */
        }

        .navbar-toggler-icon {
            background-color: white;
            /* Navbar toggle icon color */
        }

        #sidebarCollapse {
            width: 40px;
            height: 40px;
            background-color: #1f3577;
            color: white;
            border: none;
            cursor: pointer;
            position: fixed;
            top: 10px;
            left: 10px;
            z-index: 1001;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        #sidebarCollapse i {
            font-size: 20px;
        }

        #sidebarCollapse.active {
            width: 250px;
        }

        #sidebarCollapse.active i::before {
            content: '\f104';
            /* Unicode character for arrow right */
        }
    </style>

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block sidebar">
                <div class="position-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <h2 class="sidebar-heading">SB Admin</h2>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-chart-bar"></i> Charts
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-table"></i> Tables
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Main content -->
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <button id="sidebarCollapse"><i class="fas fa-bars"></i></button>
                <nav class="navbar navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        <i class="fas fa-search"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                    <h1 class="h2">Dashboard</h1>
                </div>

                <!-- Your main content goes here -->

            </main>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cBqVbqk3F5sib9xrbzF6dhxkYY5bPb1SboF2F1n9zfuLZjX1uxbIogHwX2BohjD" crossorigin="anonymous"></script>
    <script>
        document.getElementById('sidebarCollapse').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('active');
            this.classList.toggle('active');
        });
    </script>
</body>

</html>
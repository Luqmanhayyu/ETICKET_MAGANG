<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--LINK CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-sOME53wYWEFqXq8iZAkY0JP7eOzmm5CFwDFq8OtABy8uPf/7a9l+IoQ5GZhZV6wSiISdqVvNbkHyi8eWfUTiJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-pVlZr+i1I/y3z5DpKiLZYsbgFOf0PeCxpoExPZFiujmaGegVyKS0Mopx9VYSX8HT4h6nGc9SUxnZMNDtk3Ho/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--LOGO WEB ICON-->
    <link rel="icon" href="/assets/logo bpkad.png" type="image/png">
    <link rel="shortcut icon" href="/assets/logo bpkad.png" type="image/png">
    <!--TITLE -->
    <title>
        E-TICKET
    </title>
    <!--Script CDN CAPTCHA-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>
    <!-- STYLE CSS-->
    <section class="background-radial-gradient overflow-hidden">
        <style>
            .body {
                overflow: hidden;
            }

            .background-radial-gradient {
                background-color: hsl(218, 41%, 15%);
                background-image: radial-gradient(650px circle at 0% 0%,
                        hsl(218, 41%, 35%) 15%,
                        hsl(218, 41%, 30%) 35%,
                        hsl(218, 41%, 20%) 75%,
                        hsl(218, 41%, 19%) 80%,
                        transparent 100%),
                    radial-gradient(1250px circle at 100% 100%,
                        hsl(218, 41%, 45%) 15%,
                        hsl(218, 41%, 30%) 35%,
                        hsl(218, 41%, 20%) 75%,
                        hsl(218, 41%, 19%) 80%,
                        transparent 100%);
            }

            #radius-shape-1 {
                height: 220px;
                width: 220px;
                top: -60px;
                left: -130px;
                background: radial-gradient(#44006b, #ad1fff);
                overflow: hidden;
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

            .bg-glass {
                background-color: hsla(0, 0%, 100%, 0.9) !important;
                backdrop-filter: saturate(200%) blur(25px);
            }

            .nav-link:hover {
                color: #007bff !important;
            }
        </style>
        <!--NAVBAR-->
        @include('navbar.navbar')
        <!--ISI HALAMAN-->
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
            <div class="row gx-lg-5 align-items-center mb-5">
                <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
                    <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
                        E-TICKET <br />
                        <span style="color: hsl(218, 81%, 75%)">Aduan Dan Layanan</span>
                    </h1>
                    <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
                        "Komitmen kami terhadap resolusi cepat dan efektif terhadap setiap pengaduan E-TICKET.
                        Setiap laporan menjadi kesempatan bagi kami untuk memperbaiki dan memberikan layanan terbaik."
                    </p>
                </div>
                <!--FORM LOGIN -->
                <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
                    <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
                    <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
                    <div class="card bg-glass">
                        <div class="card-body px-4 py-5 px-md-5">
                            <div class="row">
                                <div class="form-outline mb-4">
                                    <div class="form-outline">
                                        <input type="text" id="email" class="form-control" />
                                        <label class="form-label" for="email">Email</label>
                                    </div>
                                </div>
                                <!--PASSWORD INPUT-->
                                <div class="form-outline mb-4">
                                    <input type="password" id="password" class="form-control" />
                                    <label class="form-label" for="password">Password</label>
                                </div>
                                <!--CAPTCHA DAN INPUT-->
                                <div style="display: flex; align-items: center;">
                                    <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div>
                                    <div class="form-outline mb-4">
                                        <input type="password" id="password" class="form-control" />
                                    </div>
                                </div>
                                <!--CHECKBOX-->
                                <div class="form-check d-flex justify-content-start mb-4">
                                    <input class="form-check-input me-1" type="checkbox" value="" id="form2Example33" checked />
                                    <label class="form-check-label ml-0" for="form2Example33">
                                        Ingat Saya
                                    </label>
                                </div>
                                <!--BUTTON REGISTRASI-->
                                <button type="button" class="btn btn-primary" onclick="onKirim()">Registrasi</button>

                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--FOOTER-->
        @include('footer.footer')
    </section>
    <!--SCRIPT CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-cBqVbqk3F5sib9xrbzF6dhxkYY5bPb1SboF2F1n9zfuLZjX1uxbIogHwX2BohjD" crossorigin="anonymous"></script>
    <!--SCRIPT FUNGSI JAVA SCRIPT-->
    <script>
        function onKirim() {
            alert("Acount Berhasil Dibuat");

        }
    </script>
</body>

</html>
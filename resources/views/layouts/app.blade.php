<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" data-bs-theme="light" data-color-theme="Blue_Theme" data-layout="vertical">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png">

    <!-- Core Css -->
    <link rel="stylesheet" href="../assets/css/styles.css">

    <title>@yield('title') - Sarkay Yönetim</title>
</head>

<body>

    <div id="main-wrapper">
    <div class="position-relative overflow-hidden auth-bg min-vh-100 w-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100 my-5 my-xl-0">
                <div class="col-md-9 d-flex flex-column justify-content-center">
                    <div class="card mb-0 bg-body auth-login m-auto w-100">
                        <div class="row gx-0">
                            <!-- ------------------------------------------------- -->
                            <!-- Part 1 -->
                            <!-- ------------------------------------------------- -->
                            <div class="col-xl-6 border-end">
                                <div class="row justify-content-center py-4">
                                    <div class="col-lg-11">
                                        <div class="card-body">
                                            <a href="" class="text-nowrap logo-img d-block mb-4 w-100">
                                                <img src="../assets/images/logos/logo.png" style="max-width:200px;" class="dark-logo" alt="Logo-Dark">
                                            </a>
                                            <main>
                                                @yield('content')
                                            </main>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!-- ------------------------------------------------- -->
                            <!-- Part 2 -->
                            <!-- ------------------------------------------------- -->
                            <div class="col-xl-6 d-none d-xl-block">
                                <div class="row justify-content-center align-items-start h-100">
                                    <div class="col-lg-9">
                                        <div id="auth-login" class="carousel slide auth-carousel mt-5 pt-4" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="d-flex align-items-center justify-content-center w-100 h-100 flex-column gap-9 text-center">
                                                        <img src="../assets/images/backgrounds/login-side.png" alt="login-side-img" width="300" class="img-fluid">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="dark-transparent sidebartoggler"></div>
<!-- Import Js Files -->
<script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/simplebar/dist/simplebar.min.js"></script>
<script src="../assets/js/theme/app.init.js"></script>
<script src="../assets/js/theme/theme.js"></script>
<script src="../assets/js/theme/app.min.js"></script>

<!-- solar icons -->
<script src="../assets/libs/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Person</title>

    <link rel="stylesheet" href="mazer/assets/css/main/app.css">
    <link rel="stylesheet" href="mazer/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="mazer/assets/images/logo/favicon.svg" type="image/x-icon">
    <link rel="shortcut icon" href="mazer/assets/images/logo/favicon.png" type="image/png">

    <link rel="stylesheet" href="mazer/assets/css/shared/iconly.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <table>
                            <tr>
                                <td class="mb-5">
                                    <img src="mazer/assets/images/bg/bgR.png" style="width: 30px; height:30px">
                                </td>
                                <td class="text-primary fw-bold" style="font-size:20px; height:15px">
                                    RECRUITMENT
                                </td>
                            </tr>
                        </table>
                        <div class="theme-toggle d-flex gap-2 align-items-center mt-2">
                            <div class="form-check form-switch fs-6">
                                <input class="form-check-input me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                        </div>
                        <div class="sidebar-toggler x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                    class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>

                </div>

                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>
                        <li class="sidebar-item active ">
                            <a href="index.html" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Lamaran Saya</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="layout-page">
            <div
                class="top-bar d-flex align-items-center justify-content-between px-4 py-2 bg-light border-2 border-dark">
                <div class="navbar-nav align-items-center">
                    <div class="nav-item d-flex align-items-center mt-2">
                        <a href="#" class="burger-btn d-block d-xl-none">
                            <i class="bi bi-justify fs-3"></i>
                        </a>
                    </div>
                </div>

                <ul class="navbar-nav flex-row align-items-center ms-auto">
                    <div class="d-flex align-items-center">
                        <div class="avatar avatar-online">
                            <img src="mazer/assets/images/faces/3.jpg" alt="TestPoto"
                                class="w-px-40 h-px-40 rounded-circle" />
                        </div>
                        <div class="user-info ms-2">
                            <span class="d-none d-md-block text-primary fw-bold " id="namaLengkap">Nama Lengkap</span>
                        </div>
                    </div>

                    <a class=dropdown-toggle hide-arrow" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">

                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        {{-- <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-online">
                                        <img src="mazer/assets/images/faces/3.jpg" alt="test P"
                                            class="w-px-40 h-px-40 rounded-circle" />
                                    </div>
                                    <div class="user-details ms-2">
                                        <span class="fw-semibold d-block">Nama user</span>
                                        <small class="text-muted">Person</small>
                                    </div>
                                </div>
                            </a>
                        </li> --}}
                        <li>
                            <a class="dropdown-item" href="logout">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">Log Out</span>
                            </a>
                        </li>
                    </ul>
                    </li>
                </ul>
            </div>

            <div id="main">

                <div class="page-heading">
                    <h4>Dashboard Admin</h4>
                </div>
                <div class="page-content">
                    <section class="section">
                        <div class="row">
                            <div class="col-12 col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Status Lamaran!</h5>
                                        <ul class="nav nav-pills">
                                            <li class="nav-item step-item">
                                                <a class="nav-link active " href="#">Diproses</a>
                                            </li>
                                            <li class="nav-item step-item">
                                                <a class="nav-link" href="#">Wawancara</a>
                                            </li>
                                            <li class="nav-item step-item">
                                                <a class="nav-link" href="#">Psikotes</a>
                                            </li>
                                            <li class="nav-item step-item">
                                                <a class="nav-link" href="#">Wawancara Lanjutan</a>
                                            </li>
                                            <li class="nav-item step-item">
                                                <a class="nav-link" href="#">Diterima</a>
                                            </li>
                                            <li class="nav-item step-item">
                                                <a class="nav-link" href="#">Ditolak</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>



                    <section class="row">


                        <div class="col-12 col-lg-12 mt-3">
                            <div class="row">
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div
                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                    <div class="stats-icon purple mb-2">
                                                        <i class="iconly-boldShow"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                    <h6 class="text-muted font-semibold">Profile Views</h6>
                                                    <h6 class="font-extrabold mb-0">112.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div
                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                    <div class="stats-icon blue mb-2">
                                                        <i class="iconly-boldProfile"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                    <h6 class="text-muted font-semibold">Followers</h6>
                                                    <h6 class="font-extrabold mb-0">183.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div
                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                    <div class="stats-icon green mb-2">
                                                        <i class="iconly-boldAdd-User"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                    <h6 class="text-muted font-semibold">Following</h6>
                                                    <h6 class="font-extrabold mb-0">80.000</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6 col-lg-3 col-md-6">
                                    <div class="card">
                                        <div class="card-body px-4 py-4-5">
                                            <div class="row">
                                                <div
                                                    class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                                    <div class="stats-icon red mb-2">
                                                        <i class="iconly-boldBookmark"></i>
                                                    </div>
                                                </div>
                                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                                    <h6 class="text-muted font-semibold">Saved Post</h6>
                                                    <h6 class="font-extrabold mb-0">112</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </section>
                </div>
            </div>

            {{-- FOOTER --}}
        </div>
    </div>
    <script src="mazer/assets/js/bootstrap.js"></script>
    <script src="mazer/assets/js/app.js"></script>

    <!-- Need: Apexcharts -->
    <script src="mazer/assets/extensions/apexcharts/apexcharts.min.js"></script>
    <script src="mazer/assets/js/pages/dashboard.js"></script>

</body>

</html>

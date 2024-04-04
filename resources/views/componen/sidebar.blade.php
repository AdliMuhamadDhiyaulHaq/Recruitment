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
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>

        </div>

        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>
                <li class="sidebar-item  ">
                    <a href="dashboard_person" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Lamaran Saya</span>
                    </a>
                </li>
                <li class="sidebar-item  ">
                    <a href="riwayat_hidup" class='sidebar-link'>
                        <i class="bi bi-person-lines-fill"></i>
                        <span>Daftar Riwayat Hidup</span>
                    </a>
                </li>
            </ul>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var currentUrl = window.location.pathname; // Mendapatkan path URL saat ini
                var sidebarItems = document.querySelectorAll(".sidebar-item"); // Memilih semua item sidebar

                sidebarItems.forEach(function(item) {
                    var link = item.querySelector(".sidebar-link"); // Memilih link di dalam setiap item sidebar
                    var href = link.getAttribute("href"); // Mendapatkan atribut href dari link

                    // Memeriksa apakah path URL saat ini sesuai dengan href dari link
                    if (currentUrl.includes(href)) {
                        item.classList.add("active"); // Menambahkan kelas active jika sesuai
                    }
                });
            });
        </script>


    </div>
    <div class="top-bar d-flex align-items-center justify-content-between px-4 py-2 bg-light border-2 border-dark">
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
                    <img src="mazer/assets/images/faces/3.jpg" alt="TestPoto" class="w-px-40 h-px-40 rounded-circle" />
                </div>
                <div class="user-info ms-2">
                    <span class="d-none d-md-block text-primary fw-bold"
                        id="namaLengkap">{{ session('userData')['name'] }}</span>
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
</div>

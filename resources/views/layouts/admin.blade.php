<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Wisdom Education - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Septulola - Sistem Informasi Terpadu Pengembangan Literasi Anak" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    @stack('add-plugins-css')
    <!-- App css -->
    <link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    @stack('add-css')

</head>

<body id="body" class="dark-sidebar">
    <!-- leftbar-tab-menu -->
    <div class="left-sidebar">
        <!-- LOGO -->
        <div class="brand">
            <a href="{{ url('dashboard-admin') }}" class="logo">
                <span>
                    <img src="{{ asset('img/logo.png') }}" alt="logo-small" style="width: 50px; height: 50px;"
                        class="logo-sm">
                </span>
            </a>
        </div>
        <div class="sidebar-user-pro media border-end">
            <div class="position-relative mx-auto">
                <img src="{{ asset('admin/images/users/user-3.jpg') }}" alt="user" class="rounded-circle thumb-md">
                <span class="online-icon position-absolute end-0"><i class="mdi mdi-record text-success"></i></span>
            </div>
            <div class="media-body ms-2 user-detail align-self-center">
                <h5 class="font-14 m-0 fw-bold">{{ Auth::user()->username }}</h5>
                <p class="opacity-50 mb-0">{{ Auth::user()->role }}</p>
            </div>
        </div>
        <!--end logo-->


        <div class="menu-content h-100" data-simplebar>
            <div class="menu-body navbar-vertical">
                <div class="collapse navbar-collapse tab-content" id="sidebarCollapse">
                    <!-- Navigation -->
                    <ul class="navbar-nav tab-pane active" id="Main" role="tabpanel">

                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(1) == 'admin' ? 'menuitem-active' : '' }}"
                                href="{{ url('admin') }}"><i
                                    class="ti ti-dashboard menu-icon"></i><span>Dashboard</span></a>
                        </li>
                        <!--end nav-item-->

                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(2) == 'guru' ? 'menuitem-active' : '' }}"
                                href="{{ route('guru.index') }}"><i
                                    class="ti ti-users menu-icon"></i><span>Guru</span></a>
                        </li>
                        <!--end nav-item-->

                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(2) == 'sekolah' ? 'menuitem-active' : '' }}"
                                href="{{ route('sekolah.index') }}"><i
                                    class="ti ti-school menu-icon"></i><span>Sekolah</span></a>
                        </li>
                        <!--end nav-item-->

                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(2) == 'faq' ? 'menuitem-active' : '' }}"
                                href="{{ route('faq.index') }}"><i
                                    class="ti ti-question-mark menu-icon"></i><span>FAQ</span></a>
                        </li>
                        <!--end nav-item-->

                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(2) == 'jabatan' ? 'menuitem-active' : '' }}"
                                href="{{ route('jabatan.index') }}"><i
                                    class="ti ti-star menu-icon"></i><span>Jabatan</span></a>
                        </li>
                        <!--end nav-item-->

                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(2) == 'mata-pelajaran' ? 'menuitem-active' : '' }}"
                                href="{{ route('mata-pelajaran.index') }}"><i
                                    class="ti ti-archive menu-icon"></i><span>Mata
                                    Pelajaran</span></a>
                        </li>
                        <!--end nav-item-->

                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(2) == 'unduhan' ? 'menuitem-active' : '' }}"
                                href="{{ route('unduhan.index') }}"><i
                                    class="ti ti-download menu-icon"></i><span>Unduhan</span></a>
                        </li>
                        <!--end nav-item-->

                        <li class="nav-item">
                            <a class="nav-link {{ Request::segment(2) == 'wadah-kreasi' ? 'menuitem-active' : '' }}"
                                href="{{ route('wadah-kreasi.index') }}"><i
                                    class="ti ti-archive menu-icon"></i><span>Wadah
                                    Kreasi</span></a>
                        </li>
                        <!--end nav-item-->

                    </ul>
                </div>
                <!--end sidebarCollapse-->
            </div>
        </div>
    </div>
    <!-- end left-sidenav-->
    <!-- end leftbar-menu-->

    <!-- Top Bar Start -->
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- Navbar -->
        <nav class="navbar-custom" id="navbar-custom">
            <ul class="list-unstyled topbar-nav float-end mb-0">

                <li class="dropdown">
                    <a class="nav-link dropdown-toggle nav-user" data-bs-toggle="dropdown" href="#" role="button"
                        aria-haspopup="false" aria-expanded="false">
                        <div class="d-flex align-items-center">
                            <img src="{{ Auth::user()->foto ? asset('admin/images/users/' . Auth::user()->foto) : asset('admin/images/users/user-3.jpg') }}"
                                alt="profile-user" class="rounded-circle me-2 thumb-sm" />
                            <div>
                                <small class="d-none d-md-block font-11">{{ Auth::user()->role }}</small>
                                <span class="d-none d-md-block fw-semibold font-12">{{ Auth::user()->name }} <i
                                        class="mdi mdi-chevron-down"></i></span>
                            </div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="#"><i class="ti ti-user font-16 me-1 align-text-bottom"></i>
                            Profile</a>

                        <a class="dropdown-item" href="{{ url('/logout') }}"><i
                                class="ti ti-power font-16 me-1 align-text-bottom"></i>
                            Logout</a>
                    </div>
                </li>
                <!--end topbar-profile-->

            </ul>
            <!--end topbar-nav-->

            <ul class="list-unstyled topbar-nav mb-0">
                <li>
                    <button class="nav-link button-menu-mobile nav-icon" id="togglemenu">
                        <i class="ti ti-menu-2"></i>
                    </button>
                </li>

            </ul>
        </nav>
        <!-- end navbar-->
    </div>
    <!-- Top Bar End -->
    <!-- Top Bar End -->

    <div class="page-wrapper">

        <!-- Page Content-->
        <div class="page-content-tab">

            @yield('content')


            <!--Start Footer-->
            <!-- Footer Start -->
            <footer class="footer text-center text-sm-start">
                &copy; <script>
                    document.write(new Date().getFullYear())
                </script> <a href="https://itgenic.co.id">itgenic.co.id</a> <span
                    class="text-muted d-none d-sm-inline-block float-end">Built with <i
                        class="mdi mdi-heart text-danger"></i> by Itgenic</span>
            </footer>
            <!-- end Footer -->
            <!--end footer-->
        </div>
        <!-- end page content -->
    </div>
    <!-- end page-wrapper -->

    <!-- Javascript  -->
    @stack('add-plugins-js')
    <!-- App js -->
    <script src="{{ asset('admin/js/app.js') }}"></script>
    @stack('add-js')

</body>
<!--end body-->

</html>
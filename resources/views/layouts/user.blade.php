<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description"
        content="Website Wisdom Education (WE) hadir sebagai inovasi website sumber belajar dengan memadukan teknologi virtual reality dan augmented reality serta mengedepankan metode problem based learning">
    <meta name="author"
        content="Team Wisdom Education, Universitas Negeri Jakarta, UNJ, Fakultas Ilmu Pendidikan, Teknologi Pendidikan, TP UNJ">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="Wisdom Education" /> <!-- website name -->
    <meta property="og:site" content="{{ url('/') }}" /> <!-- website link -->
    <meta property="og:title" content="Wisdom Education" /> <!-- title shown in the actual shared post -->
    <meta property="og:description"
        content="Website WE hadir sebagai inovasi website sumber belajar dengan memadukan teknologi virtual reality dan augmented reality serta mengedepankan metode problem based learning" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="{{ asset('img/logo.png') }}" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="{{ url('/') }}" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!--title-->
    <title>Wisdom Education - @yield('title')</title>

    <!--favicon icon-->
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans&display=swap"
        rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!--animated css-->
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <!--ytplayer css-->
    <link rel="stylesheet" href="{{ asset('css/jquery.mb.YTPlayer.min.css') }}">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
    <!--custom css-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <style>
        a.active {
            color: yellow !important;
            font-weight: bold !important;
        }

        .background-img:before {
            background-image: linear-gradient(to right, #2F86A6, #34BE82) !important;
        }
    </style>
</head>

<body>

    <!--header section start-->
    <header class="header">
        <!--start navbar-->
        <nav class="navbar navbar-expand-lg fixed-top custom-nav white-bg">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('img/logo.png') }}" width="80"
                        alt="logo" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>

                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link page-scroll {{ Request::segment(1) == '' ? 'active' : '' }}"
                                href="{{ url('/') }}">
                                <i class="ti-home text-bold text-black"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll {{ Request::segment(1) == 'about' ? 'active' : '' }}"
                                href="{{ url('/about') }}">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll {{ Request::segment(1) == 'contact' ? 'active' : '' }}"
                                href="{{ url('/contact') }}">Kontak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll {{ Request::segment(1) == 'faq' ? 'active' : '' }}"
                                href="{{ url('/faq') }}">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll {{ Request::segment(1) == 'sign-in' ? 'active' : '' }}"
                                href="{{ url('/sign-in') }}">Masuk</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll {{ Request::segment(1) == 'sign-up' ? 'active' : '' }}"
                                href="{{ url('/sign-up') }}">Daftar</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
        <!--end navbar-->
    </header>
    <!--header section end-->

    <!--body content wrap start-->
    <div class="main">
        @yield('content')
    </div>
    <!--body content wrap end-->

    <!--shape image start-->
    <div class="shape-img subscribe-wrap">
        <img src="{{ asset('img/footer-top-shape.png') }}" alt="footer shape" class="img-fluid">

    </div>
    <!--shape image end-->

    <!--footer section start-->
    <footer class="footer-section">

        <!--footer top start-->
        <div class="footer-top pt-150 pb-5 background-img-2"
            style="background: url('{{ asset('img/footer-bg.png') }}')no-repeat center top / cover">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="footer-nav-wrap text-white">
                            <img src="{{ asset('img/logo.png') }}" alt="footer logo" width="120" class="img-fluid mb-3">
                            <p>Wisdom Education</p>

                            <div class="social-list-wrap">
                                <ul class="social-list list-inline list-unstyled">


                                    <li class="list-inline-item"><a href="https://www.instagram.com/wisdomeducation.id/"
                                            target="_blank" title="Instagram"><span class="ti-instagram"></span>
                                            @wisdomeducation</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 ml-auto mb-4 mb-lg-0">
                        <div class="footer-nav-wrap text-white">
                            <h5 class="mb-3 text-white">Support</h5>
                            <ul class="list-unstyled support-list">
                                <li class="mb-2 d-flex align-items-center"><span class="ti-location-pin mr-2"></span>
                                    Jl. Rawamangun Muka, RT.11/RW.14, Rawamangun, Pulo Gadung, Kota Jakarta Timur,
                                    Daerah Khusus Ibukota Jakarta 13220
                                </li>
                                <li class="mb-2 d-flex align-items-center"><span class="ti-mobile mr-2"></span> <a
                                        href="tel:+6285171150224"> 0851-7115-0224</a></li>
                                <li class="mb-2 d-flex align-items-center"><span class="ti-email mr-2"></span><a
                                        href="mailto:wisdomeducation.id@gmail.com"> wisdomeducation.id@gmail.com</a>
                                </li>
                                <li class="mb-2 d-flex align-items-center"><span class="ti-world mr-2"></span><a
                                        href="#">
                                        www.wisdomeducation.id</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--footer top end-->

        <!--footer copyright start-->
        <div class="footer-bottom gray-light-bg pt-4 pb-4">
            <div class="container">
                <div class="row text-center justify-content-center">
                    <div class="col-md-6 col-lg-5">
                        <p class="copyright-text pb-0 mb-0">wisdomeducation.id
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--footer copyright end-->
    </footer>
    <!--footer section end-->

    <!--jQuery-->
    <script src="{{ asset('js/jquery-3.5.0.min.js') }}"></script>
    <!--Popper js-->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!--Bootstrap js-->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!--Magnific popup js-->
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <!--jquery easing js-->
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <!--jquery ytplayer js-->
    <script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!--wow js-->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!--owl carousel js-->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!--countdown js-->
    <script src="{{ asset('js/jquery.countdown.min.js') }}"></script>
    <!--validator js-->
    <script src="{{ asset('js/validator.min.js') }}"></script>
    <!--custom js-->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
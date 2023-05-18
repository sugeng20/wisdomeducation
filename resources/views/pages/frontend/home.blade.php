<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta description -->
    <meta name="description" content="Wisdom Education">
    <meta name="author" content="ThemeTags">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="" /> <!-- website name -->
    <meta property="og:site" content="" /> <!-- website link -->
    <meta property="og:title" content="" /> <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" /> <!-- where do you want your post to link to -->
    <meta property="og:type" content="article" />

    <!--title-->
    <title>Wisdom Education</title>

    <!--favicon icon-->
    <link rel="icon" href="#" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans&display=swap"
        rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <!--Themify icon css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <!--animated css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.min.css') }}">
    <!--ytplayer css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/jquery.mb.YTPlayer.min.css') }}">
    <!--Owl carousel css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.theme.default.min.css') }}">
    <!--custom css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!--responsive css-->
    <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css') }}">

</head>

<body>

    <!--header section start-->
    <header class="header">
        <!--start navbar-->
        <nav class="navbar navbar-expand-lg fixed-top custom-nav white-bg">
            <div class="container">
                <a class="navbar-brand" href="index-3.html"><img src="{{ asset('frontend/img/logo.png') }}" width="80"
                        alt="logo" class="img-fluid"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="ti-menu"></span>
                </button>

                <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#About">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#fax">FAX</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="#">Daftar</a>
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

        <!--hero section start-->
        <section class="hero-section hero-section-3 ptb-100">
            <!--animated circle shape start-->
            <div class="circles">
                <div class="point animated-point-1"></div>
                <div class="point animated-point-2"></div>
                <div class="point animated-point-3"></div>
                <div class="point animated-point-4"></div>
                <div class="point animated-point-5"></div>
                <div class="point animated-point-6"></div>
            </div>
            <!--animated circle shape end-->
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6 col-lg-6">
                        <div class="hero-content-left ptb-100">
                            <h1 style="font-size: 40px"><span>Ayo Belajar Sambil Menjelajah</span></h1>
                            <p class="lead">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis maxime veniam
                                culpa porro rerum cumque aliquid consequatur amet!
                            </p>

                            <a href="#" class="btn solid-btn">Daftar Sekarang</a>
                            <a href="#" class="btn outline-btn">Masuk</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="hero-animation-img">
                            <img class="img-fluid d-block m-auto animation-one"
                                src="{{ asset('frontend/img/bg-child.png') }}" width="420" alt="animation image">

                            <img class="img-fluid d-none d-lg-block animation-three"
                                src="{{ asset('frontend/img/hero-animation-01.svg') }}" alt="animation image"
                                width="70">
                            <img class="img-fluid d-none d-lg-block animation-four"
                                src="{{ asset('frontend/img/hero-animation-03.svg') }}" alt="animation image"
                                width="50">
                        </div>
                    </div>
                </div>
            </div>

            <!--shape image start-->
            <img src="{{ asset('frontend/img/hero-bg-shape-2.svg') }}" class="shape-image" alt="shape image">
            <!--shape image end-->
        </section>
        <!--hero section end-->

        <!--promo section start-->
        <section class="promo-section ptb-100">
            <div class="container">
                <div class="row justify-content-center mt-5">
                    <div class="col-12">
                        <img src="{{ asset('frontend/img/kelas-jelajah/banner.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--our blog section start-->
        <section id="blog" class="our-blog-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-heading mb-5 ">
                            <h2 class="">Kelas Jelajah</h2>
                            <p>
                                Enthusiastically drive revolutionary opportunities before emerging leadership.
                                Distinctively
                                transform tactical methods of empowerment via resource sucking core.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-blog-card card border-0 shadow-sm white-bg">
                            <span class="category position-absolute badge badge-pill badge-primary">Kelas IV</span>
                            <img src="{{ asset('frontend/img/kelas-jelajah/image-1.jpg') }}"
                                class="card-img-top position-relative" alt="blog">
                            <div class="card-body">
                                <h3 class="h5 card-title"><a href="#">Appropriately productize fully</a></h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="single-blog-card card border-0 shadow-sm white-bg">
                            <span class="category position-absolute badge badge-pill badge-primary">Kelas IV</span>
                            <img src="{{ asset('frontend/img/kelas-jelajah/image-2.jpg') }}"
                                class="card-img-top position-relative" alt="blog">
                            <div class="card-body">
                                <h3 class="h5 card-title"><a href="#">Appropriately productize fully</a></h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="single-blog-card card border-0 shadow-sm white-bg">
                            <span class="category position-absolute badge badge-pill badge-primary">Kelas IV</span>
                            <img src="{{ asset('frontend/img/kelas-jelajah/image-3.jpg') }}"
                                class="card-img-top position-relative" alt="blog">
                            <div class="card-body">
                                <h3 class="h5 card-title"><a href="#">Appropriately productize fully</a></h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="single-blog-card card border-0 shadow-sm white-bg">
                            <span class="category position-absolute badge badge-pill badge-primary">Kelas IV</span>
                            <img src="{{ asset('frontend/img/kelas-jelajah/image-4.jpg') }}"
                                class="card-img-top position-relative" alt="blog">
                            <div class="card-body">
                                <h3 class="h5 card-title"><a href="#">Appropriately productize fully</a></h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="single-blog-card card border-0 shadow-sm white-bg">
                            <span class="category position-absolute badge badge-pill badge-primary">Kelas IV</span>
                            <img src="{{ asset('frontend/img/kelas-jelajah/image-5.jpg') }}"
                                class="card-img-top position-relative" alt="blog">
                            <div class="card-body">
                                <h3 class="h5 card-title"><a href="#">Appropriately productize fully</a></h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="single-blog-card card border-0 shadow-sm white-bg">
                            <span class="category position-absolute badge badge-pill badge-primary">Kelas IV</span>
                            <img src="{{ asset('frontend/img/kelas-jelajah/image-6.jpg') }}"
                                class="card-img-top position-relative" alt="blog">
                            <div class="card-body">
                                <h3 class="h5 card-title"><a href="#">Appropriately productize fully</a></h3>
                                <p class="card-text">Some quick example text to build on the card title and make up the
                                    bulk.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--our blog section end-->

    </div>
    <!--body content wrap end-->

    <!--shape image start-->
    <div class="shape-img subscribe-wrap">
        <img src="{{ asset('frontend/img/footer-top-shape.png') }}" alt="footer shape" class="img-fluid">

    </div>
    <!--shape image end-->

    <!--footer section start-->
    <footer class="footer-section">

        <!--footer top start-->
        <div class="footer-top pt-150 pb-5 background-img-2"
            style="background: url('{{ asset('frontend/img/footer-bg.png') }}')no-repeat center top / cover">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-3 mb-3 mb-lg-0">
                        <div class="footer-nav-wrap text-white">
                            <img src="{{ asset('frontend/img/logo.png') }}" alt="footer logo" width="120"
                                class="img-fluid mb-3">
                            <p>Wisdom Education</p>

                            <div class="social-list-wrap">
                                <ul class="social-list list-inline list-unstyled">
                                    <li class="list-inline-item"><a href="#" target="_blank" title="Facebook"><span
                                                class="ti-facebook"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank" title="Twitter"><span
                                                class="ti-twitter"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank" title="Instagram"><span
                                                class="ti-instagram"></span></a></li>
                                    <li class="list-inline-item"><a href="#" target="_blank" title="printerst"><span
                                                class="ti-pinterest"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 ml-auto mb-4 mb-lg-0">
                        <div class="footer-nav-wrap text-white">
                            <h5 class="mb-3 text-white">Others Links</h5>
                            <ul class="list-unstyled">
                                <li class="mb-2"><a href="#">About Us</a></li>
                                <li class="mb-2"><a href="#">Contact Us</a></li>
                                <li class="mb-2"><a href="#">Pricing</a></li>
                                <li class="mb-2"><a href="#">Privacy Policy</a></li>
                                <li class="mb-2"><a href="#">Terms and Conditions</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 ml-auto mb-4 mb-lg-0">
                        <div class="footer-nav-wrap text-white">
                            <h5 class="mb-3 text-white">Support</h5>
                            <ul class="list-unstyled support-list">
                                <li class="mb-2 d-flex align-items-center"><span class="ti-location-pin mr-2"></span>
                                    Universitas Negeri Jakarta, Fakultas Ilmu Pendidikan, Prodi Teknologi Pendidikan
                                </li>
                                <li class="mb-2 d-flex align-items-center"><span class="ti-mobile mr-2"></span> <a
                                        href="tel:+61283766284"> +61 2 8376 6284</a></li>
                                <li class="mb-2 d-flex align-items-center"><span class="ti-email mr-2"></span><a
                                        href="wisdomeducation@sepatuloal.com"> wisdomeducation@sepatuloal.com</a></li>
                                <li class="mb-2 d-flex align-items-center"><span class="ti-world mr-2"></span><a
                                        href="#"> www.wisdomeducation.com</a></li>
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
                        <p class="copyright-text pb-0 mb-0">Copyrights © {{ date('Y') }} All
                            rights reserved by
                            <a href="https://itgenic.co.id">itgenic.co.id</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--footer copyright end-->
    </footer>
    <!--footer section end-->

    <!--jQuery-->
    <script src="{{ asset('frontend/js/jquery-3.5.0.min.js') }}"></script>
    <!--Popper js-->
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <!--Bootstrap js-->
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <!--Magnific popup js-->
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <!--jquery easing js-->
    <script src="{{ asset('frontend/js/jquery.easing.min.js') }}"></script>
    <!--jquery ytplayer js-->
    <script src="{{ asset('frontend/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <!--wow js-->
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <!--owl carousel js-->
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <!--countdown js-->
    <script src="{{ asset('frontend/js/jquery.countdown.min.js') }}"></script>
    <!--validator js-->
    <script src="{{ asset('frontend/js/validator.min.js') }}"></script>
    <!--custom js-->
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>
</body>

</html>
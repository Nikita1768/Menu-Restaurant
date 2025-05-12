<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>Restaurant</title>
    <!-- Favicon -->
    <link href="{{ asset('assets/images/favicon.png') }}" rel="shortcut icon">
    <!-- CSS -->
    <link href="{{ asset('assets/plugins/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/magnific-popup/magnific-popup.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/owl-carousel/owl.theme.default.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/justified-gallery/justified-gallery.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/sal/sal.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <!-- Fonts/Icons -->
    <link href="{{ asset('assets/plugins/font-awesome/css/all.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/themify/themify-icons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/simple-line-icons/css/simple-line-icons.css') }}" rel="stylesheet">
</head>
<body data-preloader="4">

<div class="wrapper">

    <!-- Scroll to Top -->
    <div class="scrolltotop">
        <a class="button-circle button-circle-sm button-circle-black" href="#"><i class="ti-arrow-up"></i></a>
    </div>
    <!-- end Scroll to Top -->

    <!-- Header -->
    <div class="header absolute-light">
        <div class="container">
            <div class="logo">
                <h4 class="uppercase letter-spacing-2"><a href="{{ route('index') }}">DeutscheBistro</a></h4>
            </div>
            <div class="header-menu-wrapper">
                <!-- Menu -->
                <ul class="header-menu">
                    <li class="m-item">
                        <a class="m-link" href="#">Alle Gerichte</a>
                        <ul class="m-dropdown">
                            @foreach($categories as $category)
                                <li class="m-dropdown-item"><a class="m-dropdown-link"
                                                               href="{{ route('category', $category->id) }}">{{ $category->name }}</a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
                <!-- Extra -->
                <div class="header-menu-extra">
                    <ul class="list-inline">
                        <li><a href="https://facebook.com"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="https://twitter.com"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                <!-- Close Button -->
                <button class="close-button">
                    <span></span>
                </button>
            </div><!-- end header-menu-wrapper -->
            <!-- Menu Toggle on Mobile -->
            <button class="m-toggle">
                <span></span>
            </button>
        </div><!-- end container -->
    </div>
    <!-- end Header -->

    <!-- Hero section -->
    <div class="section-xl bg-image parallax-bg" data-bg-src="{{ asset('assets/images/logo.jpg') }}">
        <div class="bg-dark-04">
            <div class="container text-center">
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">
                        <h1 class="margin-0">Wir sind Restaurant</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    @foreach($dishes as $dish)
                        <div class="row align-items-center my-2">
                            <div class="col-12 col-lg-5">
                                <a href="#">
                                    <img src="{{ asset('storage/'.$dish->image) }}" alt="image">
                                </a>
                            </div>
                            <div class="col-12 col-lg-7">
                                <h5 class="font-weight-normal margin-top-10"><a href="#">{{ $dish->name }}</a></h5>
                                <p class="font-weight-light">{{ $dish->description }}</p>
                                <ul class="list-inline-dash font-small margin-top-20">
                                    <li><a href="#">{{ $dish->category->name }}</a></li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Sidebar -->
                <div class="col-12 col-lg-4 d-none d-lg-block">
                    <!-- Category list -->
                    <div class="border padding-30 text-center">
                        <h6 class="font-weight-normal font-small uppercase margin-bottom-30">Categories</h6>
                        <ul class="blog-category-list">
                            @foreach($categories as $category)
                                <li><a href="{{ route('category', $category->id) }}">{{ $category->name }}
                                        <span>{{ $category->dishes->where('show', true)->count() }}</span></a></li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- About me -->
                    <div class="border padding-30 margin-top-30 text-center">
                        <h6 class="font-weight-normal font-small uppercase margin-bottom-30">Ich bin Nikita</h6>
                        <div class="margin-bottom-20">
                            <img class="avatar-md" src="{{ asset('assets/images/Ich.jpeg') }}" alt="">
                        </div>
                        <p>Ich habe diese App entwickelt, damit jedes Restaurant eine Website mit einem schönen Design und sehr einfach zu verwalten haben kann.</p>
                        <ul class="list-inline margin-top-20">
                            <li><a href="https://t.me/+BRuAydv1IGFmMDhi"><i class="fab fa-telegram-plane"></i></a></li>
                            <li><a href="https://www.instagram.com/nikitastolyar/"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="section-sm bg-dark">
        <div class="container">
            <div class="row col-spacing-10">
                <div class="col-12 col-md-6 text-center text-md-left">
                    <p>© 2025 Stoliar Mykyta, All Rights Reserved.</p>
                </div>
                <div class="col-12 col-md-6 text-center text-md-right">
                    <ul class="list-inline-dash">
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <!-- end Footer -->

</div><!-- end wrapper -->

<!-- ***** JAVASCRIPTS ***** -->
<script src="{{ asset('assets/plugins/jquery.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>
<script src="{{ asset('assets/plugins/plugins.js') }}"></script>
<script src="{{ asset('assets/js/functions.js') }}"></script>
</body>
</html>

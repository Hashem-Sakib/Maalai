<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,600,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
   

    <title>@yield('title')</title>
    @yield('scripts')
</head>

<body>


    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->


    <div class="site-navbar-wrap">
        <div class="site-navbar-top">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="d-flex mr-auto">
                            <a href="#" class="d-flex align-items-center mr-4">
                                <span class="icon-envelope mr-2"></span>
                                <span class="d-none d-md-inline-block">malai@domain.com</span>
                            </a>
                            <a href="#" class="d-flex align-items-center mr-auto">
                                <span class="icon-phone mr-2"></span>
                                <span class="d-none d-md-inline-block">01537197539</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="mr-auto">
                            <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                            <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                            <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                            <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center">
                    {{-- <div class="preloader flex-column justify-content-center align-items-center">
                        <a href="../home"><img class="animation__shake" src="{{asset('image/malai.jpg')}}"
                                style="border-radius: 50%" alt="Malai" height="50" width="50"> </a>
                    </div> --}}
                    <div class="col-2">
                        <h1 class="my-0 site-logo"><a href="../home">Malai</a></h1>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation text-right" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                        class="site-menu-toggle js-menu-toggle text-white"><span
                                            class="icon-menu h3"></span></a></div>

                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    <li class="active"><a href="#home-section" class="nav-link">Home</a></li>
                                    <li><a href="#classes-section" class="nav-link">About</a></li>
                                    <li class="has-children">
                                        <a href="#" class="nav-link">Pages</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="#" class="nav-link">Team</a></li>
                                            <li><a href="#" class="nav-link">Pricing</a></li>
                                            <li><a href="#" class="nav-link">FAQ</a></li>
                                            <li class="has-children">
                                                <a href="#">More Links</a>
                                                <ul class="dropdown">
                                                    <li><a href="#">Menu One</a></li>
                                                    <li><a href="#">Menu Two</a></li>
                                                    <li><a href="#">Menu Three</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="#about-section" class="nav-link">Branches</a></li>
                                    <li><a href="#events-section" class="nav-link">Events</a></li>
                                    <li><a href="#gallery-section" class="nav-link">Gallery</a></li>
                                    <li><a href="#contact-section" class="nav-link">Contact</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="hero" style="background-image: url('{{ asset('images/hero_1.jpg')}}');"></div> --}}
    {{-- <div class="hero" style="background-image: url('images/hero_1.jpg');"></div> --}}


    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12 col sm-12 12">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>




    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Trogn">
    <meta property="og:site_name" content="">
    <meta property="og:site" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:type" content="article">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <!--title-->
    <title>App Landing Page Template</title>

    <!--favicon icon-->
    <link rel="icon" href="<?= asset('home/img/favicon.png') ?>" type="image/png" sizes="16x16">

    <!--google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans&display=swap"
          rel="stylesheet">

    <!--Bootstrap css-->
    <link rel="stylesheet" href="<?= asset('home/css/bootstrap.min.css') ?>">
    <!--Magnific popup css-->
    <link rel="stylesheet" href="<?= asset('home/css/magnific-popup.css') ?>">
    <!--Themify icon css-->
    <link rel="stylesheet" href="<?= asset('home/css/themify-icons.css') ?>">
    <!--animated css-->
    <link rel="stylesheet" href="<?= asset('home/css/animate.min.css') ?>">

    <!--Owl carousel css-->
    <link rel="stylesheet" href="<?= asset('home/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('home/css/owl.theme.default.min.css') ?>">
    <!--custom css-->
    <link rel="stylesheet" href="<?= asset('home/css/style.css') ?>">
    <!--responsive css-->
    <link rel="stylesheet" href="<?= asset('home/css/responsive.css') ?>">

</head>
<body>

<!--header section start-->
<header class="header custom-header">
    <!--start navbar-->
    <nav class="navbar navbar-expand-lg fixed-top custom-nav white-bg">
        <div class="container">
            <a class="navbar-brand" href=""><img src="<?= asset('home/img/logo-color-1x.png') ?>" width="120" alt="logo"
                                                 class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>

            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#screenshots">Screenshots</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">Contact</a>
                    </li>
                    <?php if (!auth_check()) { ?>
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="<?= url('register') ?>">SignUp</a>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link page-scroll dropdown-toggle" href="#" id="navbarDropdownPage"
                               role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Hello <?= strtoupper(auth()['username']) ?> !
                            </a>
                            <div class="dropdown-menu submenu" aria-labelledby="navbarDropdownPage">
                                <a class="dropdown-item" href="<?= url('logout') ?>">Logout</a>
                            </div>
                        </li>
                    <?php } ?>
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
        <div class="container" id="animation-area-1">
            <div class="row align-items-center justify-content-center">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                    <div class="hero-content section-title text-center text-lg-start my-5 mt-lg-0">
                        <span class="text-uppercase color-secondary fw-bold">Best Design Quality</span>
                        <h1 class="fw-bold">We Build Best Apps that Users Love</h1>
                        <p class="lead">Progressively fashion impactful synergy after covalent quality vectors.
                            Phosfluorescently administrate highly efficient e-business without 24/7 partnerships. </p>
                        <div class="action-btn mt-4">
                            <a href="#" class="btn solid-btn">Get our Services</a>
                        </div>
                    </div>
                </div>
                <div class="col-9 col-md-7 col-lg-5 offset-xl-1 align-self-sm-end">
                    <div class="hero-img position-relative">
                        <div class="image-bg-positioning">
                            <img src="<?= asset('home/img/app-product.png') ?>" alt="" class="img-fluid">
                        </div>
                        <div class="animation-item d-none d-md-block d-lg-block">
                            <div class="p-4 w-75 rounded-custom d-flex white-bg hero-animated-card-1">
                                <p class="gr-text-11 mb-0 text-mirage-2">“A better way to manage your sales, team,
                                    clients.”</p>
                                <div class="small-card-img ms-3">
                                    <img src="<?= asset('home/img/team-2.jpg') ?>" alt="" width="80px"
                                         class="rounded-circle img-fluid">
                                </div>
                            </div>
                            <div class="p-4 w-75 rounded-custom d-flex secondary-bg hero-animated-card-2">
                                <div class="small-card-img me-3 text-white">
                                    <img src="<?= asset('home/img/team-5.jpg') ?>" alt="" width="80px"
                                         class="rounded-circle img-fluid">
                                </div>
                                <p class="gr-text-11 mb-0 text-white">“Ensuring the best return on investment for
                                    business”</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <section class="pb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                    <div class="single-fact p-3 text-center">
                        <h3 class="title display-3 fw-semibold">50K</h3>
                        <p class="mb-0">People are already reading this book and improving!</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                    <div class="single-fact p-3 text-center">
                        <h3 class="title display-3 fw-semibold">96% </h3>
                        <p class="mb-0">Satisfaction rate comes from our awesome customers.</p>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-4 mb-md-4 mb-lg-0">
                    <div class="single-fact p-3 text-center">
                        <h3 class="title display-3 fw-semibold">4.9</h3>
                        <p class="mb-0">Average customer ratings we have got all over internet.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--about us section start-->
    <section id="about" class="about-us ptb-100 gray-light-bg">
        <div class="container">
            <div class="row align-items-center justify-content-between g-4">
                <div class="col-md-4">
                    <div class="about-content-right">
                        <img src="<?= asset('home/img/image-15.png') ?>" alt="about us" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="about-content-left section-heading">
                        <span class="text-uppercase color-secondary sub-title">Android or ios Apps</span>
                        <h2>Use Our Apps
                            to Manage Everything Your Business</h2>

                        <div class="single-feature mb-4 mt-5">
                            <div class="icon-box-wrap d-flex align-items-center mb-2">
                                <div class="me-3 icon-box">
                                    <img src="<?= asset('home/img/image-icon-1.png') ?>" alt="icon image"
                                         class="img-fluid">
                                </div>
                                <p class="mb-0">Proactively syndicate open-source e-markets after low-risk high-yield
                                    synergy. Professionally
                                    simplify visionary technology.</p>
                            </div>
                        </div>
                        <div class="single-feature mb-4">
                            <div class="icon-box-wrap mb-2">
                                <div class="me-3 icon-box">
                                    <img src="<?= asset('home/img/image-icon-2.png') ?>" alt="icon image"
                                         class="img-fluid">
                                </div>
                                <p class="mb-0">Intrinsicly aggregate cutting-edge internal or "organic" sources through
                                    pandemic manufactured products. Synergistically.</p>
                            </div>
                            <p></p>
                        </div>
                        <div class="single-feature mb-4">
                            <div class="icon-box-wrap mb-2">
                                <div class="me-3 icon-box">
                                    <img src="<?= asset('home/img/image-icon-3.png') ?>" alt="icon image"
                                         class="img-fluid">
                                </div>
                                <p class="mb-0">Completely administrate empowered e-tailers after extensive experiences.
                                    Holisticly leverage existing quality networks.</p>
                            </div>
                            <p></p>
                        </div>
                        <div class="single-feature mb-4">
                            <div class="icon-box-wrap mb-2">
                                <div class="me-3 icon-box">
                                    <img src="<?= asset('home/img/image-icon-4.png') ?>" alt="icon image"
                                         class="img-fluid">
                                </div>
                                <p class="mb-0">Intrinsicly incentivize functionalized metrics whereas go forward
                                    networks. Collaboratively fabricate clicks-and-mortar intellectual.</p>
                            </div>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->

    <!--features section start-->
    <div id="features" class="feature-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <span class="text-uppercase color-secondary sub-title">Best features</span>
                        <h2>Easy Process with Best Features</h2>
                        <p>Objectively deliver professional value with diverse web-readiness.
                            Collaboratively transition wireless customer service without goal-oriented catalysts for
                            change. Collaboratively.</p>

                    </div>
                </div>
            </div>

            <!--feature new style start-->
            <div class="row row-grid align-items-center g-4">
                <div class="col-lg-4">
                    <div class="d-flex align-items-start mb-5">
                        <div class="pe-4">
                            <div class="icon icon-shape icon-color-1 rounded-circle">
                                <span class="ti-face-smile"></span>
                            </div>
                        </div>
                        <div class="icon-text">
                            <h5>Responsive web design</h5>
                            <p class="mb-0">Modular and interchangable componente between layouts and even demos.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-5">
                        <div class="pe-4">
                            <div class="icon icon-shape icon-color-2 rounded-circle">
                                <span class="ti-vector"></span>
                            </div>
                        </div>
                        <div class="icon-text">
                            <h5>Loaded with features</h5>
                            <p class="mb-0">Modular and interchangable componente between layouts and even demos.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <div class="pe-4">
                            <div class="icon icon-shape icon-color-3 rounded-circle">
                                <span class="ti-headphone-alt"></span>
                            </div>
                        </div>
                        <div class="icon-text">
                            <h5>Friendly online support</h5>
                            <p class="mb-0">Modular and interchangable componente between layouts and even demos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="position-relative" style="z-index: 10;">
                        <img alt="Image placeholder" src="<?= asset('home/img/image-10.png') ?>"
                             class="img-center img-fluid">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-start mb-5">
                        <div class="pe-4">
                            <div class="icon icon-shape icon-color-4 rounded-circle">
                                <span class="ti-layout-media-right"></span>
                            </div>
                        </div>
                        <div class="icon-text">
                            <h5>Free updates forever</h5>
                            <p class="mb-0">Modular and interchangable componente between layouts and even demos.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-5">
                        <div class="pe-4">
                            <div class="icon icon-shape icon-color-5 rounded-circle">
                                <span class="ti-layout-cta-right"></span>
                            </div>
                        </div>
                        <div class="icon-text">
                            <h5>Built with Sass</h5>
                            <p class="mb-0">Modular and interchangable componente between layouts and even demos.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start">
                        <div class="pe-4">
                            <div class="icon icon-shape icon-color-6 rounded-circle">
                                <span class="ti-palette"></span>
                            </div>
                        </div>
                        <div class="icon-text">
                            <h5>Infinite colors</h5>
                            <p class="mb-0">Modular and interchangable componente between layouts and even demos.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--feature new style end-->
        </div>
    </div>
    <section class="video-promo ptb-100 background-img"
             style="background: url('/public/home/img/hero-bg-1.jpg')no-repeat center center / cover">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="video-promo-content mt-4 text-center">
                        <a href="https://www.youtube.com/watch?v=9No-FiEInLA"
                           class="popup-youtube video-play-icon d-inline-block"><span
                                    class="ti-control-play"></span></a>
                        <h5 class="mt-4 text-white">Watch video overview</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="pricing" class="package-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-11 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <span class="text-uppercase color-secondary sub-title">Our Pricing Package</span>
                        <h2>Affordable Pricing and Packages Choose your Best One</h2>
                        <p>
                            Distinctively brand cutting-edge imperatives through synergistic strategize orthogonal
                            relationships whereas infrastructures customize low-risk high-yield processes rather than
                            user friendly.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center single-pricing-pack p-5">
                        <h5 class="mb-2">Basic</h5>
                        <div class="pricing-img mt-3 mb-4">
                            <img src="<?= asset('home/img/basic.svg') ?>" alt="pricing img" class="img-fluid">
                        </div>

                        <div class="card-body p-0">
                            <ul class="list-unstyled text-sm pricing-feature-list">
                                <li>5 Users access same time</li>
                                <li>Integrated eCommerce</li>
                                <li>Customization interface</li>
                                <li>Weekly updated</li>
                                <li>24/7 Phone Support</li>
                                <li>Event Analytics</li>
                            </ul>
                            <div class="py-4 border-0 pricing-header">
                                <div class="h1 text-center mb-0 color-secondary">$<span
                                            class="price fw-semibold">29</span></div>
                            </div>
                            <a href="#" class="btn outline-btn" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center popular-price single-pricing-pack p-5">
                        <h5 class="mb-2">Standard</h5>
                        <div class="pricing-img mt-3 mb-4">
                            <img src="<?= asset('home/img/standard.svg') ?>" alt="pricing img" class="img-fluid">
                        </div>

                        <div class="card-body p-0">
                            <ul class="list-unstyled text-sm pricing-feature-list">
                                <li>10 Users access same time</li>
                                <li>Integrated eCommerce</li>
                                <li>Customization interface</li>
                                <li>Daily updated</li>
                                <li>24/7 Phone Support</li>
                                <li>Event Analytics</li>
                            </ul>
                            <div class="py-4 border-0 pricing-header">
                                <div class="h1 text-center mb-0 color-secondary">$<span
                                            class="price fw-semibold">145</span></div>
                            </div>
                            <a href="#" class="btn solid-btn" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card text-center single-pricing-pack p-5">
                        <h5 class="mb-2">Unlimited</h5>
                        <div class="pricing-img mt-3 mb-4">
                            <img src="<?= asset('home/img/unlimited.svg') ?>" alt="pricing img" class="img-fluid">
                        </div>

                        <div class="card-body p-0">
                            <ul class="list-unstyled text-sm pricing-feature-list">
                                <li>20 Users access same time</li>
                                <li>Integrated eCommerce</li>
                                <li>Fully Customization interface</li>
                                <li>Free updated</li>
                                <li>24/7 Phone Support</li>
                                <li>Event Analytics</li>
                            </ul>
                            <div class="py-4 border-0 pricing-header">
                                <div class="h1 text-center mb-0 color-secondary">$<span
                                            class="price fw-semibold">249</span></div>
                            </div>
                            <a href="#" class="btn outline-btn" target="_blank">Purchase now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5 text-center">
                <p class="mb-2">If you need custom services or Need more? <a href="#" class="color-secondary">
                        Contact us
                    </a></p>
            </div>
        </div>
    </section>
    <!--our pricing packages section end-->

    <!--screenshots section start-->
    <section id="screenshots" class="screenshots-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center">
                        <span class="text-uppercase color-secondary sub-title">App Screenshots</span>
                        <h2>App Screenshots Looks Awesome</h2>
                        <p>Credibly synthesize multimedia based networks vis-a-vis re-engineer enterprise-wide
                            imperatives whereas fully tested web-readiness. Continually leverage existing worldwide
                            interfaces </p>
                    </div>
                </div>
            </div>
            <!--start app screen carousel-->
            <div class="screen-slider-content mt-5">
                <div class="screenshot-frame"></div>
                <div class="screen-carousel owl-carousel owl-theme dot-indicator">
                    <img src="<?= asset('home/img/01.png') ?>" class="img-fluid" alt="screenshots">
                    <img src="<?= asset('home/img/02.png') ?>" class="img-fluid" alt="screenshots">
                    <img src="<?= asset('home/img/03.png') ?>" class="img-fluid" alt="screenshots">
                    <img src="<?= asset('home/img/04.png') ?>" class="img-fluid" alt="screenshots">
                    <img src="<?= asset('home/img/05.png') ?>" class="img-fluid" alt="screenshots">
                    <img src="<?= asset('home/img/06.png') ?>" class="img-fluid" alt="screenshots">
                </div>
            </div>
            <!--end app screen carousel-->

        </div>
    </section>
    <!--screenshots section end-->

    <!--our blog section start-->
    <section id="blog" class="our-blog-section ptb-100 primary-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-heading mb-5 text-white">
                        <h2 class="text-white">Our Latest News</h2>
                        <p>
                            Enthusiastically drive revolutionary opportunities before emerging leadership. Distinctively
                            transform tactical methods of empowerment via resource sucking core.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-card card border-0 shadow-sm white-bg">
                        <span class="category position-absolute badge badge-pill text-bg-primary">Lifestyle</span>
                        <img src="<?= asset('home/img/blog/1.jpg') ?>" class="card-img-top position-relative"
                             alt="blog">
                        <div class="card-body">
                            <div class="post-meta mb-2">
                                <ul class="list-inline meta-list">
                                    <li class="list-inline-item">Jan 21, 2019</li>
                                    <li class="list-inline-item"><span>45</span> Comments</li>
                                    <li class="list-inline-item"><span>10</span> Share</li>
                                </ul>
                            </div>
                            <h3 class="h5 card-title"><a href="#">Appropriately productize fully</a></h3>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk.</p>
                            <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-card card border-0 shadow-sm white-bg">
                        <span class="category position-absolute badge badge-pill text-bg-danger">Technology</span>
                        <img src="<?= asset('home/img/blog/2.jpg') ?>" class="card-img-top position-relative"
                             alt="blog">
                        <div class="card-body">
                            <div class="post-meta mb-2">
                                <ul class="list-inline meta-list">
                                    <li class="list-inline-item">May 26, 2019</li>
                                    <li class="list-inline-item"><span>30</span> Comments</li>
                                    <li class="list-inline-item"><span>5</span> Share</li>
                                </ul>
                            </div>
                            <h3 class="h5 card-title"><a href="#">Quickly formulate backend</a></h3>
                            <p class="card-text">Synergistically engage effective ROI after customer directed
                                partnerships.</p>
                            <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-card card border-0 shadow-sm white-bg">
                        <span class="category position-absolute badge badge-pill text-bg-info">Science</span>
                        <img src="<?= asset('home/img/blog/3.jpg') ?>" class="card-img-top" alt="blog">
                        <div class="card-body">
                            <div class="post-meta mb-2">
                                <ul class="list-inline meta-list">
                                    <li class="list-inline-item">Apr 25, 2019</li>
                                    <li class="list-inline-item"><span>41</span> Comments</li>
                                    <li class="list-inline-item"><span>30</span> Share</li>
                                </ul>
                            </div>
                            <h3 class="h5 card-title"><a href="#">Objectively extend extensive</a></h3>
                            <p class="card-text">Holisticly mesh open-source leadership rather than proactive
                                users. </p>
                            <a href="#" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our blog section end-->

    <!--our team section start-->
    <section id="team" class="team-member-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-8">
                    <div class="section-heading text-center mb-5">
                        <span class="text-uppercase color-secondary sub-title">Lovely Team</span>
                        <h2>Our Team Members</h2>
                        <p>
                            Following reasons show advantages of adding AppCo to your lead pages, foster market
                            positioning products without demos and checkouts.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-member position-relative">
                        <div class="team-image">
                            <img src="<?= asset('home/img/team-4.jpg') ?>" alt="Team Members"
                                 class="img-fluid rounded-circle">
                        </div>
                        <div class="team-info text-white rounded-circle d-flex flex-column align-items-center justify-content-center">
                            <h5 class="mb-0">Edna Mason</h5>
                            <h6>Senior Designer</h6>
                            <ul class="list-inline team-social social-icon mt-4 text-white">
                                <li class="list-inline-item"><a href="#"><span class="ti-facebook"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-twitter"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-github"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-dribbble"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-member position-relative">
                        <div class="team-image">
                            <img src="<?= asset('home/img/team-1.jpg') ?>" alt="Team Members"
                                 class="img-fluid rounded-circle">
                        </div>
                        <div class="team-info text-white rounded-circle d-flex flex-column align-items-center justify-content-center">
                            <h5 class="mb-0">Edna Mason</h5>
                            <h6>Senior Designer</h6>
                            <ul class="list-inline team-social social-icon mt-4 text-white">
                                <li class="list-inline-item"><a href="#"><span class="ti-facebook"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-twitter"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-github"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-dribbble"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-member position-relative">
                        <div class="team-image">
                            <img src="<?= asset('home/img/team-2.jpg') ?>" alt="Team Members"
                                 class="img-fluid rounded-circle">
                        </div>
                        <div class="team-info text-white rounded-circle d-flex flex-column align-items-center justify-content-center">
                            <h5 class="mb-0">Edna Mason</h5>
                            <h6>Senior Designer</h6>
                            <ul class="list-inline team-social social-icon mt-4 text-white">
                                <li class="list-inline-item"><a href="#"><span class="ti-facebook"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-twitter"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-github"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-dribbble"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-team-member position-relative">
                        <div class="team-image">
                            <img src="<?= asset('home/img/team-3.jpg') ?>" alt="Team Members"
                                 class="img-fluid rounded-circle">
                        </div>
                        <div class="team-info text-white rounded-circle d-flex flex-column align-items-center justify-content-center">
                            <h5 class="mb-0">Edna Mason</h5>
                            <h6>Senior Designer</h6>
                            <ul class="list-inline team-social social-icon mt-4 text-white">
                                <li class="list-inline-item"><a href="#"><span class="ti-facebook"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-twitter"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-github"></span></a></li>
                                <li class="list-inline-item"><a href="#"><span class="ti-dribbble"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our team section end-->


    <!--contact us section start-->
    <section id="contact" class="contact-us gray-light-bg ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-12 pb-3 message-box d-none">
                    <div class="alert alert-danger"></div>
                </div>
                <div class="col-md-5">
                    <div class="section-heading">
                        <h2>Contact With Us</h2>
                        <p>It's very easy to get in touch with us. Just use the contact form or pay us a
                            visit for a coffee at the office. Dynamically innovate competitive technology after an
                            expanded array of leadership.</p>
                    </div>
                    <div class="footer-address">
                        <h6><strong>Head Office</strong></h6>
                        <p>121 King St, Melbourne VIC 3000, Australia</p>
                        <ul>
                            <li><span>Phone: +61 2 8376 6284</span></li>
                            <li><span>Email : <a href="mailto:hello@yourdomain.com">hello@yourdomain.com</a></span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-7">
                    <form action="#" method="POST" id="contactForm" class="contact-us-form" novalidate="novalidate">
                        <h5>Reach us quickly</h5>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control mb-3" name="name" id="name"
                                           placeholder="Enter name"
                                           required="required">
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="email" class="form-control mb-3" name="email" id="email"
                                           placeholder="Enter email"
                                           required="required">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" name="phone" value="" class="form-control mb-3" id="phone"
                                           placeholder="Your Phone">
                                </div>
                            </div>
                            <div class="col-sm-6 col-12">
                                <div class="form-group">
                                    <input type="text" name="company" value="" size="40" class="form-control mb-3"
                                           id="company" placeholder="Your Company">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control mb-3 h-100" rows="7"
                                              cols="25"
                                              placeholder="Message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mt-3">
                                <button type="submit" class="btn solid-btn" id="btnContactUs">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                    <p class="form-message"></p>
                </div>
            </div>
        </div>
    </section>
    <!--contact us section end-->

    <!--client section start-->
    <section class="client-section ptb-100">
        <div class="container">
            <!--clients logo start-->
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <span class="text-uppercase color-secondary sub-title">Lovely Clients</span>
                        <h2>Trusted by Companies</h2>
                        <p>
                            Rapidiously morph transparent internal develop economically sound core competencies sources
                            whereas resource sucking
                            e-business. Conveniently innovate compelling internal.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                        <div class="item single-client">
                            <img src="<?= asset('home/img/client-5-color.png') ?>" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="<?= asset('home/img/client-1-color.png') ?>" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="<?= asset('home/img/client-6-color.png') ?>" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="<?= asset('home/img/client-3-color.png') ?>" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="<?= asset('home/img/client-4-color.png') ?>" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="<?= asset('home/img/client-5-color.png') ?>" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="<?= asset('home/img/client-7-color.png') ?>" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="<?= asset('home/img/client-2-color.png') ?>" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="<?= asset('home/img/client-1-color.png') ?>" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="<?= asset('home/img/client-3-color.png') ?>" alt="client logo" class="client-img">
                        </div>
                    </div>
                </div>
            </div>
            <!--clients logo end-->
        </div>
    </section>
    <!--client section start-->

</div>
<!--body content wrap end-->

<!--shape image start-->
<div class="shape-img subscribe-wrap">
    <img src="<?= asset('home/img/footer-top-shape.png') ?>" alt="footer shape" class="img-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="position-relative">
                    <form action="#" method="post"
                          class="subscribe-form subscribe-form-footer d-none d-md-block d-lg-block">
                        <div class="d-flex align-items-center">
                            <input type="text" class="form-control input" id="email-footer" name="email"
                                   placeholder="info@yourdomain.com">
                            <input type="submit" class="button btn solid-btn" id="submit-footer" value="Subscribe">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--shape image end-->

<!--footer section start-->
<footer class="footer-section">

    <!--footer top start-->
    <div class="footer-top pt-150 background-img-2"
         style="background: url('/public/home/img/footer-bg.png')no-repeat center top / cover">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-12 col-lg-4 mb-4 mb-md-4 mb-sm-4 mb-lg-0">
                    <div class="footer-nav-wrap text-white">
                        <img src="<?= asset('home/img/logo-white-1x.png') ?>" alt="footer logo" width="120"
                             class="img-fluid mb-3">
                        <p>Holisticly empower premium architectures without value-added ideas. Seamlessly evolve
                            cross-platform experiences.</p>

                        <div class="social-list-wrap">
                            <ul class="social-list list-inline list-unstyled">
                                <li class="list-inline-item"><a href="#" target="_blank" title="Facebook"><span
                                                class="ti-facebook"></span></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank" title="Twitter"><span
                                                class="ti-twitter"></span></a></li>
                                <li class="list-inline-item"><a href="#" target="_blank"
                                                                title="Instagram"><span class="ti-instagram"></span></a>
                                </li>
                                <li class="list-inline-item"><a href="#" target="_blank"
                                                                title="printerst"><span class="ti-pinterest"></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-lg-4 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <div class="footer-nav-wrap text-white">
                                <h5 class="mb-3 text-white">Resources</h5>
                                <ul class="list-unstyled">
                                    <li class="mb-2"><a href="#">Help</a></li>
                                    <li class="mb-2"><a href="#">Events</a></li>
                                    <li class="mb-2"><a href="#">Live Support</a></li>
                                    <li class="mb-2"><a href="#">Open Sources</a></li>
                                    <li class="mb-2"><a href="#">Documentation</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4 mb-4 mb-sm-4 mb-md-0 mb-lg-0">
                            <div class="footer-nav-wrap text-white">
                                <h5 class="mb-3 text-white">Company</h5>
                                <ul class="list-unstyled support-list">
                                    <li class="mb-2">
                                        <a href="#">About Us</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#">Careers</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#">Customers</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#">Community</a>
                                    </li>
                                    <li class="mb-2">
                                        <a href="#">Our Team</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 col-lg-4">
                            <div class="footer-nav-wrap text-white">
                                <h5 class="mb-3 text-white">Location</h5>
                                <ul class="list-unstyled support-list">
                                    <li class="mb-2 d-flex align-items-center"><span
                                                class="ti-location-pin me-2"></span>
                                        121 King Melbourne
                                        <br>Australia 3000
                                    </li>
                                    <li class="mb-2 d-flex align-items-center"><span class="ti-mobile me-2"></span> <a
                                                href="tel:+61283766284"> +61 2 8376 6284</a></li>
                                    <li class="mb-2 d-flex align-items-center"><span class="ti-email me-2"></span><a
                                                href="mailto:mail@example.com"> mail@example.com</a></li>
                                    <li class="mb-2 d-flex align-items-center"><span class="ti-world me-2"></span><a
                                                href="#"> www.yourdomain.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer bottom copyright start-->
        <div class="footer-bottom border-gray-light mt-5 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-7">
                        <div class="copyright-wrap small-text">
                            <p class="mb-0 text-white">© ThemeTags Design Agency, All rights reserved</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="terms-policy-wrap text-md-end text-start">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a class="small-text" href="#">Terms</a></li>
                                <li class="list-inline-item"><a class="small-text" href="#">Security</a></li>
                                <li class="list-inline-item"><a class="small-text" href="#">Privacy Policy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--footer bottom copyright end-->
    </div>
    <!--footer top end-->
</footer>
<!--footer section end-->

<!--jQuery-->
<script src="<?= asset('home/js/jquery-3.6.1.min.js') ?>"></script>
<!--Popper js-->
<script src="<?= asset('home/js/popper.min.js') ?>"></script>
<!--Bootstrap js-->
<script src="<?= asset('home/js/jquery.magnific-popup.min.js') ?>"></script>
<!--Magnific popup js-->
<script src="<?= asset('home/js/jquery.magnific-popup.min.js') ?>"></script>
<!--jquery easing js-->
<script src="<?= asset('home/js/jquery.easing.min.js') ?>"></script>

<!--wow js-->
<script src="<?= asset('home/js/wow.min.js') ?>"></script>
<!--owl carousel js-->
<script src="<?= asset('home/js/owl.carousel.min.js') ?>"></script>
<!--countdown js-->
<script src="<?= asset('home/js/jquery.countdown.min.js') ?>"></script>
<!--validator js-->
<script src="<?= asset('home/js/validator.min.js') ?>"></script>
<!--custom js-->
<script src="<?= asset('home/js/scripts.js') ?>"></script>
</body>
</html>
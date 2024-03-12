<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="">
    <meta name="theme-color" content="#ec0000">
    <meta name="description" content="News Magazine HTML Template">
    <meta name="keywords"
        content="Article, Blog, Business, Fashion, Magazine, Music, News, News Magazine, Newspaper, Politics, Travel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sportsnews</title>

    <!--Favicon-->
    <link rel="icon" href="images/favicon.png" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('default/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('default/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('default/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('default/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('default/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('default/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('default/css/colorbox.css') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- Start Pre Loader -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="A" class="letters-loading">A</span>
                    <span data-text-preloader="L" class="letters-loading">L</span>
                    <span data-text-preloader="T" class="letters-loading">T</span>
                    <span data-text-preloader="R" class="letters-loading">R</span>
                    <span data-text-preloader="O" class="letters-loading">O</span>
                    <span data-text-preloader="Z" class="letters-loading">Z</span>
                    <span data-text-preloader="&nbsp;" class="letters-loading">&nbsp;</span>
                    <span data-text-preloader="N" class="letters-loading">N</span>
                    <span data-text-preloader="E" class="letters-loading">E</span>
                    <span data-text-preloader="W" class="letters-loading">W</span>
                    <span data-text-preloader="S" class="letters-loading">S</span>
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Pre Loader -->

    <div class="body-inner">
        <!-- Topbar Start -->
        <div id="top-bar" class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <ul class="unstyled top-nav">
                            <li><a href="login-signup.html">Login & Signup</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 top-social text-lg-right text-md-center">
                        <ul class="unstyled">
                            <li> <a title="Facebook" href="#"> <span class="social-icon"><i
                                            class="fa-brands fa-facebook-f"></i></span> </a> <a title="Twitter"
                                    href="#">
                                    <span class="social-icon"><i class="fa fa-twitter"></i></span> </a> <a
                                    title="Google+" href="#"> <span class="social-icon"><i
                                            class="fa fa-google-plus"></i></span> </a> <a title="Linkdin"
                                    href="#"> <span class="social-icon"><i class="fa fa-linkedin"></i></span>
                                </a>
                                <a title="Rss" href="#"> <span class="social-icon"><i
                                            class="fa fa-rss"></i></span> </a> <a title="Skype" href="#">
                                    <span class="social-icon"><i class="fa fa-skype"></i></span> </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Header start -->
        <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="logo"> <a href="index.html"> <img src="images/logo.png" alt=""> </a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 header-right">
                        <div class="ad-banner float-right"> <a href="#"><img
                                    src="images/banner-ads/ad-top-header.png" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Main Nav Start -->
        <div class="utf_main_nav_area clearfix utf_sticky">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg col">
                        <div class="utf_site_nav_inner float-left">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="true" aria-label="Toggle navigation"> <span
                                    class="navbar-toggler-icon"></span> </button>
                            <div id="navbarSupportedContent"
                                class="collapse navbar-collapse navbar-responsive-collapse">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item dropdown active"> <a href="#" class="nav-link"
                                            data-toggle="dropdown">Home</a>
                                    </li>
                                    <li class="nav-item dropdown utf_mega_dropdown"> <a href="category-style1.html"
                                            class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                            aria-haspopup="true" aria-expanded="false">Olympic Games <i
                                                class="fa fa-angle-down"></i></a>
                                        <div class="utf_dropdown_menu utf_mega_menu_content clearfix">
                                            <div class="menu-tab">
                                                <div class="row">
                                                    <ul class="nav nav-tabs flex-column col-2"
                                                        data-toggle="tab-hover">
                                                        <li class="nav-item"> <a class="animated fadeIn active"
                                                                href="#tab-one" data-toggle="tab"> <span
                                                                    class="tab-head"> <span class="tab-text-title"><i
                                                                            class="fa fa-angle-double-right"></i>
                                                                        All</span> </span> </a> </li>
                                                        <li class="nav-item"> <a class="animated fadeIn"
                                                                href="#tab-two" data-toggle="tab"> <span
                                                                    class="tab-head"> <span class="tab-text-title"><i
                                                                            class="fa fa-angle-double-right"></i>
                                                                        Olympic Games</span> </span> </a> </li>
                                                        <li class="nav-item"> <a class="animated fadeIn"
                                                                href="#tab-three" data-toggle="tab"> <span
                                                                    class="tab-head"> <span class="tab-text-title"><i
                                                                            class="fa fa-angle-double-right"></i>
                                                                        Olympci Winter Games</span> </span> </a> </li>
                                                        <li class="nav-item"> <a class="animated fadeIn"
                                                                href="#tab-three" data-toggle="tab"> <span
                                                                    class="tab-head"> <span class="tab-text-title"><i
                                                                            class="fa fa-angle-double-right"></i>
                                                                        Summer Youth Olympic Games</span> </span> </a> </li>
                                                        <li class="nav-item"> <a class="animated fadeIn"
                                                                href="#tab-three" data-toggle="tab"> <span
                                                                    class="tab-head"> <span class="tab-text-title"><i
                                                                            class="fa fa-angle-double-right"></i>
                                                                        Winter Youth Olympic Games</span> </span> </a> </li>
                                                    </ul>
                                                    <div class="tab-content col-10">
                                                        <div class="tab-pane fade show active" id="tab-one">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a
                                                                                href="#"><img class="img-fluid"
                                                                                    src="images/news/lifestyle/health1.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat"
                                                                            href="#">Health</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">That wearable on
                                                                                    your wrist could soon track
                                                                                    your…</a> </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a
                                                                                href="#"><img class="img-fluid"
                                                                                    src="images/news/lifestyle/health2.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat"
                                                                            href="#">Health</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Can't shed those
                                                                                    Gym? The problem might be in
                                                                                    your…</a> </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a
                                                                                href="#"><img class="img-fluid"
                                                                                    src="images/news/lifestyle/health3.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat"
                                                                            href="#">Health</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Deleting fears from
                                                                                    the brain means you might neve…</a>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a
                                                                                href="#"><img class="img-fluid"
                                                                                    src="images/news/lifestyle/health4.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat"
                                                                            href="#">Health</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Smart packs parking
                                                                                    sensor tech and beeps when col…</a>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="tab-pane animated fadeIn" id="tab-two">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a
                                                                                href="#"><img class="img-fluid"
                                                                                    src="images/news/lifestyle/travel1.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat"
                                                                            href="#">Travel</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">That wearable on
                                                                                    your wrist could soon track
                                                                                    your…</a> </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a
                                                                                href="#"><img class="img-fluid"
                                                                                    src="images/news/lifestyle/travel2.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat"
                                                                            href="#">Travel</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Can't shed those
                                                                                    Gym? The problem might be in
                                                                                    your…</a> </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a
                                                                                href="#"><img class="img-fluid"
                                                                                    src="images/news/lifestyle/travel3.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat"
                                                                            href="#">Travel</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Deleting fears from
                                                                                    the brain means you might neve…</a>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a
                                                                                href="#"><img class="img-fluid"
                                                                                    src="images/news/lifestyle/travel4.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat"
                                                                            href="#">Travel</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Smart packs parking
                                                                                    sensor tech and beeps when col…</a>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane animated fadeIn" id="tab-three">
                                                            <div class="row">
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a
                                                                                href="#"><img class="img-fluid"
                                                                                    src="images/news/lifestyle/food1.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat"
                                                                            href="#">Food</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">That wearable on
                                                                                    your wrist could soon track
                                                                                    your…</a> </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a
                                                                                href="#"><img class="img-fluid"
                                                                                    src="images/news/lifestyle/food2.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat"
                                                                            href="#">Food</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Can't shed those
                                                                                    Gym? The problem might be in
                                                                                    your…</a> </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a
                                                                                href="#"><img class="img-fluid"
                                                                                    src="images/news/lifestyle/food3.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat"
                                                                            href="#">Food</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Deleting fears from
                                                                                    the brain means you might neve…</a>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="utf_post_block_style clearfix">
                                                                        <div class="utf_post_thumb"> <a
                                                                                href="#"><img class="img-fluid"
                                                                                    src="images/news/lifestyle/food4.jpg"
                                                                                    alt="" /></a> </div>
                                                                        <a class="utf_post_cat"
                                                                            href="#">Food</a>
                                                                        <div class="utf_post_content">
                                                                            <h2 class="utf_post_title title-small"> <a
                                                                                    href="#">Smart packs parking
                                                                                    sensor tech and beeps when col…</a>
                                                                            </h2>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li> <a href="#">Athlates</a> </li>
                                    <li class="dropdown nav-item utf_mega_dropdown"> <a href="#"
                                            class="nav-link dropdown-toggler" data-toggle="dropdown">News <i
                                                class="fa fa-angle-down"></i></a>
                                        <div class="utf_dropdown_menu utf_mega_menu_content clearfix">
                                            <div class="utf_mega_menu_content_inner">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="utf_post_block_style clearfix">
                                                            <div class="utf_post_thumb"> <img class="img-fluid"
                                                                    src="images/news/video/video4.jpg"
                                                                    alt="" /> <a class="popup"
                                                                    href="https://www.youtube.com/embed/jssO8-5qmag">
                                                                    <div class="video-icon"> <i
                                                                            class="fa fa-play"></i> </div>
                                                                </a>
                                                            </div>
                                                            <div class="utf_post_content">
                                                                <h2 class="utf_post_title title-small"> <a
                                                                        href="#">Zhang social media pop also
                                                                        known when smart innocent...</a> </h2>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="utf_post_block_style clearfix">
                                                            <div class="utf_post_thumb"> <img class="img-fluid"
                                                                    src="images/news/video/video3.jpg"
                                                                    alt="" /> <a class="popup"
                                                                    href="https://www.youtube.com/embed/jssO8-5qmag">
                                                                    <div class="video-icon"> <i
                                                                            class="fa fa-play"></i> </div>
                                                                </a>
                                                            </div>
                                                            <div class="utf_post_content">
                                                                <h2 class="utf_post_title title-small"> <a
                                                                        href="#">Zhang social media pop also
                                                                        known when smart innocent...</a> </h2>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="utf_post_block_style clearfix">
                                                            <div class="utf_post_thumb"> <img class="img-fluid"
                                                                    src="images/news/video/video2.jpg"
                                                                    alt="" /> <a class="popup"
                                                                    href="https://www.youtube.com/embed/jssO8-5qmag">
                                                                    <div class="video-icon"> <i
                                                                            class="fa fa-play"></i> </div>
                                                                </a>
                                                            </div>
                                                            <div class="utf_post_content">
                                                                <h2 class="utf_post_title title-small"> <a
                                                                        href="#">TG G6 will have dual
                                                                        13-megapixel cameras...</a> </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="utf_post_block_style clearfix">
                                                            <div class="utf_post_thumb"> <img class="img-fluid"
                                                                    src="images/news/video/video1.jpg"
                                                                    alt="" /> <a class="popup"
                                                                    href="https://www.youtube.com/embed/jssO8-5qmag">
                                                                    <div class="video-icon"> <i
                                                                            class="fa fa-play"></i> </div>
                                                                </a>
                                                            </div>
                                                            <div class="utf_post_content">
                                                                <h2 class="utf_post_title title-small"> <a
                                                                        href="#">Zhang social media pop also
                                                                        known when smart innocent...</a> </h2>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li> <a href="about.html">Sports</a> </li>
                                    <li class="dropdown"> <a href="#" class="dropdown-toggle"
                                            data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                                        <ul class="utf_dropdown_menu" role="menu">
                                            <li class="utf_dropdown_submenu"> <a href="#."><i
                                                        class="fa fa-angle-double-right"></i> Category Layouts</a>
                                                <ul class="utf_dropdown_menu">
                                                    <li><a href="category-style1.html"><i
                                                                class="fa fa-angle-double-right"></i> Category Style
                                                            One</a></li>
                                                    <li><a href="category-style2.html"><i
                                                                class="fa fa-angle-double-right"></i> Category Style
                                                            Two</a></li>
                                                    <li><a href="category-style3.html"><i
                                                                class="fa fa-angle-double-right"></i> Category Style
                                                            Three</a></li>
                                                </ul>
                                            </li>
                                            <li class="utf_dropdown_submenu"> <a href="#."><i
                                                        class="fa fa-angle-double-right"></i> Post Detail Page</a>
                                                <ul class="utf_dropdown_menu">
                                                    <li><a href="single-post1.html"><i
                                                                class="fa fa-angle-double-right"></i> Single Post
                                                            One</a></li>
                                                    <li><a href="single-post2.html"><i
                                                                class="fa fa-angle-double-right"></i> Single Post
                                                            Two</a></li>
                                                    <li><a href="single-post3.html"><i
                                                                class="fa fa-angle-double-right"></i> Single Post
                                                            Three</a></li>
                                                    <li><a href="single-post4.html"><i
                                                                class="fa fa-angle-double-right"></i> Single Post
                                                            Four</a></li>
                                                    <li><a href="left-sidebar.html"><i
                                                                class="fa fa-angle-double-right"></i> Left Sidebar</a>
                                                    </li>
                                                    <li><a href="right-sidebar.html"><i
                                                                class="fa fa-angle-double-right"></i> Right Sidebar</a>
                                                    </li>
                                                    <li><a href="no-sidebar.html"><i
                                                                class="fa fa-angle-double-right"></i> No Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="utf_dropdown_submenu"> <a href="#."><i
                                                        class="fa fa-angle-double-right"></i> Pages</a>
                                                <ul class="utf_dropdown_menu">
                                                    <li><a href="contact.html"><i
                                                                class="fa fa-angle-double-right"></i> Contact Us</a>
                                                    </li>
                                                    <li><a href="404.html"><i class="fa fa-angle-double-right"></i>
                                                            404</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <div class="utf_nav_search"> <span id="search"><i class="fa fa-search"></i></span> </div>
                    <div class="utf_search_block" style="display: none;">
                        <input type="text" class="form-control" placeholder="Enter your keywords...">
                        <span class="utf_search_close">&times;</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Nav End -->

        <!-- Featured Post Area Start -->
        <section class="utf_featured_post_area pt-4 no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 pad-r">
                        <div id="utf_featured_slider" class="owl-carousel owl-theme utf_featured_slider">
                            <div class="item" style="background-image:url(images/news/lifestyle/health5.jpg)">
                                <div class="utf_featured_post">
                                    <div class="utf_post_content"> <a class="utf_post_cat" href="#">Health</a>
                                        <h2 class="utf_post_title title-extra-large"> <a href="#">Zhang social
                                                media pop also known when smart innocent...</a> </h2>
                                        <span class="utf_post_author"><i class="fa fa-user"></i> <a
                                                href="#">John Wick</a></span>
                                        <span class="utf_post_date"><i class="fa fa-clock-o"></i> 20 Jan, 2022</span>
                                    </div>
                                </div>
                            </div>

                            <div class="item" style="background-image:url(images/news/tech/gadget2.jpg)">
                                <div class="utf_featured_post">
                                    <div class="utf_post_content"> <a class="utf_post_cat" href="#">Gadget</a>
                                        <h2 class="utf_post_title title-extra-large"> <a href="#">Samsung Gear
                                                S3 review: A whimper, when smartwatches need a bang</a> </h2>
                                        <span class="utf_post_author"><i class="fa fa-user"></i> <a
                                                href="#">John Wick</a></span>
                                        <span class="utf_post_date"><i class="fa fa-clock-o"></i> 20 Jan, 2022</span>
                                    </div>
                                </div>
                            </div>

                            <div class="item" style="background-image:url(images/news/lifestyle/travel5.jpg)">
                                <div class="utf_featured_post">
                                    <div class="utf_post_content"> <a class="utf_post_cat" href="#">Travel</a>
                                        <h2 class="utf_post_title title-extra-large"> <a href="#">Zhang social
                                                media pop also known when smart innocent...</a> </h2>
                                        <span class="utf_post_author"><i class="fa fa-user"></i> <a
                                                href="#">John Wick</a></span>
                                        <span class="utf_post_date"><i class="fa fa-clock-o"></i> 20 Jan, 2022</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12 pad-l">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="utf_post_overaly_style contentTop hot-post-top clearfix">
                                    <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                                src="images/news/tech/gadget4.jpg" alt="" /></a> </div>
                                    <div class="utf_post_content"> <a class="utf_post_cat" href="#">Gadget</a>
                                        <h2 class="utf_post_title title-large"> <a href="#">Why The iPhone X
                                                Will Force Apple To Choose Between Good Or Evil</a> </h2>
                                        <span class="utf_post_author"><i class="fa fa-user"></i> <a
                                                href="#">John Wick</a></span>
                                        <span class="utf_post_date"><i class="fa fa-clock-o"></i> 20 Jan, 2022</span>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 pad-r-small">
                                <div class="utf_post_overaly_style contentTop utf_hot_post_bottom clearfix">
                                    <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                                src="images/news/lifestyle/travel2.jpg" alt="" /></a> </div>
                                    <div class="utf_post_content"> <a class="utf_post_cat" href="#">Travel</a>
                                        <h2 class="utf_post_title title-medium"> <a href="#">Early tourists
                                                choices to the sea of Maldiv…</a> </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                    class="fa fa-user"></i> <a href="#">John Wick</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 pad-l-small">
                                <div class="utf_post_overaly_style contentTop utf_hot_post_bottom clearfix">
                                    <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                                src="images/news/lifestyle/health1.jpg" alt="" /></a> </div>
                                    <div class="utf_post_content"> <a class="utf_post_cat" href="#">Health</a>
                                        <h2 class="utf_post_title title-medium"> <a href="#">That wearable on
                                                your wrist could soon...</a> </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                    class="fa fa-user"></i> <a href="#">John Wick</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Featured Post Area End -->

        <!-- Latest News Area Start -->
        <section class="utf_latest_new_area pb-bottom-20">
            <div class="container">
                <div class="utf_latest_news block color-red">
                    <h3 class="utf_block_title"><span>Latest News</span></h3>
                    <div id="utf_latest_news_slide" class="owl-carousel owl-theme utf_latest_news_slide">
                        <div class="item">
                            <ul class="utf_list_post">
                                <li class="clearfix">
                                    <div class="utf_post_block_style clearfix">
                                        <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                                    src="images/news/lifestyle/health5.jpg" alt="" /></a>
                                        </div>
                                        <a class="utf_post_cat" href="#">Health</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-medium"> <a href="#">Zhang social
                                                    media pop also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John Wick</a></span>
                                                <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                    2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="utf_post_block_style clearfix">
                                        <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                                    src="images/news/lifestyle/travel4.jpg" alt="" /></a>
                                        </div>
                                        <a class="utf_post_cat" href="#">Travel</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-medium"> <a href="#">Zhang social
                                                    media pop also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John Wick</a></span>
                                                <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                    2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="item">
                            <ul class="utf_list_post">
                                <li class="clearfix">
                                    <div class="utf_post_block_style clearfix">
                                        <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                                    src="images/news/lifestyle/travel5.jpg" alt="" /></a>
                                        </div>
                                        <a class="utf_post_cat" href="#">Travel</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-medium"> <a href="#">Zhang social
                                                    media pop also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John Wick</a></span>
                                                <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                    2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="utf_post_block_style clearfix">
                                        <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                                    src="images/news/lifestyle/health4.jpg" alt="" /></a>
                                        </div>
                                        <a class="utf_post_cat" href="#">Health</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-medium"> <a href="#">Zhang social
                                                    media pop also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John Wick</a></span>
                                                <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                    2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="item">
                            <ul class="utf_list_post">
                                <li class="clearfix">
                                    <div class="utf_post_block_style clearfix">
                                        <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                                    src="images/news/tech/gadget2.jpg" alt="" /></a> </div>
                                        <a class="utf_post_cat" href="#">Gadget</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-medium"> <a href="#">Zhang social
                                                    media pop also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John Wick</a></span>
                                                <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                    2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="utf_post_block_style clearfix">
                                        <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                                    src="images/news/lifestyle/architecture3.jpg"
                                                    alt="" /></a> </div>
                                        <a class="utf_post_cat" href="#">Architecture</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-medium"> <a href="#">Zhang social
                                                    media pop also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John Wick</a></span>
                                                <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                    2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="item">
                            <ul class="utf_list_post">
                                <li class="clearfix">
                                    <div class="utf_post_block_style clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/lifestyle/food3.jpg" alt="" /> </a>
                                        </div>
                                        <a class="utf_post_cat" href="#">Food</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-medium"> <a href="#">Zhang social
                                                    media pop also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John Wick</a></span>
                                                <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                    2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="utf_post_block_style clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/tech/game1.jpg" alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">Health</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-medium"> <a href="#">Zhang social
                                                    media pop also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John Wick</a></span>
                                                <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                    2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="item">
                            <ul class="utf_list_post">
                                <li class="clearfix">
                                    <div class="utf_post_block_style clearfix">
                                        <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                                    src="images/news/lifestyle/travel5.jpg" alt="" /></a>
                                        </div>
                                        <a class="utf_post_cat" href="#">Travel</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-medium"> <a href="#">Zhang social
                                                    media pop also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John Wick</a></span>
                                                <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                    2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="utf_post_block_style clearfix">
                                        <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                                    src="images/news/lifestyle/health4.jpg" alt="" /></a>
                                        </div>
                                        <a class="utf_post_cat" href="#">Health</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-medium"> <a href="#">Zhang social
                                                    media pop also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John Wick</a></span>
                                                <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                    2022</span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Latest News Area End -->

        <!-- Ad Content Area Start -->
        <div class="utf_ad_content_area text-center utf_banner_area no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> <img class="img-fluid" src="images/banner-ads/ad-content-one.jpg"
                            alt="" /> </div>
                </div>
            </div>
        </div>
        <!-- Ad Content Area End -->

        <!-- 1rd Block Wrapper Start -->
        <section class="utf_block_wrapper p-bottom-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="utf_featured_tab color-blue">
                            <h3 class="utf_block_title"><span>Technology News</span></h3>
                            <ul class="nav nav-tabs">
                                <li class="nav-item"> <a class="nav-link animated fadeIn active" href="#tab_a"
                                        data-toggle="tab"> <span class="tab-head"> <span
                                                class="tab-text-title">Lifestyle</span> </span> </a> </li>
                                <li class="nav-item"> <a class="nav-link animated fadeIn" href="#tab_b"
                                        data-toggle="tab"> <span class="tab-head"> <span
                                                class="tab-text-title">Traveling</span> </span> </a> </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active animated fadeInRight" id="tab_a">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="utf_post_block_style clearfix">
                                                <div class="utf_post_thumb"> <a href="#"> <img
                                                            class="img-fluid" src="images/news/tech/gadget1.jpg"
                                                            alt="" /> </a> </div>
                                                <a class="utf_post_cat" href="#">Lifestyle</a>
                                                <div class="utf_post_content">
                                                    <h2 class="utf_post_title"> <a href="#">Zhang social media
                                                            pop also known when smart innocent...</a> </h2>
                                                    <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                                class="fa fa-user"></i> <a href="#">John
                                                                Wick</a></span> <span class="utf_post_date"><i
                                                                class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text since has five...</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="utf_list_post_block">
                                                <ul class="utf_list_post">
                                                    <li class="clearfix">
                                                        <div class="utf_post_block_style post-float clearfix">
                                                            <div class="utf_post_thumb"> <a href="#"> <img
                                                                        class="img-fluid"
                                                                        src="images/news/tech/gadget2.jpg"
                                                                        alt="" /> </a> </div>
                                                            <div class="utf_post_content">
                                                                <h2 class="utf_post_title title-small"> <a
                                                                        href="#">Zhang social media pop also
                                                                        known when smart innocent...</a> </h2>
                                                                <div class="utf_post_meta"> <span
                                                                        class="utf_post_author"><i
                                                                            class="fa fa-user"></i> <a
                                                                            href="#">John Wick</a></span> <span
                                                                        class="utf_post_date"><i
                                                                            class="fa fa-clock-o"></i> 25 Jan,
                                                                        2022</span> </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="clearfix">
                                                        <div class="utf_post_block_style post-float clearfix">
                                                            <div class="utf_post_thumb"> <a href="#"> <img
                                                                        class="img-fluid"
                                                                        src="images/news/tech/gadget3.jpg"
                                                                        alt="" /> </a> </div>
                                                            <div class="utf_post_content">
                                                                <h2 class="utf_post_title title-small"> <a
                                                                        href="#">Zhang social media pop also
                                                                        known when smart innocent...</a> </h2>
                                                                <div class="utf_post_meta"> <span
                                                                        class="utf_post_author"><i
                                                                            class="fa fa-user"></i> <a
                                                                            href="#">John Wick</a></span> <span
                                                                        class="utf_post_date"><i
                                                                            class="fa fa-clock-o"></i> 25 Jan,
                                                                        2022</span> </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="clearfix">
                                                        <div class="utf_post_block_style post-float clearfix">
                                                            <div class="utf_post_thumb"> <a href="#"> <img
                                                                        class="img-fluid"
                                                                        src="images/news/tech/gadget4.jpg"
                                                                        alt="" /> </a> </div>
                                                            <div class="utf_post_content">
                                                                <h2 class="utf_post_title title-small"> <a
                                                                        href="#">Zhang social media pop also
                                                                        known when smart innocent...</a> </h2>
                                                                <div class="utf_post_meta"> <span
                                                                        class="utf_post_author"><i
                                                                            class="fa fa-user"></i> <a
                                                                            href="#">John Wick</a></span> <span
                                                                        class="utf_post_date"><i
                                                                            class="fa fa-clock-o"></i> 25 Jan,
                                                                        2022</span> </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="clearfix">
                                                        <div class="utf_post_block_style post-float clearfix">
                                                            <div class="utf_post_thumb"> <a href="#"> <img
                                                                        class="img-fluid"
                                                                        src="images/news/tech/gadget5.jpg"
                                                                        alt="" /> </a> </div>
                                                            <div class="utf_post_content">
                                                                <h2 class="utf_post_title title-small"> <a
                                                                        href="#">Zhang social media pop also
                                                                        known when smart innocent...</a> </h2>
                                                                <div class="utf_post_meta"> <span
                                                                        class="utf_post_author"><i
                                                                            class="fa fa-user"></i> <a
                                                                            href="#">John Wick</a></span> <span
                                                                        class="utf_post_date"><i
                                                                            class="fa fa-clock-o"></i> 25 Jan,
                                                                        2022</span> </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane animated fadeInLeft" id="tab_b">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6">
                                            <div class="utf_post_block_style clearfix">
                                                <div class="utf_post_thumb"> <a href="#"> <img
                                                            class="img-fluid" src="images/news/tech/robot1.jpg"
                                                            alt="" /> </a> </div>
                                                <a class="utf_post_cat" href="#">Traveling</a>
                                                <div class="utf_post_content">
                                                    <h2 class="utf_post_title"> <a href="#">Ratcliffe to be
                                                            Director nation intelligence Trump ignored...</a> </h2>
                                                    <div class="utf_post_meta"> <span class="utf_post_author"><a
                                                                href="#">John Wick</a></span> <span
                                                            class="utf_post_date">25 Jan, 2022</span> </div>
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy
                                                        text since has five...</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 col-md-6">
                                            <div class="utf_list_post_block">
                                                <ul class="utf_list_post">
                                                    <li class="clearfix">
                                                        <div class="utf_post_block_style post-float clearfix">
                                                            <div class="utf_post_thumb"> <a href="#"> <img
                                                                        class="img-fluid"
                                                                        src="images/news/tech/robot2.jpg"
                                                                        alt="" /> </a> </div>
                                                            <div class="utf_post_content">
                                                                <h2 class="utf_post_title title-small"> <a
                                                                        href="#">Zhang social media pop also
                                                                        known when smart innocent...</a> </h2>
                                                                <div class="utf_post_meta"> <span
                                                                        class="utf_post_author"><i
                                                                            class="fa fa-user"></i> <a
                                                                            href="#">John Wick</a></span> <span
                                                                        class="utf_post_date"><i
                                                                            class="fa fa-clock-o"></i> 25 Jan,
                                                                        2022</span> </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="clearfix">
                                                        <div class="utf_post_block_style post-float clearfix">
                                                            <div class="utf_post_thumb"> <a href="#"> <img
                                                                        class="img-fluid"
                                                                        src="images/news/tech/robot3.jpg"
                                                                        alt="" /> </a> </div>
                                                            <div class="utf_post_content">
                                                                <h2 class="utf_post_title title-small"> <a
                                                                        href="#">Zhang social media pop also
                                                                        known when smart innocent...</a> </h2>
                                                                <div class="utf_post_meta"> <span
                                                                        class="utf_post_author"><i
                                                                            class="fa fa-user"></i> <a
                                                                            href="#">John Wick</a></span> <span
                                                                        class="utf_post_date"><i
                                                                            class="fa fa-clock-o"></i> 25 Jan,
                                                                        2022</span> </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="clearfix">
                                                        <div class="utf_post_block_style post-float clearfix">
                                                            <div class="utf_post_thumb"> <a href="#"> <img
                                                                        class="img-fluid"
                                                                        src="images/news/tech/robot4.jpg"
                                                                        alt="" /> </a> </div>
                                                            <div class="utf_post_content">
                                                                <h2 class="utf_post_title title-small"> <a
                                                                        href="#">Zhang social media pop also
                                                                        known when smart innocent...</a> </h2>
                                                                <div class="utf_post_meta"> <span
                                                                        class="utf_post_author"><i
                                                                            class="fa fa-user"></i> <a
                                                                            href="#">John Wick</a></span> <span
                                                                        class="utf_post_date"><i
                                                                            class="fa fa-clock-o"></i> 25 Jan,
                                                                        2022</span> </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li class="clearfix">
                                                        <div class="utf_post_block_style post-float clearfix">
                                                            <div class="utf_post_thumb"> <a href="#"> <img
                                                                        class="img-fluid"
                                                                        src="images/news/tech/robot5.jpg"
                                                                        alt="" /> </a> </div>
                                                            <div class="utf_post_content">
                                                                <h2 class="utf_post_title title-small"> <a
                                                                        href="#">Zhang social media pop also
                                                                        known when smart innocent...</a> </h2>
                                                                <div class="utf_post_meta"> <span
                                                                        class="utf_post_author"><i
                                                                            class="fa fa-user"></i> <a
                                                                            href="#">John Wick</a></span> <span
                                                                        class="utf_post_date"><i
                                                                            class="fa fa-clock-o"></i> 25 Jan,
                                                                        2022</span> </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="gap-30"></div>
                        <div class="block color-orange">
                            <h3 class="utf_block_title"><span>Lifestyle News</span></h3>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="utf_post_overaly_style clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/lifestyle/travel1.jpg" alt="" /> </a>
                                        </div>
                                        <div class="utf_post_content"> <a class="utf_post_cat"
                                                href="#">Travel</a>
                                            <h2 class="utf_post_title"> <a href="#">Zhang social media pop also
                                                    known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John Wick</a></span>
                                                <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                    2022</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="utf_list_post_block">
                                        <ul class="utf_list_post">
                                            <li class="clearfix">
                                                <div class="utf_post_block_style post-float clearfix">
                                                    <div class="utf_post_thumb"> <a href="#"> <img
                                                                class="img-fluid"
                                                                src="images/news/lifestyle/food1.jpg"
                                                                alt="" /> </a> <a class="utf_post_cat"
                                                            href="#">Food</a> </div>
                                                    <div class="utf_post_content">
                                                        <h2 class="utf_post_title title-small"> <a
                                                                href="#">Zhang social media pop also known when
                                                                smart innocent... </a> </h2>
                                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                                    class="fa fa-user"></i> <a href="#">John
                                                                    Wick</a></span> <span class="utf_post_date"><i
                                                                    class="fa fa-clock-o"></i> 25 Jan, 2022</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="clearfix">
                                                <div class="utf_post_block_style post-float clearfix">
                                                    <div class="utf_post_thumb"> <a href="#"> <img
                                                                class="img-fluid"
                                                                src="images/news/lifestyle/health1.jpg"
                                                                alt="" /> </a> <a class="utf_post_cat"
                                                            href="#">Health</a> </div>
                                                    <div class="utf_post_content">
                                                        <h2 class="utf_post_title title-small"> <a
                                                                href="#">Zhang social media pop also known when
                                                                smart innocent...</a> </h2>
                                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                                    class="fa fa-user"></i> <a href="#">John
                                                                    Wick</a></span> <span class="utf_post_date"><i
                                                                    class="fa fa-clock-o"></i> 25 Jan, 2022</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="clearfix">
                                                <div class="utf_post_block_style post-float clearfix">
                                                    <div class="utf_post_thumb"> <a href="#"> <img
                                                                class="img-fluid"
                                                                src="images/news/lifestyle/travel2.jpg"
                                                                alt="" /> </a> <a class="utf_post_cat"
                                                            href="#">Travel</a> </div>
                                                    <div class="utf_post_content">
                                                        <h2 class="utf_post_title title-small"> <a
                                                                href="#">Zhang social media pop also known when
                                                                smart innocent...</a> </h2>
                                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                                    class="fa fa-user"></i> <a href="#">John
                                                                    Wick</a></span> <span class="utf_post_date"><i
                                                                    class="fa fa-clock-o"></i> 25 Jan, 2022</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="clearfix">
                                                <div class="utf_post_block_style post-float clearfix">
                                                    <div class="utf_post_thumb"> <a href="#"> <img
                                                                class="img-fluid"
                                                                src="images/news/lifestyle/architecture2.jpg"
                                                                alt="" /> </a> <a class="utf_post_cat"
                                                            href="#">Architecture</a> </div>
                                                    <div class="utf_post_content">
                                                        <h2 class="utf_post_title title-small"> <a
                                                                href="#">Zhang social media pop also known when
                                                                smart innocent...</a> </h2>
                                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                                    class="fa fa-user"></i> <a href="#">John
                                                                    Wick</a></span> <span class="utf_post_date"><i
                                                                    class="fa fa-clock-o"></i> 25 Jan, 2022</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="utf_post_overaly_style last clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/lifestyle/architecture3.jpg" alt="" />
                                            </a> </div>
                                        <div class="utf_post_content"> <a class="utf_post_cat"
                                                href="#">Architecture</a>
                                            <h2 class="utf_post_title"> <a href="#">Zhang social media pop
                                                    also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                        </div>
                                    </div>

                                    <div class="utf_list_post_block">
                                        <ul class="utf_list_post">
                                            <li class="clearfix">
                                                <div class="utf_post_block_style post-float clearfix">
                                                    <div class="utf_post_thumb"> <a href="#"> <img
                                                                class="img-fluid"
                                                                src="images/news/lifestyle/health2.jpg"
                                                                alt="" /> </a> <a class="utf_post_cat"
                                                            href="#">Health</a> </div>
                                                    <div class="utf_post_content">
                                                        <h2 class="utf_post_title title-small"> <a
                                                                href="#">Zhang social media pop also known when
                                                                smart innocent...</a> </h2>
                                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                                    class="fa fa-user"></i> <a href="#">John
                                                                    Wick</a></span> <span class="utf_post_date"><i
                                                                    class="fa fa-clock-o"></i> 25 Jan, 2022</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="clearfix">
                                                <div class="utf_post_block_style post-float clearfix">
                                                    <div class="utf_post_thumb"> <a href="#"> <img
                                                                class="img-fluid"
                                                                src="images/news/lifestyle/food2.jpg"
                                                                alt="" /> </a> <a class="utf_post_cat"
                                                            href="#">Food</a> </div>
                                                    <div class="utf_post_content">
                                                        <h2 class="utf_post_title title-small"> <a
                                                                href="#">Zhang social media pop also known when
                                                                smart innocent...</a> </h2>
                                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                                    class="fa fa-user"></i> <a href="#">John
                                                                    Wick</a></span> <span class="utf_post_date"><i
                                                                    class="fa fa-clock-o"></i> 25 Jan, 2022</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="clearfix">
                                                <div class="utf_post_block_style post-float clearfix">
                                                    <div class="utf_post_thumb"> <a href="#"> <img
                                                                class="img-fluid"
                                                                src="images/news/lifestyle/architecture1.jpg"
                                                                alt="" /> </a> <a class="utf_post_cat"
                                                            href="#">Architecture</a> </div>
                                                    <div class="utf_post_content">
                                                        <h2 class="utf_post_title title-small"> <a
                                                                href="#">Zhang social media pop also known when
                                                                smart innocent...</a> </h2>
                                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                                    class="fa fa-user"></i> <a href="#">John
                                                                    Wick</a></span> <span class="utf_post_date"><i
                                                                    class="fa fa-clock-o"></i> 25 Jan, 2022</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="clearfix">
                                                <div class="utf_post_block_style post-float clearfix">
                                                    <div class="utf_post_thumb"> <a href="#"> <img
                                                                class="img-fluid"
                                                                src="images/news/lifestyle/travel5.jpg"
                                                                alt="" /> </a> <a class="utf_post_cat"
                                                            href="#">Travel</a> </div>
                                                    <div class="utf_post_content">
                                                        <h2 class="utf_post_title title-small"> <a
                                                                href="#">Zhang social media pop also known when
                                                                smart innocent...</a> </h2>
                                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                                    class="fa fa-user"></i> <a href="#">John
                                                                    Wick</a></span> <span class="utf_post_date"><i
                                                                    class="fa fa-clock-o"></i> 25 Jan, 2022</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-12">
                        <div class="sidebar utf_sidebar_right">
                            <div class="widget">
                                <h3 class="utf_block_title"><span>Follow Us</span></h3>
                                <ul class="social-icon">
                                    <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a>
                                    </li>
                                    <li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a>
                                    </li>
                                    <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                                </ul>
                            </div>

                            <div class="widget color-default">
                                <h3 class="utf_block_title"><span>Popular News</span></h3>
                                <div class="utf_post_overaly_style clearfix">
                                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                src="images/news/lifestyle/health4.jpg" alt="" /> </a>
                                    </div>
                                    <div class="utf_post_content"> <a class="utf_post_cat"
                                            href="#">Health</a>
                                        <h2 class="utf_post_title"> <a href="#">Smart packs parking sensor
                                                tech and beeps when col…</a> </h2>
                                        <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                    class="fa fa-user"></i> <a href="#">John Wick</a></span>
                                            <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                2022</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="utf_list_post_block">
                                    <ul class="utf_list_post">
                                        <li class="clearfix">
                                            <div class="utf_post_block_style post-float clearfix">
                                                <div class="utf_post_thumb"> <a href="#"> <img
                                                            class="img-fluid" src="images/news/tech/gadget3.jpg"
                                                            alt="" /> </a> <a class="utf_post_cat"
                                                        href="#">Lifestyle</a> </div>
                                                <div class="utf_post_content">
                                                    <h2 class="utf_post_title title-small"> <a href="#">Zhang
                                                            social media pop also known when smart innocent...</a> </h2>
                                                    <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                                class="fa fa-user"></i> <a href="#">John
                                                                Wick</a></span> <span class="utf_post_date"><i
                                                                class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="clearfix">
                                            <div class="utf_post_block_style post-float clearfix">
                                                <div class="utf_post_thumb"> <a href="#"> <img
                                                            class="img-fluid"
                                                            src="images/news/lifestyle/travel5.jpg"
                                                            alt="" /> </a> <a class="utf_post_cat"
                                                        href="#">Travel</a> </div>
                                                <div class="utf_post_content">
                                                    <h2 class="utf_post_title title-small"> <a href="#">Zhang
                                                            social media pop also known when smart innocent...</a> </h2>
                                                    <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                                class="fa fa-user"></i> <a href="#">John
                                                                Wick</a></span> <span class="utf_post_date"><i
                                                                class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="clearfix">
                                            <div class="utf_post_block_style post-float clearfix">
                                                <div class="utf_post_thumb"> <a href="#"> <img
                                                            class="img-fluid" src="images/news/tech/robot5.jpg"
                                                            alt="" /> </a> <a class="utf_post_cat"
                                                        href="#">Traveling</a> </div>
                                                <div class="utf_post_content">
                                                    <h2 class="utf_post_title title-small"> <a href="#">Zhang
                                                            social media pop also known when smart innocent...</a> </h2>
                                                    <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                                class="fa fa-user"></i> <a href="#">John
                                                                Wick</a></span> <span class="utf_post_date"><i
                                                                class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="clearfix">
                                            <div class="utf_post_block_style post-float clearfix">
                                                <div class="utf_post_thumb"> <a href="#"> <img
                                                            class="img-fluid" src="images/news/lifestyle/food1.jpg"
                                                            alt="" /> </a> <a class="utf_post_cat"
                                                        href="#">Food</a> </div>
                                                <div class="utf_post_content">
                                                    <h2 class="utf_post_title title-small"> <a href="#">Zhang
                                                            social media pop also known when smart innocent...</a> </h2>
                                                    <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                                class="fa fa-user"></i> <a href="#">John
                                                                Wick</a></span> <span class="utf_post_date"><i
                                                                class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="widget color-default m-bottom-0">
                                <h3 class="utf_block_title"><span>Trending News</span></h3>
                                <div id="utf_post_slide" class="owl-carousel owl-theme utf_post_slide">
                                    <div class="item">
                                        <div class="utf_post_overaly_style text-center clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                        src="images/news/tech/gadget1.jpg" alt="" /> </a>
                                            </div>
                                            <div class="utf_post_content"> <a class="utf_post_cat"
                                                    href="#">Lifestyle</a>
                                                <h2 class="utf_post_title"> <a href="#">The best MacBook Pro
                                                        alternatives in 2022 for Appl…</a> </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                            class="fa fa-user"></i> <a href="#">John
                                                            Wick</a></span> <span class="utf_post_date"><i
                                                            class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="utf_post_overaly_style text-center clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                        src="images/news/lifestyle/health5.jpg" alt="" />
                                                </a> </div>
                                            <div class="utf_post_content"> <a class="utf_post_cat"
                                                    href="#">Health</a>
                                                <h2 class="utf_post_title"> <a href="#">Netcix cuts out the
                                                        chill with an integrated perso…</a> </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                            class="fa fa-user"></i> <a href="#">John
                                                            Wick</a></span> <span class="utf_post_date"><i
                                                            class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 1rd Block Wrapper End -->

        <!-- 2rd Block Wrapper Start -->
        <section class="utf_block_wrapper p-bottom-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="block color-dark-blue">
                            <h3 class="utf_block_title"><span>Travel News</span></h3>
                            <div class="utf_post_overaly_style clearfix">
                                <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                            src="images/news/lifestyle/travel1.jpg" alt="" /> </a> </div>
                                <div class="utf_post_content">
                                    <h2 class="utf_post_title"> <a href="#">Zhang social media pop also known
                                            when smart innocent...</a> </h2>
                                    <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                class="fa fa-user"></i> <a href="#">John Wick</a></span> <span
                                            class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2022</span>
                                    </div>
                                </div>
                            </div>

                            <div class="utf_list_post_block">
                                <ul class="utf_list_post">
                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                        src="images/news/lifestyle/travel2.jpg" alt="" />
                                                </a> </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small"> <a href="#">Zhang
                                                        social media pop also known when smart innocent...</a> </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                            class="fa fa-user"></i> <a href="#">John
                                                            Wick</a></span> <span class="utf_post_date"><i
                                                            class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                        src="images/news/lifestyle/travel3.jpg" alt="" />
                                                </a> </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small"> <a href="#">Zhang
                                                        social media pop also known when smart innocent...</a> </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                            class="fa fa-user"></i> <a href="#">John
                                                            Wick</a></span> <span class="utf_post_date"><i
                                                            class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                        src="images/news/lifestyle/travel4.jpg" alt="" />
                                                </a> </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small"> <a href="#">Zhang
                                                        social media pop also known when smart innocent...</a> </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                            class="fa fa-user"></i> <a href="#">John
                                                            Wick</a></span> <span class="utf_post_date"><i
                                                            class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="block color-aqua">
                            <h3 class="utf_block_title"><span>Lifestyle News</span></h3>
                            <div class="utf_post_overaly_style clearfix">
                                <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                            src="images/news/tech/gadget1.jpg" alt="" /> </a> </div>
                                <div class="utf_post_content">
                                    <h2 class="utf_post_title"> <a href="#">Zhang social media pop also known
                                            when smart innocent...</a> </h2>
                                    <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                class="fa fa-user"></i> <a href="#">John Wick</a></span> <span
                                            class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2022</span>
                                    </div>
                                </div>
                            </div>

                            <div class="utf_list_post_block">
                                <ul class="utf_list_post">
                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                        src="images/news/tech/gadget2.jpg" alt="" /> </a>
                                            </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small"> <a href="#">Zhang
                                                        social media pop also known when smart innocent...</a> </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                            class="fa fa-user"></i> <a href="#">John
                                                            Wick</a></span> <span class="utf_post_date"><i
                                                            class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                        src="images/news/tech/gadget3.jpg" alt="" /> </a>
                                            </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small"> <a href="#">Zhang
                                                        social media pop also known when smart innocent...</a> </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                            class="fa fa-user"></i> <a href="#">John
                                                            Wick</a></span> <span class="utf_post_date"><i
                                                            class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                        src="images/news/tech/gadget4.jpg" alt="" /> </a>
                                            </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small"> <a href="#">Zhang
                                                        social media pop also known when smart innocent...</a> </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                            class="fa fa-user"></i> <a href="#">John
                                                            Wick</a></span> <span class="utf_post_date"><i
                                                            class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="block color-violet">
                            <h3 class="utf_block_title"><span>Health News</span></h3>
                            <div class="utf_post_overaly_style clearfix">
                                <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                            src="images/news/lifestyle/health1.jpg" alt="" /> </a> </div>
                                <div class="utf_post_content">
                                    <h2 class="utf_post_title"> <a href="#">That wearable on your wrist could
                                            soon track your health as …</a> </h2>
                                    <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                class="fa fa-user"></i> <a href="#">John Wick</a></span> <span
                                            class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan, 2022</span>
                                    </div>
                                </div>
                            </div>

                            <div class="utf_list_post_block">
                                <ul class="utf_list_post">
                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                        src="images/news/lifestyle/health2.jpg" alt="" />
                                                </a> </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small"> <a href="#">Zhang
                                                        social media pop also known when smart innocent...</a> </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                            class="fa fa-user"></i> <a href="#">John
                                                            Wick</a></span> <span class="utf_post_date"><i
                                                            class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                        src="images/news/lifestyle/health3.jpg" alt="" />
                                                </a> </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small"> <a href="#">Zhang
                                                        social media pop also known when smart innocent...</a> </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                            class="fa fa-user"></i> <a href="#">John
                                                            Wick</a></span> <span class="utf_post_date"><i
                                                            class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                        src="images/news/lifestyle/health4.jpg" alt="" />
                                                </a> </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small"> <a href="#">Zhang
                                                        social media pop also known when smart innocent...</a> </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                            class="fa fa-user"></i> <a href="#">John
                                                            Wick</a></span> <span class="utf_post_date"><i
                                                            class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 2rd Block Wrapper End -->

        <!-- 3rd Block Wrapper Start -->
        <section class="utf_block_wrapper p-bottom-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-12">
                        <div class="utf_more_news block color-default">
                            <h3 class="utf_block_title"><span>View More News</span></h3>
                            <div id="utf_more_news_slide" class="owl-carousel owl-theme utf_more_news_slide">
                                <div class="item">
                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/video/video1.jpg" alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">Video</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Ratcliffe to be Director
                                                    of intelligence Trump ignored smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>

                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/tech/game5.jpg" alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">Health</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Ratcliffe to be Director
                                                    of intelligence Trump ignored smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>

                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/tech/game4.jpg" alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">Health</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Zhang social media pop
                                                    also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>

                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/tech/robot5.jpg" alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">Traveling</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Zhang social media pop
                                                    also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>

                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/tech/game5.jpg" alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">Health</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Ratcliffe to be Director
                                                    of intelligence Trump ignored smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/video/video2.jpg" alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">Video</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Ratcliffe to be Director
                                                    of intelligence Trump ignored smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>

                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/video/video3.jpg" alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">Video</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Breeze through 17
                                                    locations in Europe in this breathtaking v…</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>

                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/lifestyle/architecture1.jpg" alt="" />
                                            </a> </div>
                                        <a class="utf_post_cat" href="#">Architecture</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Science meets architecture
                                                    in robotically woven, solar...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>

                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/tech/game1.jpg" alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">Traveling</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Historical heroes and
                                                    robot dinosaurs: New games on our…</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/video/video1.jpg" alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">Video</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Ratcliffe to be Director
                                                    of intelligence Trump ignored smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>

                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/tech/game5.jpg" alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">Health</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Ratcliffe to be Director
                                                    of intelligence Trump ignored smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>

                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/tech/game4.jpg" alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">Health</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Zhang social media pop
                                                    also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>

                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/tech/robot5.jpg" alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">Traveling</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Zhang social media pop
                                                    also known when smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>

                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/tech/game5.jpg" alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">Health</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Ratcliffe to be Director
                                                    of intelligence Trump ignored smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/video/video2.jpg" alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">Video</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Ratcliffe to be Director
                                                    of intelligence Trump ignored smart innocent...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>

                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/video/video3.jpg" alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">Video</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Breeze through 17
                                                    locations in Europe in this breathtaking v…</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>

                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/lifestyle/architecture1.jpg" alt="" />
                                            </a> </div>
                                        <a class="utf_post_cat" href="#">Architecture</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Science meets architecture
                                                    in robotically woven, solar...</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>

                                    <div class="utf_post_block_style utf_post_float_half clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="images/news/tech/game1.jpg" alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">Traveling</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="#">Historical heroes and
                                                    robot dinosaurs: New games on our…</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                        class="fa fa-user"></i> <a href="#">John
                                                        Wick</a></span> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry. Lorem Ipsum has been the industry's standard dummy text since
                                                has five...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12">
                        <div class="sidebar utf_sidebar_right">
                            <div class="widget color-default">
                                <h3 class="utf_block_title"><span>Latest Reviews</span></h3>
                                <div class="utf_list_post_block">
                                    <ul class="utf_list_post review-post-list">
                                        <li class="clearfix">
                                            <div class="utf_post_block_style post-float clearfix">
                                                <div class="utf_post_thumb"> <a href="#"> <img
                                                            class="img-fluid" src="images/news/review/review1.jpg"
                                                            alt="" /> </a> </div>
                                                <div class="utf_post_content">
                                                    <h2 class="utf_post_title"> <a href="#">Zhang social media
                                                            pop known innocent...</a> </h2>
                                                    <div class="utf_post_meta">
                                                        <div class="review-stars"> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i> <i
                                                                class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="clearfix">
                                            <div class="utf_post_block_style post-float clearfix">
                                                <div class="utf_post_thumb"> <a href="#"> <img
                                                            class="img-fluid" src="images/news/review/review2.jpg"
                                                            alt="" /> </a> </div>
                                                <div class="utf_post_content">
                                                    <h2 class="utf_post_title"> <a href="#">Zhang social media
                                                            pop known innocent...</a> </h2>
                                                    <div class="utf_post_meta">
                                                        <div class="review-stars"> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i> <i
                                                                class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="clearfix">
                                            <div class="utf_post_block_style post-float clearfix">
                                                <div class="utf_post_thumb"> <a href="#"> <img
                                                            class="img-fluid" src="images/news/review/review3.jpg"
                                                            alt="" /> </a> </div>
                                                <div class="utf_post_content">
                                                    <h2 class="utf_post_title"> <a href="#">Zhang social media
                                                            pop known innocent...</a> </h2>
                                                    <div class="utf_post_meta">
                                                        <div class="review-stars"> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-o"></i> <i
                                                                class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="clearfix">
                                            <div class="utf_post_block_style post-float clearfix">
                                                <div class="utf_post_thumb"> <a href="#"> <img
                                                            class="img-fluid" src="images/news/review/review4.jpg"
                                                            alt="" /> </a> </div>
                                                <div class="utf_post_content">
                                                    <h2 class="utf_post_title"> <a href="#">Zhang social media
                                                            pop known innocent...</a> </h2>
                                                    <div class="utf_post_meta">
                                                        <div class="review-stars"> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i
                                                                class="fa fa-star-half-o"></i> <i
                                                                class="fa fa-star-o"></i> <i
                                                                class="fa fa-star-o"></i> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="clearfix">
                                            <div class="utf_post_block_style post-float clearfix">
                                                <div class="utf_post_thumb"> <a href="#"> <img
                                                            class="img-fluid" src="images/news/review/review2.jpg"
                                                            alt="" /> </a> </div>
                                                <div class="utf_post_content">
                                                    <h2 class="utf_post_title"> <a href="#">Zhang social media
                                                            pop known innocent...</a> </h2>
                                                    <div class="utf_post_meta">
                                                        <div class="review-stars"> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i> <i
                                                                class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="clearfix">
                                            <div class="utf_post_block_style post-float clearfix">
                                                <div class="utf_post_thumb"> <a href="#"> <img
                                                            class="img-fluid" src="images/news/review/review3.jpg"
                                                            alt="" /> </a> </div>
                                                <div class="utf_post_content">
                                                    <h2 class="utf_post_title"> <a href="#">Zhang social media
                                                            pop known innocent...</a> </h2>
                                                    <div class="utf_post_meta">
                                                        <div class="review-stars"> <i class="fa fa-star"></i> <i
                                                                class="fa fa-star"></i> <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i> <i
                                                                class="fa fa-star-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="widget m-bottom-0">
                                <h3 class="utf_block_title"><span>Newsletter</span></h3>
                                <div class="utf_newsletter_block">
                                    <div class="utf_newsletter_introtext">
                                        <h4>Subscribe Newsletter!</h4>
                                        <p>Lorem ipsum dolor sit consectetur adipiscing elit Maecenas in pulvinar neque
                                            Nulla finibus lobortis pulvinar.</p>
                                    </div>
                                    <div class="utf_newsletter_form">
                                        <form action="#" method="post">
                                            <div class="form-group">
                                                <input type="email" name="email"
                                                    id="utf_newsletter_form-email"
                                                    class="form-control form-control-lg"
                                                    placeholder="E-Mail Address" autocomplete="off">
                                                <button class="btn btn-primary">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 3rd Block Wrapper End -->

        <!-- Ad Content Area Start -->
        <div class="utf_ad_content_area text-center utf_banner_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"> <img class="img-fluid" src="images/banner-ads/ad-content-two.png"
                            alt="" /> </div>
                </div>
            </div>
        </div>
        <!-- Ad Content Area End -->

        <!-- Footer Start -->
        <footer id="footer" class="footer">
            <div class="utf_footer_main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-sm-12 col-xs-12 footer-widget contact-widget">
                            <h3 class="widget-title">About Us</h3>
                            <ul>
                                <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text since has five...</li>
                                <li><i class="fa fa-home"></i> 15 Cliff St, New York NY 10038, USA</li>
                                <li><i class="fa fa-phone"></i> <a href="#">+91 234 567 8765</a></li>
                                <li><i class="fa fa-envelope-o"></i> <a href="#">mail@example.com</a></li>
                            </ul>
                            <ul class="unstyled utf_footer_social">
                                <li><a title="Facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a title="Twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a title="Google+" href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a title="Linkdin" href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a title="Skype" href="#"><i class="fa fa-skype"></i></a></li>
                                <li><a title="Skype" href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-sm-12 col-xs-12 footer-widget widget-categories">
                            <h3 class="widget-title">Popular Categories</h3>
                            <ul>
                                <li><i class="fa fa-angle-double-right"></i><a href="#"><span
                                            class="catTitle">Make-Up</span><span class="catCounter"> (05)</span></a>
                                </li>
                                <li><i class="fa fa-angle-double-right"></i><a href="#"><span
                                            class="catTitle">Health</span><span class="catCounter"> (06)</span></a>
                                </li>
                                <li><i class="fa fa-angle-double-right"></i><a href="#"><span
                                            class="catTitle">Audio</span><span class="catCounter"> (15)</span></a>
                                </li>
                                <li><i class="fa fa-angle-double-right"></i><a href="#"><span
                                            class="catTitle">Travel</span><span class="catCounter"> (25)</span></a>
                                </li>
                                <li><i class="fa fa-angle-double-right"></i><a href="#"><span
                                            class="catTitle">Health</span><span class="catCounter"> (05)</span></a>
                                </li>
                                <li><i class="fa fa-angle-double-right"></i><a href="#"><span
                                            class="catTitle">Gadgets</span><span class="catCounter"> (12)</span></a>
                                </li>
                                <li><i class="fa fa-angle-double-right"></i><a href="#"><span
                                            class="catTitle">Food</span><span class="catCounter"> (14)</span></a>
                                </li>
                            </ul>
                        </div>

                        <div class="col-lg-4 col-sm-12 col-xs-12 footer-widget">
                            <h3 class="widget-title">Popular Post</h3>
                            <div class="utf_list_post_block">
                                <ul class="utf_list_post">
                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                        src="images/news/lifestyle/health2.jpg" alt="" />
                                                </a> </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small"> <a href="#">Santino
                                                        loganne legan an year old resident...</a> </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                            class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                        src="images/news/lifestyle/health3.jpg" alt="" />
                                                </a> </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small"> <a href="#">Santino
                                                        loganne legan an year old resident...</a> </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                            class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                        src="images/news/lifestyle/health4.jpg" alt="" />
                                                </a> </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small"> <a href="#">Santino
                                                        loganne legan an year old resident...</a> </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                            class="fa fa-clock-o"></i> 25 Jan, 2022</span> </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->

        <!-- Copyright Start -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 text-center">
                        <div class="utf_copyright_info"> <span>Copyright © 2024 All Rights Reserved.</span> </div>
                    </div>
                </div>
                <div id="back-to-top" class="back-to-top">
                    <button class="btn btn-primary" title="Back to Top"> <i class="fa fa-angle-up"></i> </button>
                </div>
            </div>
        </div>
        <!-- Copyright End -->
    </div>

    <!-- Javascript Files -->
    <script src="{{ asset('default/js/jquery-3.2.1.min.js ') }}"></script>
    <script src="{{ asset('default/js/popper.min.js ') }}"></script>
    <script src="{{ asset('default/js/bootstrap.min.js ') }}"></script>
    <script src="{{ asset('default/js/owl.carousel.min.js ') }}"></script>
    <script src="{{ asset('default/js/jquery.colorbox.js ') }}"></script>
    <script src="{{ asset('default/js/smoothscroll.js ') }}"></script>
    <script src="{{ asset('default/js/custom_script.js ') }}"></script>

</body>

</html>

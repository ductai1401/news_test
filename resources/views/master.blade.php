<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head');
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
        {{-- <header id="header" class="header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="logo"> <a href="index.html"> <img src="{{ asset('images/Olympic-logo.jpg')}}" alt=""> </a>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12 header-right">
                        <div class="ad-banner float-right"> <a href="#"><img
                                    src="images/banner-ads/ad-top-header.png" class="img-fluid" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </header> --}}
        <!-- Header End -->

        <!-- Main Nav Start -->
            @include('partials.main_nav');
        <!-- Main Nav End -->

        <!-- Featured Post Area Start -->
            @include('partials.feature_post');
        <!-- Featured Post Area End -->

        <!-- Latest News Area Start -->
            @include('partials.latest_news');
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

        <!-- Block Wrapper Start -->
            @include('partials.block_wrapper');
        <!-- Block Wrapper end -->

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
        @include('partials.footer');
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
    @include('partials.foot');

</body>

</html>

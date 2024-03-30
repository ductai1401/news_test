@extends('master')

@section('title', 'Olympic ')

@section('content')
<section>
    <section class="utf_block_wrapper ">
        <div class="container">
            <div class="row d-flex justify-content-around" >
                <div class="col-lg-5">
                    <h1>OLYMPIC GAMES</h1>
                </div>
                <div class="col-lg-5" >
                    <h2>The Olympic Games are the world's only truly global, multi-sport, celebratory athletics competition. With more than 200 countries participating in over 400 events across the Summer and Winter Games, the Olympics are where the world comes to compete, feel inspired, and be together.</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="utf_ad_content_area text-center utf_banner_area">
        <div class="container" >
            <h2 class="text-left">Future Games</h2>
            <div class="row">
                <div class="col-md-12 p-0"> <img class="img-fluid p-0" src="{{ asset('images/olympic_avatar.jpg')}}"
                    alt="olympic_paris" /> </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row d-flex justify-content-around">
                @for($i = 1; $i < 4; $i++ )
                <div class="col-md-3 bg-white" style="border-radius: 5px; border: 3px solid #C0C0C0; padding: 0">
                    <picture style="display: flex; justify-content: center; height:300px;">
                        <img src="{{ asset('images/logo_2022.jpg')}}" class="img-thumbnail p-0" alt="logo" height="400" width="100%">
                    </picture>
                    
                    <div class="text-center p-4" style="background-color: #C0C0C0; height:150px">

                        <h4 style="color: white">Beijing 2022</h4>
                        <a href=""><button type="button" class="btn btn-outline-warning m-3" style="font-weight:600; width:250px; color:white; border-radius:30px; border:solid 3px">More Detail</button></a>

                    </div>
                </div>
                @endfor
            </div>
        </div>
    </section>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 pad-r">
                <div id="utf_featured_slider" class="owl-carousel owl-theme utf_featured_slider">
                    <div class="item" style="background-image:url(images/results-olympic.jpg)">
                        <div class="utf_featured_post">
                            <h3 class="utf_post_title title-extra-large1 pl-4 pt-5 "> Results</h3>
                            <div class="utf_post_content1">
                                
                                <span class="utf_post_author "><a
                                            href="#">Discover</a></span>
                                
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
                                        src="{{ asset('images/2024paris-mascot.jpg')}}" alt="mascot" /></a> </div>
                            <div class="utf_post_content">
                                <h2 class="utf_post_title title-large1 pl-4 pt-5"> Mascot </h2>                      
                            </div>    
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="col-md-12">
                            <div class="utf_post_overaly_style contentTop hot-post-top clearfix">
                                <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                            src="{{ asset('images/Sport_logo.jpg')}}" alt="mascot" /></a> </div>
                                <div class="utf_post_content">
                                    <h2 class="utf_post_title title-large1 pl-4 pt-5"> Sport </h2>                      
                                </div>    
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</section>
    <div class="utf_ad_content_area text-center utf_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-md-7">

                </div>
                <div class="col-md-3"> <img class="img-fluid" src="images/banner-ads/ad-content-two.png"
                        alt="" /> </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
@endsection
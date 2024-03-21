@extends('master')

@section('title','home')

@section('content')
    <!-- Featured Post Area Start -->
    @include('partials.feature_post')
    <!-- Featured Post Area End -->

    <!-- Latest News Area Start -->
        @include('partials.latest_news')
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
        @include('partials.block_wrapper')
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
@endsection 
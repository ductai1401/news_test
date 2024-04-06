@extends('master')

@section('title','Home')

@section('content')
    <!-- Featured Post Area Start -->
    @include('partials.feature_post')
    <!-- Featured Post Area End -->

    <!-- Latest News Area Start -->
        @include('partials.latest_news')
    <!-- Latest News Area End -->

    <!-- Ad Content Area Start -->
    <div class="utf_ad_content_area text-center utf_banner_area no-padding m-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> <img class="img-fluid" src="{{ asset('images/image_home.jpg')}}"
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
                <div class="col-md-12"> <img class="img-fluid" src="#"
                        alt="" /> </div>
            </div>
        </div>
    </div>
    <!-- Ad Content Area End -->
@endsection 
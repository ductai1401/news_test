@extends('master')
@section('title', 'Sports')
 @section('content')

   <!-- Page Title Start -->
   <div class="page-title">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <ul class="breadcrumb">
            <li><a href="{{ route('index')}}">Home</a></li>
            <li>Search News</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Page title end -->
     <!-- 1rd Block Wrapper Start -->
  <section class="utf_block_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-12">
          <div class="block category-listing">
            <h3 class="utf_block_title"><span>Search {{ $search}}</span></h3>
            <ul class="subCategory unstyled">
                @foreach ($news_categories as $news_category)
                    @php
                        $category = \App\Models\Category::where('status', 1)->where('id', $news_category ->id_category)->first();
                    @endphp
                    <li><a href="#">{{$category->name}}</a></li>
                @endforeach
            </ul>
            <div class="row">
                @foreach($news as $n)

                @php 
                    $image_url = public_path("uploads/news") . '/' . $n ->image;
                    if(!file_exists($image_url)) {
                        $image_url = asset('images/error.jpg');
                    } else {
                        $image_url = asset("uploads/news") .'/' . $n ->image;
                    }
                    $category_1 = \App\Models\Category::where('status', 1)->where('id', $n ->id_category)->first();
                    $intro = Str::of($n->intro)->limit(150);
                 @endphp    
              <div class="col-md-6">
                <div class="utf_post_block_style post-grid clearfix">
                  <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="{{ $image_url }}" alt="image_news" /> </a> </div>
                  <a class="utf_post_cat" href="#">{{ $category_1 ->name}}</a>
                  <div class="utf_post_content">
                    <h2 class="utf_post_title title-large"> <a href="{{ route('singleNews',['id' => $n ->id]) }}">{{ $n ->title}}</a> </h2>
                    <div class="utf_post_meta"> 
                         <span class="utf_post_date"><i class="fa fa-clock-o"></i> 
                            {{ date('d/m/Y', strtotime( $n->created_at)) }}
                        </span>
                        <span class="post-comment pull-right"><i class="fa fa-comments-o"></i> <a href="#" class="comments-link"><span>03</span></a></span> </div>					
                    {{-- <p style="font-size: 24px">{!! $intro !!}</p> --}}
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
          
          <div class="paging">
            <ul class="pagination">
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">»</a></li>
            </ul>
          </div>          
        </div>
        
        <div class="col-lg-4 col-md-12">
          <div class="sidebar utf_sidebar_right">
        
            
            <div class="widget color-default">
              <h3 class="utf_block_title"><span>Hot News</span></h3>
              <div class="utf_list_post_block">
                <ul class="utf_list_post">
                @foreach($hot_news as $h_n)
                @php 
                    $image_url_1 = public_path("uploads/news") . '/' . $h_n ->image;
                    if(!file_exists($image_url_1)) {
                        $image_url_1 = asset('images/error.jpg');
                    } else {
                        $image_url_1 = asset("uploads/news") .'/' . $h_n ->image;
                    }
                    $category_2 = \App\Models\Category::where('status', 1)->where('id', $h_n ->id_category)->first();
                    $title = Str::of($h_n->title)->limit(60);
                    $intro = Str::of($h_n->intro)->limit(100);
                @endphp

                  <li class="clearfix">
                    <div class="utf_post_block_style post-float clearfix">
                      <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid" src="{{ $image_url_1 }}" alt="" /> </a> <a class="utf_post_cat" href="#">{{ $category_2 ->name}}</a> </div>
                      <div class="utf_post_content">
                        <h2 class="utf_post_title title-small"> <a href="{{ route('singleNews',['id' => $h_n ->id]) }}">{{ $title}}</a> </h2>
                        <div class="utf_post_meta"> 
                            <span class="utf_post_date"><i class="fa fa-clock-o"></i>
                                {{ date('d/m/Y', strtotime( $h_n->created_at)) }}
                            </span> 
                        </div>
                      </div>
                    </div>
                  </li>
                @endforeach  
                </ul>
              </div>
            </div>
            <div class="widget text-center"> <img class="banner img-fluid" src="images/banner-ads/ad-sidebar.png" alt="" /> </div>
            <div class="widget m-bottom-0">
              <h3 class="utf_block_title"><span>Newsletter</span></h3>
              <div class="utf_newsletter_block">
                <div class="utf_newsletter_introtext">
				  <h4>Subscribe Newsletter!</h4>
                  <p>Lorem ipsum dolor sit consectetur adipiscing elit Maecenas in pulvinar neque Nulla finibus lobortis pulvinar.</p>
                </div>
                <div class="utf_newsletter_form">
                  <form action="#" method="post">
                    <div class="form-group">
                      <input type="email" name="email" id="utf_newsletter_form-email" class="form-control form-control-lg" placeholder="E-Mail Address" autocomplete="off">
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
<!-- 1rd Block Wrapper End -->
 @endsection 
  
  

@extends('master')

@section('title', 'Single news ')

@push('css')
    <link rel="stylesheet" href="{{ asset('default/css/animate.css') }}">
@endpush

@push('hanldejs')
    <script>
        /* Loading Js*/
        $(window).on('load', function() {
            setTimeout(function() {
                $(".preloader").delay(700).fadeOut(700).addClass('loaded');
            }, 800);
        });
    </script>
@endpush

@push('script')



<script type="text/javascript">
    $(document).ready(function(){
    $('#inputField').click(function(){
        $.get("{{ route('checkLogin') }}", function(data){
            if (!data.isLoggedIn) {
                var confirmLogin = confirm("Bạn cần phải đăng nhập để tiếp tục. Bạn có muốn đăng nhập?");
                if (confirmLogin) {
                    // Redirect to login page or perform login action
                    // For demonstration, I'm just logging a message
                    // console.log("Redirecting to login page...");
                    window.location.href = "{{ route('auth.login') }}"; // Uncomment this line to redirect to login page
                }
            }
        });
    });
   
});

    </script>

   
@endpush

@section('content')

    <!-- Page Title Start -->
    <div class="page-title">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li>Lifestyle</li>
                    </ul>
                </div>
            </div>
            {{-- @error('content')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror --}}
        </div>
    </div>
    <!-- Page title end -->

    <!-- 1rd Block Wrapper Start -->
    <section class="utf_block_wrapper">
        <div class="container">
            <div class="row">
                <div class="post-media post-video">
                    <div class="embed-responsive">
                        <iframe src="https://www.youtube.com/watch?v=ZpNXsJlVewY" width="500" height="281"
                            allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="single-post">
                        @php
                            $image_url = public_path('uploads/news') . '/' . $news->image;
                            if (!file_exists($image_url)) {
                                $image_url = asset('images/error.jpg');
                            } else {
                                $image_url = asset('uploads/news') . '/' . $news->image;
                            }
                        @endphp
                        <div class="post-media post-featured-image"> <img src="{{ $image_url }}" class="img-single-news"
                                alt=""> </div>
                        <div class="utf_post_title-area"> <a class="utf_post_cat" href="#">{{ $news->key_word }}</a>
                            <h2 class="utf_post_title mb-5">{{ $news->title }}</h2>
                            <div class="utf_post_meta">
                                <span class="utf_post_date"><i class="fa fa-clock-o"></i>
                                    {{ date('d/m/Y', strtotime($news->created_at)) }}</span> <span class="post-hits"><i
                                        class="fa fa-eye"></i> 21</span> <span class="post-comment"><i
                                        class="fa fa-comments-o"></i> <a href="#"
                                        class="comments-link"><span>01</span></a></span>
                            </div>
                        </div>

                        <div class="utf_post_content-area">
                            <div class="entry-content">
                                {!! $news->content !!}
                            </div>

                            <div class="tags-area clearfix">
                                <div class="post-tags">
                                    <span>Tags:</span>
                                    <a href="#"># Business</a>
                                    <a href="#"># Corporate</a>
                                    <a href="#"># Services</a>
                                    <a href="#"># Customer</a>
                                </div>
                            </div>

                            <div class="share-items clearfix">
                                <ul class="post-social-icons unstyled">
                                    <li class="facebook"> <a href="#"> <i class="fa-brands fa-facebook"></i> <span
                                                class="ts-social-title">Facebook</span></a> </li>
                                    <li class="twitter"> <a href="#"> <i class="fa-brands fa-twitter"></i> <span
                                                class="ts-social-title">Twitter</span></a> </li>
                                    <li class="gplus"> <a href="#"> <i class="fa-brands fa-google-plus"></i> <span
                                                class="ts-social-title">Google +</span></a> </li>
                                    <li class="pinterest"> <a href="#"> <i class="fa-brands fa-pinterest"></i> <span
                                                class="ts-social-title">Pinterest</span></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    {{-- <nav class="post-navigation clearfix">
                        <div class="post-previous">
                            <a href="#"> <span><i class="fa fa-angle-left"></i>Previous Post</span>
                                <h3>Zhang social media pop also known when smart innocent...</h3>
                            </a>
                        </div>
                        <div class="post-next">
                            <a href="#"> <span>Next Post <i class="fa fa-angle-right"></i></span>
                                <h3>Zhang social media pop also known when smart innocent...</h3>
                            </a>
                        </div>
                    </nav> --}}


                    <div class="related-posts block">
                        <h3 class="utf_block_title"><span>Related Posts</span></h3>
                        @php
                            $category = \App\Models\Category::where('status', 1)
                                ->where('id', $news->id_category)
                                ->first();
                            // $parent_category = \App\Models\Category::where('status', 1)->where('id', $category ->parent_id)->first();
                            $related_posts = \App\Models\News::where('status', 1)
                                ->where('id_category', $news->id_category)
                                ->take(5)
                                ->get();
                        @endphp
                        <div id="utf_latest_news_slide" class="owl-carousel owl-theme utf_latest_news_slide">
                            @foreach ($related_posts as $related_post)
                                @php
                                    $image_url_1 = public_path('uploads/news') . '/' . $related_post->image;
                                    if (!file_exists($image_url_1)) {
                                        $image_url_1 = asset('images/error.jpg');
                                    } else {
                                        $image_url_1 = asset('uploads/news') . '/' . $related_post->image;
                                    }
                                @endphp
                                <div class="item">
                                    <div class="utf_post_block_style clearfix">
                                        <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                                    src="{{ $image_url_1 }}" alt="" /></a> </div>
                                        <a class="utf_post_cat" href="#">{{ $category->name }}</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-medium"> <a
                                                    href="{{ route('singleNews', ['id' => $related_post->id]) }}">{{ $related_post->title }}</a>
                                            </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i>
                                                    {{ date('d/m/Y', strtotime($related_post->created_at)) }}</span> </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Post comment start -->
                    <div id="comments" class="comments-area block">
                        <h3 class="utf_block_title"><span>{{ $quantity }} Comments</span></h3>
                        <ul class="comments-list">
                            <li>
                                @foreach ($comments as $comment)
                                    @php
                                        if(empty($comment ->user ->image)){
                                            $image_url_2 = asset('images/user_defaults.png');
                                        }else{
                                            $image_url_2 = public_path("uploads/users") . '/' . $comment ->user ->image;
                                            if(!file_exists($image_url_2)) {
                                                $image_url_2 = asset('images/user_defaults.png');
                                            } else {
                                                $image_url_2 = asset("uploads/users") .'/' . $comment ->user ->image;
                                            }
                                        }
                                        
                                    @endphp
                                    {{-- <div class="comment"> <img class="comment-avatar pull-left" alt="user"
                                        src="{{ $image_url_2 }}">
                                    <div class="comment-body">
                                        <div class="meta-data"> <span class="comment-author">{{ $comment ->user ->fullname}}</span> <span
                                                class="comment-date pull-right"></span> {{ date('d/m/Y', strtotime($comment->created_at)) }} </div>
                                        <div class="comment-content">
                                            <p>{!! $comment ->content!!}</p>
                                        </div>
                                        <div class="text-left"> <a class="comment-reply" href="#"><i
                                                    class="fa fa-share"></i> Reply</a> </div>
                                    </div>
                                </div> --}}

                                <div class="comment last mt-1"> <img class="comment-avatar pull-left" alt="user"
                                    src="{{ $image_url_2 }}">
                                <div class="comment-body">
                                    <div class="meta-data"> <span class="comment-author">{{ $comment ->user ->fullname}}</span> <span
                                            class="comment-date pull-right"> {{ date('d/m/Y', strtotime($comment->created_at)) }} </span> </div>
                                    <div class="comment-content">
                                        <p>{!! $comment ->content!!}</p>
                                    </div>
                                   
                                </div>
                            </div>
                                @endforeach
                                

                                {{-- <ul class="comments-reply">
                                    <li>
                                        <div class="comment"> <img class="comment-avatar pull-left" alt=""
                                                src="images/news/user2.png">
                                            <div class="comment-body">
                                                <div class="meta-data"> <span class="comment-author">Miss Lisa Doe</span>
                                                    <span class="comment-date pull-right">15 Jan, 2022</span>
                                                </div>
                                                <div class="comment-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                        industry. Lorem Ipsum has been the industry's standard dummy text
                                                        ever since It has survived not only five centuries, but also the
                                                        leap into electronic type setting, remaining essentially unchanged.
                                                    </p>
                                                </div>
                                                <div class="text-left"> <a class="comment-reply" href="#"><i
                                                            class="fa fa-share"></i> Reply</a> </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul> --}}
                            </li>
                        </ul>
                    </div>
                    <!-- Post comment end -->

                    <!-- Comments Form Start -->
                    <div class="comments-form">
                        <h3 class="title-normal">Leave a comment</h3>
                        <form id="commentForm"  action="{{ route('storeComment', ['id' =>$news->id]) }}" method="post">
                            @csrf
                             <div class="row">
                                {{-- <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="fullname" id="fullname" placeholder="FullName"
                                            type="text" >
                                        <div class="margin-top-3">
                                            <div class="input-group" >
                                                @error('fullname')
                                                    <span class="alert-1 alert-danger">
                                                        {{ $message }}</span>
                                                @enderror
                                            </div>
                                                
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input class="form-control" name="email" id="email" placeholder="Email"
                                            type="email" >
                                        <div class="margin-top-3">
                                        <div class="input-group" >
                                            @error('email')
                                                <span class="alert-1 alert-danger">
                                                    {{ $message }}</span>
                                            @enderror
                                        </div>
                                            
                                    </div>    
                                    </div>
                                    
                                </div> --}}
                                <div class="col-md-12">
                                    <div class="form-group">
                                        
                                        <textarea  class="form-control required-field" id="inputField" name="content" placeholder="Comment" rows="10" ></textarea>
                                        <div class="margin-top-3">
                                            <div class="input-group" >
                                                @error('content')
                                                    <span class="alert-1 alert-danger fill-it p-3">
                                                        {{ $message }}</span>
                                                @enderror
                                            </div>
                                                
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="clearfix" >
                                <button  class="comments-btn btn btn-primary" type="submit">Post Comment</button>
                            </div>
                        </form>
                   
                        <div>
                            @if (Session::has('msg'))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="fa fa-exclamation-circle"></i> Warning!</h5>
                                {{ Session::get('msg') }}
                            </div>
                            @endif
                        </div>
                    </div>
                    <!-- Comments form end -->
                </div>

                {{-- <div class="col-lg-4 col-md-12">
                    <div class="sidebar utf_sidebar_right">
                        <div class="widget">
                            <h3 class="utf_block_title"><span>Follow Us</span></h3>
                            <ul class="social-icon">
                                <li><a href="#" target="_blank"><i class="fa fa-rss"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                        
                        <div class="widget color-default">
                            <h3 class="utf_block_title"><span>Popular News</span></h3>
                            <div class="utf_list_post_block">
                                <ul class="utf_list_post">
@for ($i = 1; $i <= 3; $i++)
                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                        src="images/news/tech/gadget3.jpg" alt="" /> </a> <a
                                                    class="utf_post_cat" href="#">Gadgets</a> </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small"> <a href="#">Zhang social
                                                        media pop also known when smart innocent...</a> </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                            class="fa fa-user"></i> <a href="#">John Wick</a></span>
                                                    <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                        2022</span> </div>
                                            </div>
                                        </div>
                                    </li>
                                  @endfor
                                    
                                </ul>
                            </div>
                        </div>

                        <div class="widget text-center"> <img class="banner img-fluid"
                                src="images/banner-ads/ad-sidebar.png" alt="" /> </div>
                        <div class="widget widget-tags">
                            <h3 class="utf_block_title"><span>Popular Tags</span></h3>
                            <ul class="unstyled clearfix">
                              @for ($i = 1; $i <= 3; $i++)
                                <li><a href="#">Business</a></li>
                              @endfor  
                            </ul>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    <!-- 1rd Block Wrapper End -->

@endsection

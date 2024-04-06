<!-- 1rd Block Wrapper Start -->
<section class="utf_block_wrapper p-bottom-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="utf_featured_tab color-blue">
                    <h3 class="utf_block_title"><span>Athlete News</span></h3>
                    <ul class="nav nav-tabs">
                        {{-- <li class="nav-item"> <a class="nav-link animated fadeIn active" href="#tab_a"
                                data-toggle="tab"> <span class="tab-head"> <span
                                        class="tab-text-title">Lifestyle</span> </span> </a> </li> --}}
                        {{-- <li class="nav-item"> <a class="nav-link animated fadeIn" href="#tab_b"
                                data-toggle="tab"> <span class="tab-head"> <span
                                        class="tab-text-title">Traveling</span> </span> </a> </li> --}}
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active animated fadeInRight" id="tab_a">
                            <div class="row">
                                @php
                                    $category_0 = \App\Models\Category::select('name','id')->where('name', 'like', "%athlete%")->first();
                                    
                                    $news_athlete_1 = \App\Models\News::where('status', 1)->where('id_category', $category_0 ->id)->where('intro', 'like',"%athlete%")->orderBy('id', 'desc')->first();
                                    
                                    $image_url_0 = public_path("uploads/news") . '/' . $news_athlete_1 ->image;
                                    if(!file_exists($image_url_0)) {
                                        $image_url_0 = asset('images/error.jpg');
                                    } else {
                                        $image_url_0 = asset("uploads/news") .'/' .  $news_athlete_1 ->image;
                                    }
                                    $truncated = Str::of($news_athlete_1->intro)->limit(170);
                                @endphp
                                <div class="col-lg-6 col-md-6">
                                    <div class="utf_post_block_style clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img
                                                    class="img-fluid" src="{{ $image_url_0 }}"
                                                    alt="" /> </a> </div>
                                        <a class="utf_post_cat" href="#">{{ $category_0 ->name}}</a>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title"> <a href="{{ route('singleNews', ['id' => $news_athlete_1 ->id]) }}">{!! $news_athlete_1 ->title !!}</a> </h2>
                                            <div class="utf_post_meta"> 
                                                 <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> {{ date('d/m/Y', strtotime( $news_athlete_1->created_at)) }}</span> </div>
                                            <p>{!! $truncated !!}</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="utf_list_post_block">
                                        <ul class="utf_list_post">
                                            @php
                                            $news = \App\Models\News::where('status', 1)->where('id_category', $category_0 ->id)->take(5)->get();
                                            @endphp
                                            @foreach($news as $news_athlete)
                                            @php 
                                                $image_url_1 = public_path("uploads/news") . '/' . $news_athlete ->image;
                                                if(!file_exists($image_url_1)) {
                                                    $image_url_1 = asset('images/error.jpg');
                                                } else {
                                                    $image_url_1 = asset("uploads/news") .'/' .  $news_athlete ->image;
                                                }
                                            @endphp
                                            <li class="clearfix">
                                                <div class="utf_post_block_style post-float clearfix">
                                                    <div class="utf_post_thumb"> <a href="#"> <img
                                                                class="img-fluid"
                                                                src="{{ $image_url_1 }}"
                                                                alt="" /> </a> </div>
                                                    <div class="utf_post_content">
                                                        <h2 class="utf_post_title title-small"> <a
                                                                href="{{ route('singleNews', ['id' =>$news_athlete ->id])}}">{{ $news_athlete ->title}}</a> </h2>
                                                        <div class="utf_post_meta">  <span
                                                                class="utf_post_date"><i
                                                                    class="fa fa-clock-o"></i> {{ date('d/m/Y', strtotime( $news_athlete->created_at)) }}</span> </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                           
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="tab-pane animated fadeInLeft" id="tab_b">
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
                        </div> --}}
                    </div>
                </div>

                <div class="gap-30"></div>
                <div class="block color-orange">
                    @php
                        $category_golf =  \App\Models\Category::where('status', 1)->where('name', 'like',"%golf%")->first();
                        $news_golds = \App\Models\News::where('id_category', $category_golf ->id)->orderBy('created_at', 'desc')->take(3)->get();
                    @endphp
                    <h3 class="utf_block_title"><span> {{$category_golf ->name}} News</span></h3>
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
                                    @foreach($news_golds as $news_gold)

                                    @php
                                        $image_url_4 = public_path("uploads/news") . '/' . $news_gold->image;
                                        if(!file_exists($image_url_4)) {
                                            $image_url_4 = asset('images/error.jpg');
                                        } else {
                                            $image_url_4 = asset("uploads/news") .'/' .  $news_gold ->image;
                                        }
                                    @endphp
                                    
                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img
                                                        class="img-fluid"
                                                        src="{{ $image_url_4 }}"
                                                        alt="" /> </a> <a class="utf_post_cat"
                                                    href="#">{{ $category_golf ->name}}</a> </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small"> <a
                                                        href="{{ route('singleNews', ['id' => $news_gold ->id]) }}">{{$news_gold ->title}} </a> </h2>
                                                <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                            class="fa fa-clock-o"></i> {{ date('d/m/Y', strtotime( $news_gold->created_at)) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

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
                                    @php
                                        $news_golds_1 = \App\Models\News::where('id_category', $category_golf ->id)->take(3)->get();
                                    @endphp
                                    @foreach($news_golds_1 as $news_gold_1)

                                    @php
                                        $image_url_5 = public_path("uploads/news") . '/' . $news_gold_1->image;
                                        if(!file_exists($image_url_5)) {
                                            $image_url_5 = asset('images/error.jpg');
                                        } else {
                                            $image_url_5 = asset("uploads/news") .'/' .  $news_gold_1 ->image;
                                        }
                                    @endphp
                                    <li class="clearfix">
                                        <div class="utf_post_block_style post-float clearfix">
                                            <div class="utf_post_thumb"> <a href="#"> <img
                                                        class="img-fluid"
                                                        src="{{ $image_url_5 }}"
                                                        alt="" /> </a> <a class="utf_post_cat"
                                                    href="#">{{ $category_golf ->name}}</a> </div>
                                            <div class="utf_post_content">
                                                <h2 class="utf_post_title title-small"> <a
                                                        href="{{ route('singleNews', ['id' => $news_gold_1 ->id]) }}">{{ $news_gold_1 ->title}}</a> </h2>
                                                <div class="utf_post_meta"> 
                                                    <span class="utf_post_date"><i
                                                            class="fa fa-clock-o"></i> {{ date('d/m/Y', strtotime( $news_gold_1->created_at)) }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12">
                <div class="sidebar utf_sidebar_right">
                

                    <div class="widget color-default">
                        @php
                            $category_1 = \App\Models\Category::select('name','id')->where('name', 'like', "%sports%")->first();
                            $news_sports_1 = \App\models\News::where('status', 1)->where('id_category', $category_1->id)->orderBy('created_at', 'desc')->first();   
                        @endphp
                        @php 
                        $image_url_3 = public_path("uploads/news") . '/' . $news_sports_1 ->image;
                        if(!file_exists($image_url_3)) {
                            $image_url_3 = asset('images/error.jpg');
                        } else {
                            $image_url_3 = asset("uploads/news") .'/' .  $news_sports_1 ->image;
                        }
                        @endphp
                        <h3 class="utf_block_title"><span>Sport News</span></h3>
                        <div class="utf_post_overaly_style clearfix">
                            <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                        src="{{ $image_url_3  }}" alt="" /> </a>
                            </div>
                            <div class="utf_post_content"> <a class="utf_post_cat"
                                    href="#">{{ $category_1 ->name}}</a>
                                <h2 class="utf_post_title"> <a href="{{ route('singleNews', ['id' => $news_sports_1 ->id])}}">{!! $news_sports_1 ->title!!}</a> </h2>
                                <div class="utf_post_meta"> <span class="utf_post_author"><i
                                            class="fa fa-user"></i> <a href="#">{{ $news_sports_1 ->key_word}}</a></span>
                                    <span class="utf_post_date"><i class="fa fa-clock-o"></i> 
                                         {{ date('d/m/Y', strtotime( $news_sports_1->created_at)) }}
                                        </span>
                                </div>
                            </div>
                        </div>

                        <div class="utf_list_post_block">
                            <ul class="utf_list_post">
                                @php

                                        $category = \App\Models\Category::select('name','id')->where('name', 'like', "%Sport%")->first();
                                        $news = DB::table('news')->join('categories', 'news.id_category', '=', 'categories.id')->where('parent_id', $category->id)->where('news.status', 1)
                                        ->orderBy('news.created_at', 'desc')->take(3)->get();
                                    @endphp
                                @foreach($news as $news_sports)
                                @php 
                                        $image_url_2 = public_path("uploads/news") . '/' . $news_sports ->image;
                                        if(!file_exists($image_url_2)) {
                                            $image_url_2 = asset('images/error.jpg');
                                        } else {
                                            $image_url_2 = asset("uploads/news") .'/' .  $news_sports ->image;
                                        }
                                    @endphp
                                <li class="clearfix">
                                    <div class="utf_post_block_style post-float clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img
                                                    class="img-fluid" src="{{ $image_url_2 }}"
                                                    alt="" /> </a> <a class="utf_post_cat"
                                                href="#">{{$news_sports ->name}}</a> </div>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-small"> <a href="{{ route('singleNews', ['id' => $news_sports ->id])}}">{!! $news_sports ->title !!}</a> </h2>
                                            <div class="utf_post_meta"> 
                                                 <span class="utf_post_date">
                                                    <i class="fa fa-clock-o"></i> 
                                                    {{ date('d/m/Y', strtotime( $news_sports->created_at)) }}
                                                </span> 
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                
                            </ul>
                        </div>
                    </div>

                    <div class="widget color-default m-bottom-0">
                        @php
                            $category_Badminton =  \App\Models\Category::where('status', 1)->where('name', 'like',"%Badminton%")->first();
                            $news_Badmintons = \App\Models\News::where('id_category', $category_golf ->id)->orderBy('created_at', 'desc')->take(3)->get();
                        @endphp
                        <h3 class="utf_block_title"><span>{{ $category_Badminton ->name}} News</span></h3>
                        
                       
                        <div id="utf_post_slide" class="owl-carousel owl-theme utf_post_slide"> 
                            @foreach($news_Badmintons as $news_Badminton)

                                    @php
                                        $image_url_6 = public_path("uploads/news") . '/' . $news_Badminton->image;
                                        if(!file_exists($image_url_6)) {
                                            $image_url_6 = asset('images/error.jpg');
                                        } else {
                                            $image_url_6 = asset("uploads/news") .'/' .  $news_Badminton ->image;
                                        }
                                    @endphp
                            <div class="item">
                                <div class="utf_post_overaly_style text-center clearfix">
                                    <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                src="{{ $image_url_6 }}" alt="" /> </a>
                                    </div>
                                    <div class="utf_post_content"> <a class="utf_post_cat"
                                            href="#">{{ $category_Badminton ->name }}</a>
                                        <h2 class="utf_post_title"> <a href="{{ route('singleNews', ['id' => $news_Badminton ->id]) }}">{{ $news_Badminton ->title}}</a> </h2>
                                        <div class="utf_post_meta"> 
                                            <span class="utf_post_date">
                                                <i class="fa fa-clock-o"></i> 
                                                {{ date('d/m/Y', strtotime( $news_Badminton->created_at)) }}
                                            </span> 
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- 1rd Block Wrapper End -->

<!-- 2rd Block Wrapper Start -->
{{-- <section class="utf_block_wrapper p-bottom-0">
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
</section> --}}
<!-- 2rd Block Wrapper End -->

<!-- 3rd Block Wrapper Start -->
{{-- <section class="utf_block_wrapper p-bottom-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <div class="utf_more_news block color-default">
                    @php
                            $category_cycling_track =  \App\Models\Category::where('status', 1)->where('name', 'like',"%cycling track%")->first();
                            $news_cycling_track = \App\Models\News::where('status', 1)->where('id_category', $category_golf ->id)->orderBy('created_at', 'desc')->take(3)->get();
                        @endphp
                    <h3 class="utf_block_title"><span>Cycling Track News</span></h3>
                    <div id="utf_more_news_slide" class="owl-carousel owl-theme utf_more_news_slide">
                        
                        @for($i =1 ; $i <= 3; $i++)
                        <div class="item">
                            @for($j =1 ; $j <= 3; $j++)
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
                            @endfor
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- 3rd Block Wrapper End -->
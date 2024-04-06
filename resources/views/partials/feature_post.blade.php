<section class="utf_featured_post_area pt-4 no-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 pad-r">
                <div id="utf_featured_slider" class="owl-carousel owl-theme utf_featured_slider">
                    @php
                   $news_single = \App\Models\News::where('status', 1)->where('title', 'like', "%2024%")->orWhere('intro', 'like', "%2024%")->take(3)->get();
                   $news_single_1 = \App\Models\News::where('status', 1)->where('title', 'like', "%2024%")->orWhere('intro', 'like', "%2024%")->orderBy('created_at', 'desc')->first();
                   $category_2 = \App\Models\Category::select('id')->where('status', 1)->where('name','like', "%news%")->first();
                   $news_single_2 = \App\Models\News::where('status', 1)->where('id_category',  $category_2->id)->orderBy('created_at', 'desc')->take(2)->get();
                @endphp
                @foreach($news_single as $news)
                @php
                    $image_url_0 = public_path("uploads/news") . '/' . $news ->image;
                   if(!file_exists($image_url_0)) {
                        $image_url_0 = asset('images/error.jpg');
                    } else {
                        $image_url_0 = asset("uploads/news") .'/' .  $news ->image;
                    }
                    $category = \App\Models\Category::where('id', $news ->id_category)->first();
                @endphp
                
                    <div class="item" style="background-image:url({{ $image_url_0 }})">
                        <div class="utf_featured_post">
                            <div class="utf_post_content"> <a class="utf_post_cat" href="#">{{ $category ->name }}</a>
                                <h2 class="utf_post_title title-extra-large"> <a href="{{ route('singleNews', ['id' =>$news ->id])}}">{{ $news ->title }}</a> </h2>
                                <span class="utf_post_date"><i class="fa fa-clock-o"></i> {{ date('d/m/Y', strtotime( $news->created_at)) }}</span>
                            </div>
                        </div>
                    </div>

                @endforeach
                </div>
            </div>

            <div class="col-lg-5 col-md-12 pad-l">
                <div class="row">
                    <div class="col-md-12">
                        <div class="utf_post_overaly_style contentTop hot-post-top clearfix">
                            @php
                                $image_url_1 = public_path("uploads/news") . '/' . $news_single_1 ->image;
                                if(!file_exists($image_url_1)) {
                                    $image_url_1 = asset('images/error.jpg');
                                } else {
                                    $image_url_1 = asset("uploads/news") .'/' .  $news_single_1 ->image;
                                }
                                $category_1 = \App\Models\Category::where('id', $news_single_1 ->id_category)->first();
                            @endphp
                            <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                        src="{{ $image_url_1 }}" alt="image_news" /></a> </div>
                            <div class="utf_post_content"> <a class="utf_post_cat" href="#">{{ $category_1 ->name}}</a>
                                <h2 class="utf_post_title title-large"> <a href="{{ route('singleNews', ['id' =>$news_single_1 ->id])}}">{{ $news_single_1 ->title}}</a> </h2>
                                <span class="utf_post_date"><i class="fa fa-clock-o"></i> {{ date('d/m/Y', strtotime( $news_single_1->created_at)) }}</span>
                            </div>
                        </div>
                    </div>
                    @foreach($news_single_2 as $news_1)
                    @php
                        $image_url_2 = public_path("uploads/news") . '/' . $news_1 ->image;
                       if(!file_exists($image_url_2)) {
                            $image_url_2 = asset('images/error.jpg');
                        } else {
                            $image_url_2 = asset("uploads/news") .'/' .  $news_1 ->image;
                        }
                        $category_2 = \App\Models\Category::where('id', $news_1 ->id_category)->first();
                    @endphp
                    <div class="col-md-6 pad-r-small">
                        <div class="utf_post_overaly_style contentTop utf_hot_post_bottom clearfix">
                            
                            <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                        src="{{ $image_url_2 }}" alt="image_news" /></a> </div>
                            <div class="utf_post_content"> <a class="utf_post_cat" href="#">{{ $category_2 ->name}}</a>
                                <h2 class="utf_post_title title-medium"> <a href="#">{{ $news_1 ->title}}</a> </h2>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </div>
</section>
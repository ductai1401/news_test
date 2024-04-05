<section class="utf_latest_new_area1 pb-bottom-20">
    <div class="container">
        <div class="utf_latest_news1 block color-red">
            <h3 class="utf_block_title"><span>Latest News</span></h3>
            <div id="utf_latest_news_slide" class="owl-carousel owl-theme utf_latest_news_slide">

                @php
                    $news = \App\Models\News::where('status', 1)->get();
                @endphp
                @foreach($news as $n )
                <div class="item">
                    
                    <ul class="utf_list_post">
                        <li class="clearfix">
                            <div class="utf_post_block_style clearfix">
                                @php 
                                    $image_url = public_path("uploads/news") . '/' . $n ->image;
                                    if(!file_exists($image_url)) {
                                        $image_url = asset('images/error.jpg');
                                    } else {
                                        $image_url = asset("uploads/news") .'/' .  $n ->image;
                                    }
                                @endphp
                                <div class="utf_post_thumb"> <a href="#"><img class="img-fluid1"
                                            src="{{ $image_url }}" alt="image" /></a>
                                </div>
                                <a class="utf_post_cat" href="#">{{ $n ->key_word }}</a>
                                <div class="utf_post_content">
                                    <h2 class="utf_post_title1 title-medium"> <a href="{{ route('singleNews',['id' => $n ->id]) }}">{{ $n ->title}}</a> </h2>
                                    <div class="utf_post_meta">
                                        <span class="utf_post_date"><i class="fa fa-clock-o"></i> {{ date('d/m/Y', strtotime( $n->created_at)) }}</span>
                                    </div>
                                </div>
                            </div>
                        </li>

                        {{-- <li class="clearfix">
                            <div class="utf_post_block_style clearfix">
                                <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                            src="https://th.bing.com/th/id/OIP.Yh8OW6zO_rwiLkurqJ43QQHaEo?rs=1&pid=ImgDetMain" alt="" /></a>
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
                        </li> --}}
                        
                    </ul>
                   
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
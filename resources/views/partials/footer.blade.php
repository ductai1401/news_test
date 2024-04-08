<footer id="footer" class="footer">
    <div class="utf_footer_main">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-xs-12 footer-widget contact-widget">
                    <h3 class="widget-title">About Us</h3>
                    <ul>
                        <li>We are warriors who always burn hard for great dreams</li>
                        <li><i class="fa fa-home"></i>95/24 Lê Thị Riêng, Phường Bến Thành, Quận 1, Thành Phố Hồ Chí Minh</li>
                        <li><i class="fa fa-phone"></i> <a href="#">+84 0392535026</a></li>
                        <li><i class="fa fa-envelope-o"></i> <a href="#">luuductai12@gmail.com</a></li>
                    </ul>
                    <ul class="unstyled utf_footer_social">
                        <li><a title="Facebook" href="#"><i class="fa-brands fa-facebook"></i></a></li>
                        <li><a title="Twitter" href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a title="Google+" href="#"><i class="fa-brands fa-google-plus"></i></a></li>
                        <li><a title="Linkdin" href="#"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a title="Skype" href="#"><i class="fa-brands fa-skype"></i></a></li>
                        <li><a title="Skype" href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-sm-12 col-xs-12 footer-widget widget-categories">
                    <h3 class="widget-title">Popular Categories</h3>
                    <ul>
                        @php
                            $categorys = \App\Models\Category::where('status',1)->get()

                        @endphp
                        @foreach ($categorys as $category)
                            @if($category ->parent_id == 0 )
                                <li>
                                    <i class="fa fa-angle-double-right"></i><a href="#"><span
                                        class="catTitle">{{ $category ->name}}</span>
                                        @php
                                            $news_category_child = DB::table('news')->join('categories','news.id_category', '=', 'categories.id')->where('news.status', 1)->where('categories.parent_id', $category ->id)->count('news.id');
                                            $news_parent = DB::table('news')->where('status', 1)->where('id_category', $category ->id)->count();
                                        @endphp
                                        @if($news_category_child == 0)
                                            <span class="catCounter"> ({{$news_parent}})</span></a>
                                        
                                        @else
                                        <span class="catCounter"> ({{$news_category_child}})</span></a>
                                        @endif
                                </li>
                            @endif
                            
                        @endforeach
                
                    </ul>
                </div>

                <div class="col-lg-4 col-sm-12 col-xs-12 footer-widget">
                    <h3 class="widget-title">Popular Post</h3>
                    <div class="utf_list_post_block">
                        <ul class="utf_list_post">
                            @php
                            $categorys = \App\Models\Category::where('status',1)->where('name', 'like', "%2022%")->first();
                            $news_populars = \App\Models\News::where('status', 1)->where('id_category', $categorys ->id)
                                                ->orderby('created_at', 'desc')->take(3)->get();
                            @endphp
                            @foreach ($news_populars as $item)
                                @php
                                    $image_url_0 = public_path("uploads/news") . '/' . $item ->image;
                                    if(!file_exists($image_url_0)) {
                                        $image_url_0 = asset('images/error.jpg');
                                    } else {
                                        $image_url_0 = asset("uploads/news") .'/' .  $item ->image;
                                    }
                                @endphp
                                <li class="clearfix">
                                    <div class="utf_post_block_style post-float clearfix">
                                        <div class="utf_post_thumb"> <a href="#"> <img class="img-fluid"
                                                    src="{{ $image_url_0 }}" alt="" />
                                            </a> </div>
                                        <div class="utf_post_content">
                                            <h2 class="utf_post_title title-small"> <a href="{{ route('singleNews', ['id' => $item ->id])}}">{{ $item->title}}</a> </h2>
                                            <div class="utf_post_meta"> <span class="utf_post_date"><i
                                                        class="fa fa-clock-o"></i> {{ date('d/m/Y', strtotime( $item->created_at)) }}</span> </div>
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
</footer>
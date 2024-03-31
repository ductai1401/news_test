<div class="utf_main_nav_area clearfix utf_sticky">
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg col">
                <div class="utf_site_nav_inner float-left">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="true" aria-label="Toggle navigation"> <span
                            class="navbar-toggler-icon"></span> </button>
                    <div id="navbarSupportedContent"
                        class="collapse navbar-collapse navbar-responsive-collapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item dropdown active">
                                <a href="#" class="nav-link"
                                    data-toggle="dropdown">  
                                
                                    <img style="width: 50px ; height: 50px; " src="{{ asset('images/Olympic-logo.jpg')}}" alt=""> </a>
                                        
                                    
                                </a>
                            </li>
                            @php
                                $olympic_games = \App\Models\Olympic::where('status', '!=', 6)->get();     

                            @endphp
                            <li class="nav-item dropdown utf_mega_dropdown"> <a href="category-style1.html" class="nav-link dropdown-toggle" data-toggle="dropdown"
                                role="button" aria-haspopup="true" aria-expanded="false">Olympic_games <i class="fa fa-angle-down"></i></a>
                                <div class="utf_dropdown_menu utf_mega_menu_content clearfix">
                                    <div class="menu-tab">
                                        <div class="row">
                                            <ul class="nav nav-tabs flex-column col-2"
                                                data-toggle="tab-hover">
                                                <li class="nav-item"> <a class="animated fadeIn active"
                                                        href="#tab-one" data-toggle="tab"> <span
                                                            class="tab-head"> <span class="tab-text-title"><i
                                                                    class="fa fa-angle-double-right"></i>
                                                                All</span> </span> </a> </li>
                                            </ul>
                                            <div class="tab-content col-10">
                                                <div class="tab-pane fade show active" id="tab-one">
                                                    <div class="row">
                                                        @foreach ($olympic_games as $olympic_game)
                                                        
                                                        @php 
                                                            $image_url = public_path("uploads/olympics/logos") . '/' . $olympic_game ->logo;
                                                            if(!file_exists($image_url)) {
                                                                $image_url = asset('images/error.jpg');
                                                            } else {
                                                                $image_url = asset("uploads/olympics/logos") .'/' . $olympic_game ->logo;
                                                            }
                                                        @endphp    
                                                        
                                                        <div class="col-md-3 text-center">
                                                            <div class="utf_post_block_style clearfix">
                                                                <div class="align-content-center"> <a
                                                                        href="#"><img class="" style="width: 120px; height: 100px"
                                                                            src="{{$image_url}}"
                                                                            alt="" /></a> </div>
                                                                <div class="utf_post_content">
                                                                    <h2 class="utf_post_title title-small"> <a
                                                                            href="{{ route('olympic_seasion',['name' => $olympic_game ->name, 'id' => $olympic_game ->id])}}">{{ $olympic_game->name}}</a> </h2>
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
                            </li>
                            <li> <a href="#">Athlates</a> </li>
                            <li class="dropdown nav-item utf_mega_dropdown"> <a href="#"
                                    class="nav-link dropdown-toggler" data-toggle="dropdown">News <i
                                        class="fa fa-angle-down"></i></a>
                                <div class="utf_dropdown_menu utf_mega_menu_content clearfix">
                                    <div class="utf_mega_menu_content_inner">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="utf_post_block_style clearfix">
                                                    <div class="utf_post_thumb"> <img class="img-fluid"
                                                            src="images/news/video/video4.jpg"
                                                            alt="" /> <a class="popup"
                                                            href="https://www.youtube.com/embed/jssO8-5qmag">
                                                            <div class="video-icon"> <i
                                                                class="fa fa-play"></i> </div>
                                                        </a>
                                                    </div>
                                                    <div class="utf_post_content">
                                                        <h2 class="utf_post_title title-small"> <a
                                                                href="#">Zhang social media pop also
                                                                known when smart innocent...</a> </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="utf_post_block_style clearfix">
                                                    <div class="utf_post_thumb"> <img class="img-fluid"
                                                            src="images/news/video/video3.jpg"
                                                            alt="" /> <a class="popup"
                                                            href="https://www.youtube.com/embed/jssO8-5qmag">
                                                            <div class="video-icon"> <i
                                                                    class="fa fa-play"></i> </div>
                                                        </a>
                                                    </div>
                                                    <div class="utf_post_content">
                                                        <h2 class="utf_post_title title-small"> <a
                                                                href="#">Zhang social media pop also
                                                                known when smart innocent...</a> </h2>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-3">
                                                <div class="utf_post_block_style clearfix">
                                                    <div class="utf_post_thumb"> <img class="img-fluid"
                                                            src="images/news/video/video2.jpg"
                                                            alt="" /> <a class="popup"
                                                            href="https://www.youtube.com/embed/jssO8-5qmag">
                                                            <div class="video-icon"> <i
                                                                    class="fa fa-play"></i> </div>
                                                        </a>
                                                    </div>
                                                    <div class="utf_post_content">
                                                        <h2 class="utf_post_title title-small"> <a
                                                                href="#">TG G6 will have dual
                                                                13-megapixel cameras...</a> </h2>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="utf_post_block_style clearfix">
                                                    <div class="utf_post_thumb"> <img class="img-fluid"
                                                            src="images/news/video/video1.jpg"
                                                            alt="" /> <a class="popup"
                                                            href="https://www.youtube.com/embed/jssO8-5qmag">
                                                            <div class="video-icon"> <i
                                                                    class="fa fa-play"></i> </div>
                                                        </a>
                                                    </div>
                                                    <div class="utf_post_content">
                                                        <h2 class="utf_post_title title-small"> <a
                                                                href="#">Zhang social media pop also
                                                                known when smart innocent...</a> </h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li> <a href="">Sports</a> </li>
                            <li class="dropdown"> <a href="#" class="dropdown-toggle"
                                    data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                                <ul class="utf_dropdown_menu" role="menu">
                                    <li class="utf_dropdown_submenu"> <a href="#."><i
                                                class="fa fa-angle-double-right"></i> Category Layouts</a>
                                        <ul class="utf_dropdown_menu">
                                            <li><a href="category-style1.html"><i
                                                        class="fa fa-angle-double-right"></i> Category Style
                                                    One</a></li>
                                            <li><a href="category-style2.html"><i
                                                        class="fa fa-angle-double-right"></i> Category Style
                                                    Two</a></li>
                                            <li><a href="category-style3.html"><i
                                                        class="fa fa-angle-double-right"></i> Category Style
                                                    Three</a></li>
                                        </ul>
                                    </li>
                                    <li class="utf_dropdown_submenu"> <a href="#."><i
                                                class="fa fa-angle-double-right"></i> Post Detail Page</a>
                                        <ul class="utf_dropdown_menu">
                                            <li><a href="single-post1.html"><i
                                                        class="fa fa-angle-double-right"></i> Single Post
                                                    One</a></li>
                                            <li><a href="single-post2.html"><i
                                                        class="fa fa-angle-double-right"></i> Single Post
                                                    Two</a></li>
                                            <li><a href="single-post3.html"><i
                                                        class="fa fa-angle-double-right"></i> Single Post
                                                    Three</a></li>
                                            <li><a href="single-post4.html"><i
                                                        class="fa fa-angle-double-right"></i> Single Post
                                                    Four</a></li>
                                            <li><a href="left-sidebar.html"><i
                                                        class="fa fa-angle-double-right"></i> Left Sidebar</a>
                                            </li>
                                            <li><a href="right-sidebar.html"><i
                                                        class="fa fa-angle-double-right"></i> Right Sidebar</a>
                                            </li>
                                            <li><a href="no-sidebar.html"><i
                                                        class="fa fa-angle-double-right"></i> No Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="utf_dropdown_submenu"> <a href="#."><i
                                                class="fa fa-angle-double-right"></i> Pages</a>
                                        <ul class="utf_dropdown_menu">
                                            <li><a href="contact.html"><i
                                                        class="fa fa-angle-double-right"></i> Contact Us</a>
                                            </li>
                                            <li><a href="404.html"><i class="fa fa-angle-double-right"></i>
                                                    404</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            {{-- <div class="utf_nav_search"> <span id="search"><i class="fa fa-search"></i></span> </div> --}}
            <div class="utf_search_block" style="display: none;">
                <input type="text" class="form-control" placeholder="Enter your keywords...">
                <span class="utf_search_close">&times;</span>
            </div>
        </div>
    </div>
</div>
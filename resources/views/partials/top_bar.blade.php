<div id="top-bar" class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                @php
                    
                @endphp
                <ul class="unstyled top-nav">
                    @if(!Auth::check())
                        <li><a href="{{ route('auth.viewLogin') }}">Login & Signup</a></li>
                    @else
                        <li><a href="{{ route('profile') }}"><i class="fa fa-fw fa-user">&nbsp;</i>{{ Auth::user()->fullname}}</a></li>
                        @if(Auth::user()->level == 1)
                            <li><a href="{{ route('admin.olympic.index') }}">Admin</a></li>
                            
                        @endif
                        <li><a href="{{ route('auth.logout') }}">Logout</a></li>
                    @endif
                    
                    
                </ul>
            </div>
            <div class="col-md-4 top-social text-lg-right text-md-center">
                <ul class="unstyled">
                    <li> <a title="Facebook" href="#"> <span class="social-icon"><i
                                    class="fa-brands fa-facebook-f"></i></span> </a> <a title="Twitter"
                            href="#">
                            <span class="social-icon"><i class="fa-brands fa-twitter"></i></span> </a> <a
                            title="Google+" href="#"> <span class="social-icon"><i
                                    class="fa-brands fa-google-plus"></i></span> </a> <a title="Linkdin"
                            href="#"> <span class="social-icon"><i class="fa-brands fa-linkedin"></i></span>
                        </a>
                    </li>
                    {{-- <li>
                        <div class="utf_nav_search"> <span id="search"><i class="fa fa-search"></i></span> </div>
                        <div class="utf_search_block" style="display: none;">
                            <input type="text" class="form-control" placeholder="Enter your keywords...">
                            <span class="utf_search_close">&times;</span> 
                        </div> 
                        <a title="Rss" href="#"> <span class="social-icon"><i
                                    class="fa-brands fa-rss"></i></span> </a> <a title="Skype" href="#">
                            <span class="social-icon"><i class="fa-brands fa-skype"></i></span> </a>
                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown"><i class="fa-regular fa-user"></i></a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="{{ asset ('images/vandongvien1.avif')}}" class="img-circle" alt="User Image" width="75px" height="75px">
                                        <div>
                                            <p><strong>Jett</strong></p>
                                            <p>Las Angeles</p>
                                        </div>
                                    </div><br>
                            <!-- Menu Body -->
                        
                                    <div class="" id="tab-one">
                                        <li class="pad-3">
                                            <a href=""><i class="fa fa-fw fa-user">&nbsp;</i> </a>
                                            <span>My Profile</span>
                                        </li><br>
                                        <li>
                                            <a href=""><i class="fa fa-fw fa-gear">&nbsp;</i></a>
                                            <span>Account Settings</span>
                                        </li><br>
                                        <li>
                                            <a href=""><i class="fa-solid fa-clock-rotate-left">&nbsp;</i></a>
                                            <span>History</span>
                                        </li><br>
                                        <li>
                                            <a href=""><i class="fa-solid fa-right-from-bracket">&nbsp;</i></a>
                                            <span>Logout</span>
                                        </li>
                                    </div>

                            </li> --}}
                        
                        </ul>
                    </li> 
                    
                </ul>
            </div>
        </div>
    </div>
</div>

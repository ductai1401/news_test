<div id="top-bar" class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <ul class="unstyled top-nav">
                    <li><a href="{{ route('auth.viewLogin')}}">Login & Signup</a></li>
                    <li><a href="{{ route('admin.dashboard')}}">Admin</a></li>
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
                        <a title="Rss" href="#"> <span class="social-icon"><i
                                    class="fa fa-rss"></i></span> </a> <a title="Skype" href="#">
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
                                    </li><br>
                                    <!-- Menu Body -->
                                    <div class="menu-body">
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

                                </ul>
                            </li>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
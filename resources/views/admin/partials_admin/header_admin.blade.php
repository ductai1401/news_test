<header class="header">
    <nav class="navbar navbar-static-top">
        <a class='logo' href='{{ route('index')}}'>
            <!-- Add the class icon to your logo image or logo icon to add the margining -->
            <img src="{{ asset('images/olympic-symbol-clipart-9.jpg') }}" width="91px" height="43px" alt="image not found">
        </a>
        <!-- Header Navbar: style can be found in header-->
        <!-- Sidebar toggle button-->
        <!-- Sidebar toggle button-->
        <div>
            <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button"> <i class="fa fa-fw fa-navicon"></i>
            </a>
        </div>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                
                <!-- User Account: style can be found in dropdown-->
                @php 
                                                    $image_url = public_path("uploads/users") . '/' . Auth::user() ->image;
                                                    if(!file_exists($image_url)) {
                                                        $image_url = asset('images/error.jpg');
                                                    } else {
                                                        $image_url = asset("uploads/users") .'/' . Auth::user() ->image;
                                                    }
                                                @endphp
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle padding-user" data-toggle="dropdown">
                        <img src="{{ $image_url }}" width="40px" height="40px" class="img-circle pull-left"  alt="User Image">
                        <div class="riot">
                            <div>
                                {{ Auth::user()->fullname }}
                                <span>
                                    <i class="caret"></i>
                                </span>
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{ $image_url }}" class="img-circle" alt="User Image">
                            <p>{{ Auth::user()->fullname }}</p>
                        </li>
                        <!-- Menu Body -->
                        <li class="pad-3">
                            <a href="{{ route('admin.user.show', ['id' => Auth::user()-> id])}}">
                                <i class="fa fa-fw fa-user"></i> My Profile
                            </a>
                        </li>
                        <li role="presentation"></li>
                        <li role="presentation" class="divider"></li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ route('index') }}">
                                    <i class="fa fa-home" aria-hidden="true"></i> Home
                                </a>
                            </div>
                            <div class="pull-right">
                                <a href='{{ route('auth.logout') }}'>
                                    <i class="fa fa-fw fa-sign-out"></i> Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
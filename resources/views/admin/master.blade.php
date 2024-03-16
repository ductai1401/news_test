
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin/partials_admin/head_admin');
</head>

<body>
    <div class="se-pre-con"></div>
    <!-- header logo: style can be found in header-->
    @include('admin/partials_admin/header_admin');
    <div class="wrapper row-offcanvas row-offcanvas-left">
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
                @include('admin/partials_admin/sidebar_admin');
            <!-- /.sidebar -->
        </aside>
        <aside class="right-side">
            <section class="content-header">
                <!--section starts-->
                <h2>News</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href='/fitness/'>
                            <i class="fa fa-fw fa-home"></i> Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
                    <li>
                        <a href='/fitness/news'>News</a>
                    </li>
                </ol>
            </section>
            <!-- Content Header (Page header) -->
            <!--section ends-->
            
            <!-- /#right -->
            <!-- /.content -->
            @yield('content')
        </aside>
    </div>
    @include('admin/partials_admin/foot_admin');
</body>

</html>

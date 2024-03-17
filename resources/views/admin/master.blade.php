
<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin/partials_admin/head_admin')
</head>

<body>
    
    @include('admin/partials_admin/header_admin')
        <aside class="left-side sidebar-offcanvas">
            <!-- sidebar: style can be found in sidebar-->
                @include('admin/partials_admin/sidebar_admin')
            <!-- /.sidebar -->
        </aside>
        <aside class="right-side">
            
            <!-- Content Header (Page header) -->
            <!--section ends-->
            
            <!-- /#right -->
            <!-- /.content -->
            @yield('content')
        </aside>
    </div>
    @include('admin/partials_admin/foot_admin')
</body>

</html>

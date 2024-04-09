
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
            @if (Session::has('success'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                {{ Session::get('success') }}
            </div>
            @endif
            @if (Session::has('successMail'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fas fa-check"></i> Alert!</h5>
                {{ Session::get('successMail') }}
            </div>
            @endif
            <!-- Content Header (Page header) -->
            <!--section ends-->
            
            <!-- /#right -->
            <!-- /.content -->
            @yield('content')
        </aside>
    </div>

    @yield('script')
    @include('admin/partials_admin/foot_admin')
</body>

</html>

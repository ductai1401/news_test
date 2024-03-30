<meta charset="UTF-8">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->

    <link type="text/css" href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('admin/css/custom_css/metisMenu.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('admin/css/user.css') }}" rel="stylesheet" />
    

    <!-- Date picker -->
    <link href="{{ asset('vendors/air-datepicker-master/dist/css/datepicker.min.css') }}" rel="stylesheet" type="text/css">
    <!-- end of global css -->
    <!-- page level css -->
    <link type="text/css" href="{{ asset('admin/vendors/jquery-circliful/css/jquery.circliful.css') }}" rel="stylesheet">
    <!-- <link rel="stylesheet" type="text/css" href="vendors/jquery-plugin-circliful-master/css/jquery.circliful.css"> -->
    <link type="text/css" href="{{ asset('admin/vendors/progressbar/css/bootstrap-progressbar.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('admin/vendors/fullcalendar/css/fullcalendar.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('admin/vendors/select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('admin/css/custom_css/calendar_custom.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('admin/vendors/sweetalert/dist/sweetalert2.css') }}" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/vendors/nvd3chart/nv.d3.min.css') }}">
    <link type="text/css" href="{{ asset('admin/css/custom_css/fitness.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('admin/css/custom_css/panel.css') }}" rel="stylesheet" />
    <link type="text/css" href="{{ asset('admin/css/custom_css/admin_dashboard.css') }}" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('admin/vendors//summernote/summernote-bs4.min.css')}}">

    <!-- end of page level css -->

    @stack('css')
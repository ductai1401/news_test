<!DOCTYPE html>
<html>

<head>
    <title>404 | Fit2Go Admin Template</title>
<link rel="shortcut icon" href="favicon.ico" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- global level css -->
    <link href="{{ asset('admin/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- end of global css-->
    <!-- page level styles-->
    <link href="{{ asset('default/css/custom_css/404.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="container">
        <div class="col-md-8 content text-center">
            <a href='#'><img src="{{ asset('images/404.png')}}" class="img-responsive animated bounceInLeft rotate" alt="image not found"></a>
        </div>
        <div class="col-md-4 text-center page_alignment">
            <h1>404 ERROR</h1>
            <a class='btn btn-primary btn-lg button-alignments' href='{{route('admin.olympic.index')}}'>Home</a>
        </div>
    </div>
    <!-- global js -->
    <script src="{{ asset('admin/js/jquery.min.js')}}" type="text/javascript"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js')}}" type="text/javascript"></script>
    <!-- end of global js -->
</body>

</html>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="author" content="">
<meta name="theme-color" content="#ec0000">
<meta name="description" content="News Magazine HTML Template">
<meta name="keywords" content="Article, Blog, Business, Fashion, Magazine, Music, News, News Magazine, Newspaper, Politics, Travel">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>

<!--Favicon-->
<link rel="icon" href="images/favicon.png" type="image/x-icon">

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('default/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{ asset('default/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('default/css/responsive.css')}}">
<link rel="stylesheet" href="{{ asset('default/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{ asset('default/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{ asset('default/css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="{{ asset('default/css/colorbox.css')}}">
<link rel="stylesheet" href="{{ asset('default/css/topbar.css')}}">
<link type="text/css" href="{{ asset('admin/css/user.css') }}" rel="stylesheet" />



<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Nunito:300,400,500,600,700,800&display=swap" rel="stylesheet"> 
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,500,600,700,800&display=swap" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
{{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}

@stack('css')
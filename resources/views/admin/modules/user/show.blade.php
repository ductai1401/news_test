@extends('admin/master')

@section('action','Profile Users')
@section('module', 'User')
@section('heigh',' 924px')

@section('content')

<section class="content-header">
    <!--section starts-->
    <ol class="breadcrumb">
        <li>
            <a href='#'>
                <i class="fa fa-fw fa-home"></i> 
            </a>
        </li>
        <li>
            <a href='{{ route('admin.user.index') }}'>@yield('module')</a>
        </li>
        <li>
            <a href='{{ route('admin.user.show', ['id' => $user ->id]) }}'>@yield('action')</a>
        </li>
    </ol>
</section>

{{-- <div class="container-fluid">
    <div class="row">
        <div class="col-md-4 section1">
            @php 
                                $image_url = public_path("uploads/countrys") . '/' . $user ->image;
                                if(!file_exists($image_url)) {
                                    $image_url = asset('images/error.jpg');
                                } else {
                                    $image_url = asset("uploads/countrys") .'/' . $user ->image;
                                }
                            @endphp
            <div class="section1-img"><img src="{{ $image_url }}" alt="" class="userimg"></div>
            
            <h1>{{ $user ->fullname}}</h1>

            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
            
            <div class="section1-link">
                <ul>
                    <li>
                        <button title="Facebook" href="#"><i class="fa-brands fa-facebook-f "></i></i></a> 
                        <button title="Twitter" href="#"><i class="fa-brands fa-twitter "></i></button>
                        <button title="Google+" href="#"><i class="fa-brands fa-google-plus "></i></button> 
                        <button title="Linkdin" href="#"><i class="fa-brands fa-linkedin "></i></button>
                        <button title="Skype" href="#"><i class="fa-brands fa-skype "></i> </button>
                    </li>
                </ul>
            </div>

        </div>

        <div class="col-md-7 section2">
            <table class="table">
                <thead>
                        <h2>User Details</h2>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-primary"><p>FullName</p></td>
                        <td><p>{{ $user ->fullname}}</p></td>
                    </tr>
                    <tr>
                        <td class="text-primary"><p>Email</p></td>
                        <td><p>{{ $user ->email}}</p></td>
                    </tr>
                    <tr>
                        <td class="text-primary"><p>Contact Number</p></td>
                        <td><p>{{ $user ->phone}}</p></td>
                    </tr>
                    <tr>
                        <td class="text-primary"><p>Address</p></td>
                        <td><p>{{ $user ->address}}</p></td>
                    </tr>
                    <tr>
                        <td class="text-primary"><p>Level</p></td>
                        <td><p>{{ $user ->Level == 1 ? 'Admin' : 'Member'}}</p></td>
                    </tr>
                    <tr>
                        <td class="text-primary"><p>Sta</p></td>
                        <td><p>{{ $user ->Level == 1 ? 'Admin' : 'Member'}}</p></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-12">
            <div class="panel panel-primary">
                
            </div>
        </div>
    </div>
</div>     --}}


<div class="container-fluid">
    <!--main content-->
    <div class="row">
        <div class="col-lg-12">
            <!-- Basic charts strats here-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fa fa-fw fa-file-text-o"></i> User information
                    </h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4 section1 text-center">
                                @php 
                                                    $image_url = public_path("uploads/users") . '/' . $user ->image;
                                                    if(!file_exists($image_url)) {
                                                        $image_url = asset('images/error.jpg');
                                                    } else {
                                                        $image_url = asset("uploads/users") .'/' . $user ->image;
                                                    }
                                                @endphp
                                <div class="section1-img"><img src="{{ $image_url }}" width="250px" height="250px" alt="image" class="userimg"></div>                    
                            </div>
                    
                            <div class="col-md-7 section2">
                                <table class="table table-bordered">
                                    <thead>
                                            <h2>User Details</h2>
                                    </thead>
                                    <br>
                                    <tbody>
                                        <tr>
                                            <td class="text-primary"><p>FullName</p></td>
                                            <td><p>{{ $user ->fullname}}</p></td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary"><p>Email</p></td>
                                            <td><p>{{ $user ->email}}</p></td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary"><p>Contact Number</p></td>
                                            <td><p>{{ $user ->phone}}</p></td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary"><p>Address</p></td>
                                            <td><p>{{ $user ->address}}</p></td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary"><p>Level</p></td>
                                            <td><p>{{ $user ->Level == 1 ? 'Admin' : 'Member'}}</p></td>
                                        </tr>
                                        <tr>
                                            <td class="text-primary"><p>Status</p></td>
                                            <td><p>{{ $user ->Level == 1 ? 'Admin' : 'Member'}}</p></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- col-md-6 -->
    <!--row -->
    <!--row ends-->
</div
@endsection
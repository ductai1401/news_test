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

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4 section1">
            <div class="section1-img"><img src="{{ asset ('images/vandongvien1.avif')}}" alt="" class="userimg"></div>
            
            <h1>Nataliapery</h1>

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
                        <td><p>Nataliapery</p></td>
                    </tr>
                    <tr>
                        <td class="text-primary"><p>Email</p></td>
                        <td><p>Johnpery@example.com</p></td>
                    </tr>
                    <tr>
                        <td class="text-primary"><p>Contact Number</p></td>
                        <td><p>(999) 999-9999</p></td>
                    </tr>
                    <tr>
                        <td class="text-primary"><p>Address</p></td>
                        <td><p>Sydney, Australia</p></td>
                    </tr>
                    <tr>
                        <td><p></p></td>
                        <td><p></p></td>
                    </tr>
                </tbody>
            </table>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h5 class="panel-title">User Profile</h5>
                </div>
                <div class="panel-body">
                    <div class="col-sm-4">
                        @php 
                            $image_url = public_path("uploads/users") . '/' . $user ->image;
                                if(!file_exists($image_url)) {
                                    $image_url = asset('images/error.jpg');
                                } else {
                                    $image_url = asset("uploads/users") .'/' . $user ->image;
                                }
                        @endphp
                        <div class="form-group">
                            <div class="text-center">
                                <img src="{{ $image_url }}" alt="img" width="200" height="200" class="img-bor" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <br>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>User</th>
                                        <th>Details</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td class="text-primary">FullName</td>
                                        <td>{{ $user ->fullname }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">Email</td>
                                        <td> {{ $user ->email }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">Contact Number</td>
                                        <td>{{ $user ->phone }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-primary">Address</td>
                                        <td>{{ $user ->address }}</td>
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

@endsection
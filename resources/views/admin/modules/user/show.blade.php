@extends('admin/master')

@section('action','Profile Users')
@section('module', 'User')


@section('content')

<section class="content-header">
    <!--section starts-->
    <h2>@yield('action')</h2>
    <ol class="breadcrumb">
        <li>
            <a href='{{route('admin.dashboard')}}'>
                <i class="fa fa-fw fa-home"></i> Dashboard
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
@extends('admin/master')

@section('action','Profile Users')
@section('module', 'User')

@section('content')

<section class="content-header">
    <!--section starts-->
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
            <a href='{{ route('admin.user.show', ['id' => 1]) }}'>@yield('action')</a>
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
        </div>
    </div>
</div>    

@endsection
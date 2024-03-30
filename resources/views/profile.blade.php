@extends('master')

@section('title', 'Profile')

@section('content')


<div class="container-fluid">
    <div class="all">
        <div class="row">
            <div class="col-md-4 section1">
                <div class="section1-img"><img src="{{ asset ('images/vandongvien1.avif')}}" alt="" class="userimg"></div>
                
                <h1>Nataliapery</h1>
    
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged</p>
                
    
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

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>    

@endsection
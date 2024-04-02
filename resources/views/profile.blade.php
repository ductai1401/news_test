@extends('auth.master')

@section('title', 'Profile')
@section('titlePage','Profile')

@push('css')
    {{-- <link type="text/css" href="{{ asset('admin/css/user.css') }}" rel="stylesheet" /> --}}
@endpush

@section('content')


<section class="utf_block_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-16 col-md-10 mrb-40 ">
            <div class="row ">
            <div class="col-md-3 pt-5">
                <div>
                    <ul>
                        <li>Profile</li>
                        <li>History News</li>
                        <li>Setting</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row1">
                    <div class="col-md-4 section1">
                        <div class="section1-img">
                            <img src="{{ asset ('images/vandongvien1.avif')}}" alt="" class="userimg">
                        </div>
                    </div>
                    
                            <div class="col-md-6 section2">
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
            
        </div>
        
                
      </div>
    </div>
  </section>

{{-- <div class="container p-0  mt-1">
        
</div>     --}}

@endsection
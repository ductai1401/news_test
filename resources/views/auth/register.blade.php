@extends('auth.master')
@section('title', 'Register')
@section('titlePage','Register')

@section('content')
<section class="utf_block_wrapper">
  <div class="container">
    <div class="row">
            <div class="col-lg-6 col-md-12">
                <h3>Register</h3>
                <form action="{{ route('auth.register')}}" method="post">
                  @csrf
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <input class="form-control" name="fullname" id="name" placeholder="Name*" type="text" value="{{ old('fullname') }}">
                        @error('fullname')
                            <span class="alert alert-danger">
                              <strong>{{ $message }}</strong></span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input class="form-control" placeholder="Email*" type="email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="alert alert-danger">
                              <strong>{{ $message }}</strong></span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input class="form-control" placeholder="Password*" type="text"  name="password">
                        @error('password')
                            <span class="alert alert-danger">
                              <strong>{{ $message }}</strong></span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input class="form-control" placeholder="Password_confirm*" type="text"  name="password_confirmation">
                        @error('password_confirmation')
                            <span class="alert alert-danger">
                              <strong>{{ $message }}</strong></span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input class="form-control" placeholder="Phone Number*" type="text" name="phone" value="{{ old('phone') }}">
                        @error('phone')
                            <span class="alert alert-danger">
                              <strong>{{ $message }}</strong></span>
                        @enderror
                      </div>
                    </div>				
                  </div>
                  <div class="row g-2">
                    <div class=" col-auto clearfix">
                      <button class="btn btn-primary" type="submit">Signup</button>
                    </div>
                    <div class="col-auto clearfix">
                      <a class=" btn btn-primary" href="{{route('auth.viewLogin')}}">Login</a>
                    </div>
                  </div>
                </form> 		  		  
            </div> 
          </div>      
        </div>
      </div>
    </section>
@endsection
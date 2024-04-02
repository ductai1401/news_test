
@extends('auth.master')
@section('title', 'Login')
@section('titlePage','Login')

@section('content')
<section class="utf_block_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 mrb-40">
          <h3>Login</h3>
    <form action="{{ route('auth.login') }}" method="post">
      @csrf
      <div class="row">
      <div class="col-md-12">
        <div class="form-group">
        <input id="email" placeholder="Email*" type="email" name="email" class="form-control @error('email') is-invalid @enderror">       
          @error('email')
              <span class="alert alert-danger">
                <strong>{{ $message }}</strong></span>
          @enderror
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
          <input id="password" placeholder="Password*" type="password"  name="password" class="form-control @error('password') is-invalid @enderror">
          @error('password')
              <span class="alert alert-danger">
                <strong>{{ $message }}</strong></span>
          @enderror
        </div>
      </div>                
      </div>
      <div class="row g-2">
        <div class=" col-auto clearfix">
          <button class="btn btn-primary" type="submit">Login</button>
        </div>
        <div class="col-auto clearfix">
          <a class=" btn btn-primary" href="{{route('auth.viewRegister')}}">Register</a>
        </div>
      </div>
    </form>        
      </div>
      
              
    </div>
  </div>
</section>

@endsection




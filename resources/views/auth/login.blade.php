
@extends('auth.master')
@section('title', 'Login')

@section('content')
<section class="utf_block_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 mrb-40">
          <h3>Login</h3>
      <p>Your email address will not be published. Required fields are marked <span style="color:red">*</span></p>
    <form>
      @csrf
      <div class="row">
      <div class="col-md-12">
        <div class="form-group">
        <input class="form-control" placeholder="Email*" type="email" name="email">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-group">
        <input class="form-control" placeholder="Password*" type="text"  name="password">
        </div>
      </div>                
      </div>
      <div class="clearfix">
      <button class="btn btn-primary" type="submit">Login</button>
      </div>
    </form>        
      </div>
      
              
    </div>
  </div>
</section>

@endsection




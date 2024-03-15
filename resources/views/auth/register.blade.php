@include('auth.master')
@section('title', 'Register')

@section('content')
<div class="col-lg-6 col-md-12">
    <h3>Register</h3>
      <p>Your email address will not be published. Required fields are marked <span style="color:red">*</span></p>
    <form action="{{ route('auth.register')}}" method="post">
      @csrf
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <input class="form-control" name="name" id="name" placeholder="Name*" type="text" >
          </div>
        </div>
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
        <div class="col-md-12">
          <div class="form-group">
            <input class="form-control" placeholder="Password_confirm*" type="text"  name="Password_confirmation">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <input class="form-control" placeholder="Phone Number*" type="text" name="phone">
          </div>
        </div>				
      </div>
      <div class="clearfix">
        <button class="btn btn-primary" type="submit">Signup</button>
      </div>
    </form> 		  		  
</div> 

@endsection
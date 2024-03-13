
<!DOCTYPE html>
<html lang="en">
    @include('partials.head');
<body>

<!-- Start Pre Loader -->
<div id="preloader">
  <div id="ctn-preloader" class="ctn-preloader">
    <div class="animation-preloader">
      <div class="spinner"></div>
      <div class="txt-loading"> 
          <span data-text-preloader="A" class="letters-loading">A</span> 
          <span data-text-preloader="L" class="letters-loading">L</span> 
          <span data-text-preloader="T" class="letters-loading">T</span> 
          <span data-text-preloader="R" class="letters-loading">R</span> 
          <span data-text-preloader="O" class="letters-loading">O</span> 
		  <span data-text-preloader="Z" class="letters-loading">Z</span> 
		  <span data-text-preloader="&nbsp;" class="letters-loading">&nbsp;</span> 
          <span data-text-preloader="N" class="letters-loading">N</span> 
          <span data-text-preloader="E" class="letters-loading">E</span>
		  <span data-text-preloader="W" class="letters-loading">W</span>
		  <span data-text-preloader="S" class="letters-loading">S</span>	
      </div>
    </div>
    <div class="loader">
      <div class="row">
        <div class="col-3 loader-section section-left">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader-section section-left">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader-section section-right">
          <div class="bg"></div>
        </div>
        <div class="col-3 loader-section section-right">
          <div class="bg"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Pre Loader -->

<div class="body-inner"> 
  <!-- Topbar Start --> 
        @include('partials.top_bar');
  <!-- Topbar End --> 
  
  <!-- Header start -->

  <!-- Header End -->
  
  <!-- Main Nav Start -->  
        @include('partials.main_nav');
  <!-- Menu wrapper end -->
  
  <!-- Page Title Start -->
  <div class="page-title">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <ul class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li>Login</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- Page title end -->
  
  <!-- 1rd Block Wrapper Start -->
  <section class="utf_block_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 mrb-40">
            <h3>Login</h3>
		    <p>Your email address will not be published. Required fields are marked <span style="color:red">*</span></p>
			<form action="{{ route('auth.login')}}" method="post">
        @csrf
			  <div class="row">
				<div class="col-md-12">
				  <div class="form-group">
					<input class="form-control" placeholder="Email*" type="email" name="email">
				  </div>
				</div>
				<div class="col-md-12">
				  <div class="form-group">
					<input class="form-control" placeholder="Password*" type="text" name="password">
				  </div>
				</div>                
			  </div>
			  <div class="clearfix">
				<button class="btn btn-primary" type="submit">Login</button>
			  </div>
			</form>        
        </div>
        
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
      </div>
    </div>
  </section>
  <!-- 1rd Block Wrapper End -->
  
<!-- Footer Start -->  
    @include('partials.footer');
<!-- Footer End -->
  
<!-- Copyright Start -->   
<div class="copyright">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 text-center">
          <div class="utf_copyright_info"> <span>Copyright © 2024 All Rights Reserved.</span> </div>
        </div>        
      </div>      
      <div id="back-to-top" class="back-to-top">
        <button class="btn btn-primary" title="Back to Top"> <i class="fa fa-angle-up"></i> </button>
      </div>
    </div>
</div>
<!-- Copyright End -->
</div>
  
<!-- Javascript Files --> 
    @include('partials.foot');
</body>
</html>
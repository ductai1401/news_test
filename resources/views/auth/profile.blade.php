@extends('auth.master')

@section('title', 'Profile')

@section('content')
<div id="content" class="col-md-12">
          








    <!-- page header -->
    <div class="pageheader">
      

      <h2><i class="fa fa-user" style="line-height: 46px;padding-left: 0;"></i> Profile <span>// Place subtitle here...</span></h2>
      

      <div class="breadcrumbs">
        <ol class="breadcrumb">
          <li>You are here</li>
          <li><a href="index.html">Minimal</a></li>
          <li><a href="#">Example Pages</a></li>
          <li class="active">Profile</li>
        </ol>
      </div>


    </div>
    <!-- /page header -->
    
    




    <!-- content main container -->
    <div class="main">        



     <!-- row -->
      <div class="row">




        <!-- col 4 -->
        <div class="col-md-4">
        

          <!-- tile -->
          <section class="tile transparent">




            <!-- tile header -->
            <div class="tile-header nopadding">               
              <div class="controls">
                <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                <a href="#" class="remove"><i class="fa fa-times"></i></a>
              </div>
            </div>
            <!-- /tile header -->

            <!-- tile widget -->
            <div class="tile-widget color transparent-white rounded-top-corners">
              
              <div class="user-card">
                <h3><strong>John</strong> Douey</h3>
                <ul class="profile-controls inline">
                  <li class="mailto"><a href="#"><i class="fa fa-envelope"></i> Send Email</a></li>
                  <li class="avatar"><img src="assets/images/profile-photo.jpg" alt class="img-circle profile-photo"></li>
                  <li class="callto" id="make-call">
                    <a href="#">
                      <span class="call">Call <i class="fa fa-phone"></i></span>
                      <span class="calling">Calling... <i class="fa fa-microphone"></i></span>
                    </a>
                  </li>
                </ul>
                <h5>Chief Designer</h5>
                <div class="social-networks">
                  <a href="#"><i class="fa fa-facebook-square"></i></a>
                  <a href="#"><i class="fa fa-google-plus-square"></i></a>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                  <a href="#"><i class="fa fa-github-square"></i></a>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                </div>
              </div>                       

            </div>
            <!-- /tile widget -->

            <!-- tile body -->
            <div class="tile-body color transparent-black textured rounded-bottom-corners">
              <ul class="inline divided social-feed">
                <li>
                  <h4>126</h4>
                  Tweets
                </li>
                <li>
                  <h4>324</h4>
                  Following
                </li>
                <li>
                  <h4>1254</h4>
                  Followers
                </li>
              </ul>
            </div>
            <!-- /tile body -->
          


          </section>
          <!-- /tile -->



          <!-- tile -->
          <section class="tile color transparent-black">




            <!-- tile header -->
            <div class="tile-header">
            <h1><strong>About</strong> Me</h1>               
              <div class="controls">
                <a href="#" class="minimize"><i class="fa fa-chevron-down"></i></a>
                <a href="#" class="refresh"><i class="fa fa-refresh"></i></a>
                <a href="#" class="remove"><i class="fa fa-times"></i></a>
              </div>
            </div>
            <!-- /tile header -->


            <!-- tile body -->
            <div class="tile-body padding-top-0">
              <p class="about-me">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.</p>
            </div>
            <!-- /tile body -->
          


          </section>
          <!-- /tile -->

      </div>
      <!-- /row -->

    </div>  
    <!-- /content container -->






  </div>
@endsection
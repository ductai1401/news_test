@extends('auth.master')

@section('title', 'Profile')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-2 p-5">
      <ul><h4>Categories</h4>
        <a href="#"><li class="mt-5">News</li></a>
        <a href="#"><li>Sports</li></a>
        <a href="#"><li>Diving</li></a>
        <a href="#"><li>Judo</li></a>
      </ul>
    </div>
  
    <div class="col-4 p-5" style="text-align: center; border: solid #dcdcdc 1px; border-top:none;">
      <h4>Profile</h4><br>
      <img src="{{ asset('images/olympic_avatar.jpg') }}" alt="" width="250px" height="250px" style="border-radius: 50%">
      <br>
      <h4><strong>Khusan Akhmedov</strong></h4>
      <p>Sport name</p>
  
      <div class="section2-status" >
        <div>
          <h5>21</h5>
          <p>Status</p>
        </div>
        <div>
          <h5>21</h5>
          <p>Status</p>
        </div>
        <div>
          <h5>21</h5>
          <p>Status</p>
        </div>
      </div><br>
  
      <button class="btn btn-secondary mb-5">Upload new avatar</button>
  
      <h4>Uzabekistan</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam ipsam qui molestiae possimus incidunt cum, omnis sed nam, recusandae laboriosam modi commodi! Id ab beatae dolorem officiis animi unde incidunt?</p>
    
    </div>
  
  
    <div class="col-6 pt-4">
      
      
  
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">FIRST NAME</label>
          <input type="text" class="form-control" aria-describedby="first name" placeholder="Enter first name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">LAST NAME</label>
          <input type="text" class="form-control" aria-describedby="last name" placeholder="Enter last name">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">TITLE</label>
          <input type="text" class="form-control" aria-describedby="title" placeholder="Enter title">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">EMAIL</label>
          <input type="text" class="form-control" aria-describedby="email" placeholder="Enter emial">
        </div>
        <h4>ABOUT ME</h4>
        <hr>
        <div class="form-group">
          <textarea class="form-control" rows="3"></textarea>
        </div>
      </form>
    </div>
  </div>
</div>

  <style>
    .section2-status{
      display: flex; 
      justify-content: center;
    }

    .section2-status div{
      align-items: center;
      width: 250px; 
    }

    .section2-status div:nth-child(2){
      border-left: solid #dcdcdc 1px;
border-right: solid #dcdcdc 1px;

    }

    li{
      height: 40px;
      margin-left: 10px
    }
  </style>
  

@endsection
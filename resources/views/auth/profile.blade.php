@extends('auth.master')

@section('title', 'Profile')

@section('content')

<section>
  <div class="container">
    <div class="row">
      <div class="col-2 p-5">
        <ul class="li1">
          <a href="#"><li class="mt-5">Profile</li></a>
          <a href="#"><li>Command</li></a>
          <a href="#"><li>Setting</li></a>
        </ul>
      </div>
      @php
          
      @endphp
      <div class="col-4 p-5" style="text-align: center; border: solid #dcdcdc 1px; border-top:none;">
        <h4>Profile</h4><br>

        @php 
          
        if(empty(Auth::user() ->imge)){
          $image_url = asset('images/user_defaults.png');
        }else{
          $image_url = public_path("uploads/users") . '/' . Auth::user() ->image;
            if(!file_exists($image_url)) {
              $image_url = asset('images/user_defaults.png');
            } else {
                $image_url = asset("uploads/users") .'/' . Auth::user() ->image;
            }
        }
            
        @endphp 
        <img src="{{$image_url }}" alt="" width="250px" height="250px" style="border-radius: 50%">
        <br>
        <br>
        <h4><strong>{{ Auth::user()->fullname}}</strong></h4>
      
        {{-- <div class="section2-status" >
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
      --}}
      </div>
    
    
      <div class="col-6 pt-4">
        
        
    
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Full Name</label>
            <div>
                <span>
                  <h4 style="text-transform: uppercase">
                    {{ Auth::user()->fullname}}
                  </h4>
                
                </span>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <div>
              <span>
                <h4>
                  {{ Auth::user()->email}}
                </h4>
              
              </span>
          </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Phone</label>
            <div>
              <span>
                <h4>
                  {{ Auth::user()->phone}}
                </h4>
              
              </span>
          </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <div>
              <span>
                <h4>
                  {{ Auth::user()->address}}
                </h4>
              </span>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <div>
              <span>
                <h4>
                  {{ Auth::user()->address}}
                </h4>
              </span>
          </div>
          </div>
          <h4 class="mb-0">Command</h4>
          <hr class="mt-0 ">
          <div class="form-group">
            <textarea class="form-control" rows="3"></textarea>
          </div>
        </form>
      </div>
    </div>
  </div>

</section>
  
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

    .li1 li{
      height: 40px;
      margin-left: 10px
    }
  </style>
  

@endsection
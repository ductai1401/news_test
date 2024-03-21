@extends('master')

@section('title', 'Sport')



@section('content')


    <section class="utf_featured_post_area pt-4 no-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pad-l">
                    <div class="utf_post_overaly_style contentTop">
                        <div class="utf_post_thumb"> <img class="img-fluid" style="height: 400px" src="{{ asset('images/logo_sport.jpg') }}"
                                alt="" /></div>
                        <div class="utf_post_content_n">
                            <h2 class="utf_post_title font_s"> Sports</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="utf_featured_post_area pt-4 no-padding">
        <div class="container">
            <div class="row">
                <div class="utf_post_content">
                    <h1 class="widget-title ">Select an Sports</h1>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="nav-item">
                        <ul class="utf_list_post">
                            <li>1</li>
                            <li>2</li>
                            <li>3</li>
                            <li>4</li>
                        </ul>
                    </div>                
                </div>

                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        <div class="container">
                            <form action="">
                                <select>
                                    <option value="0">------sport------</option>
                                    @for($i = 1; $i < 7; $i++)
                                        <option value="{{$i}}">sport {{$i}}</option>
                                    @endfor
                                </select>
                            </form>
                        </div>

                        <div class="container">
                            <div class="tab-content">
                                <ul class="navigation">
                                    <table class="table table-bordered text-center" id="sports">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Id</th>
                                                <th class="text-center">country</th>
                                                <th class="text-center">Image</th>
                                                <th class="text-center">rank</th>
                                                <th class="text-center">Details</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @for($i = 1 ; $i <= 3; $i++) 
                                            <tr>
                                                <td>1</td>
                                                <td>Thailan</td>
                                                <td><img src="" alt="Sport_image"></td>
                                                <td>#1</td>
                                                <td>
                                                    <a href="#" class="dropdown-toggle"  data-toggle="collapse" data-target="#athlete" aria-expanded="false"><img src="" alt="">
                                                        Details 
                                                        <span><i class="fa-solid fa-chevron-down"></i></span>
                                                    </a>
                                                    <ul id="athlete" class="sub-menu collapse">
                                                        <li>
                                                            <a href='#'>
                                                                athlete{{$i}}
                                                            </a>
                                                        </li>
                                                    </ul>
                                               </td>
                
                                            </tr>
                                            
                                            @endfor
                                        </tbody>
                                    </table>

                                   
                               
                                </ul>
                            

                            
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </section>


    <div class="utf_ad_content_area text-center utf_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12"> <img class="img-fluid" src="images/banner-ads/ad-content-two.png" alt="" />
                </div>
            </div>
        </div>
    </div>
@endsection

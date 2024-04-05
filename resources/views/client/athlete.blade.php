@extends('master')

@section('title', 'Athlete')

@push('css')

    <link type="text/css" href="{{ asset('default/css/athlete.css') }}" rel="stylesheet" />
@endpush

@section('content')

    <div class="container mt-3 ath">
        <div class="row ml-1 mr-1 athall">
            <div class="col-3 mb-3 athsection1">
                <div class="detail1 mt-3">
                    <div class="detail1a">
                        @php 
                                $image_url = public_path("uploads/countrys") . '/' . $athlete ->country ->flag;
                                if(!file_exists($image_url)) {
                                    $image_url = asset('images/error.jpg');
                                } else {
                                    $image_url = asset("uploads/countrys") .'/' . $athlete ->country ->flag;
                                }
                        @endphp
                        <img src="{{ $image_url  }}"  width="40" height="30" alt="flag" style="border:#dcdcdc solid 1px;">
                        <div class="ml-3">
                            <p class="m-0" style="color: #696969">Team</p>
                            <p class="m-0" style="font-size: 16px"> <strong>{{ $athlete ->country ->name}}</strong></p>
                        </div>
                    </div>
                    <div style="color: #696969">
                        <p class="mb-0 mt-3">Sport</p>
                        @php
                            $sport_parent = \App\Models\Sport::where('id', $athlete ->sports ->parent_id)->first();
                        @endphp
                        <p><strong>{{ $sport_parent ->name}}</strong></p>
                    </div>
                </div>
                @php    

                            if(empty($athlete ->image)){

                                 $image_url = asset('images/image_athlete_defaults.png');
                            } else {
                                $image_url = public_path("uploads/athletes") . '/' . $athlete ->image;
                                if(!file_exists($image_url)) {
                                    $image_url = asset('images/image_athlete_defaults.png');
                                } else {
                                    $image_url = asset("uploads/athletes") .'/' . $athlete ->image;
                                }
                            }
                                
                            @endphp
                <div class="divimg"><img src="{{ $image_url }}" alt="" width="200" height="200" class="mt-5 mainimg"></div>
                <span style="font-size: 25px; display:flex; justify-content: center;" class="h21"><strong> {{ $athlete ->name }} </strong></span>

                <ul class="mt-5">
                    <a href="#sc1"><li><h4>Olympic Results</h4></li></a>
                    <a href="#sc3"><li><h4>Latest News</h4></li></a>
                    <a href="#sc4"><li><h4>Replays</h4></li></a>
                    <a href="#sc4"><li><h4>Result</h4></li></a>

                </ul>
            </div>

            <div class="col-9 p-0">
                <div class="ml-3">
                    <div class="athsection2 mb-3" id="sc1">
                        <h3 class="utf_block_title"><span>Olympic Results</span></h3>
                        <table class="table m-3 mt-5 athtable" style="width: 1400px" >
                            <tr>
                                <td>Olympic Medals</td>
                                <td>
@php
                                    if($gold){                                          
                                        echo '<td>' .  $gold . ' Gold</td>';
                                    }else{
                                        echo "<td> 0 Gold </td>";
                                    }
                                    if($silver){
                                        echo '<td>' .  $silver . ' Silver</td>';
                                    }
                                    else{
                                        echo "<td> 0 Silver </td>";
                                    }
                                    if($bronze){
                                        echo '<td>' .  $bronze . 'Bronze</td>';
                                    }
                                    else{
                                        echo "<td> 0 Bronze </td>";
                                    }
                                    @endphp
                                </td>
                                
                            </tr>
                            <tr>
                                <td>Games Participations</td>
                                <td></td>
                                <td></td>
                                <td>{{ $Games_Participations }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>First Olympic Games</td>
                                <td></td>
                                <td></td>
                                <td>{{ $first_olympic_Games}}</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>

                    {{-- <div class="athsection2 mb-3" id="sc2">
                        <h3 class="p-3 mb-3">Biography</h3>
                    </div> --}}

                    <div class="athsection2 mb-3" id="sc3" >
                        <h3 class="utf_block_title"><span>Latest News</span></h3>
                            <div class="container">
                                <div class="utf_latest_news block color-red">                                   
                                    <div id="utf_latest_news_slide" class="owl-carousel owl-theme utf_latest_news_slide">
                                        @for($i = 1; $i <= 4; $i++)
                                        <div class="item">
                                            <ul class="utf_list_post">
                                                <li class="clearfix">
                                                    <div class="utf_post_block_style clearfix">
                                                        <div class="utf_post_thumb"> <a href="#"><img class="img-fluid"
                                                                    src="https://th.bing.com/th/id/OIP.Yh8OW6zO_rwiLkurqJ43QQHaEo?rs=1&pid=ImgDetMain" alt="" /></a>
                                                        </div>
                                                        <a class="utf_post_cat" href="#">Travel</a>
                                                        <div class="utf_post_content">
                                                            <h2 class="utf_post_title title-medium"> <a href="#">Zhang social
                                                                    media pop also known when smart innocent...</a> </h2>
                                                            <div class="utf_post_meta"> <span class="utf_post_author"><i
                                                                        class="fa fa-user"></i> <a href="#">John Wick</a></span>
                                                                <span class="utf_post_date"><i class="fa fa-clock-o"></i> 25 Jan,
                                                                    2022</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    @endfor 
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="athsection2 mb-3" id="sc4">
                        <h3 class="utf_block_title"><span>Replays</span></h3>
                            <div class="container">
                                <div class="utf_latest_news block color-red">                                   
                                    <div id="utf_latest_news_slide" class="owl-carousel owl-theme utf_latest_news_slide">
                                        @foreach($medals as $medal)
                                        <div class="item">
                                            {{-- <video  width="760" height="240" controls 
                                                src="{{ $medal ->video}}" type="video/webm" translate="yes">
                                            </video> --}}
                                            
                                                {!!  $medal ->video !!}
                                            

                                        </div>
                                    @endforeach 
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="athsection2 mb-3" id="sc4">
                        <h3 class="utf_block_title"><span>Results</span></h3>
                        <div class="container"  style="padding:  0px;" >
                            <table class="table m-3 mt-5 athtable">
                                <thead>
                                    
                                        <td></td>
                                        <td>Rank</td>
                                        <td>Sport</td>
                                        <td>Event</td>

        
                                </thead>
                               @foreach( $olympic_medals as $olympic_medal)
                                <tr>
                                    
                                    <td>
                                        {{-- Image seasion olympic --}}
                                        
                                        @php
                                            $image_logo_url = public_path("uploads/olympics/logos") . '/' . $olympic_medal ->olympic ->logo;
                                            if(!file_exists($image_logo_url)) {
                                                $image_logo_url = asset('images/image_country_olympic_defaults.jpg');
                                            } else {
                                                $image_logo_url = asset("uploads/olympics/logos") .'/' . $olympic_medal ->olympic ->logo;
                                            }

                                            $image_country_url = public_path("uploads/countrys") . '/' . $olympic_medal ->country ->flag;
                                            if(!file_exists($image_country_url)) {
                                                $image_country_url = asset('images/image_country_olympic_defaults.jpg');
                                            } else {
                                                $image_country_url = asset("uploads/countrys") .'/' . $olympic_medal ->country ->flag;
                                            }
                                        @endphp
                                        <div><img src="{{ $image_logo_url }}" alt="" width="70" height="70" style="border-radius: 5px"><span><strong>{{ $olympic_medal ->olympic ->name}}</strong></span></div>
                                        <br>
                                        
                                        {{-- Image country flag  --}}
                                        <div>
                                            <span class="ml-3"> Team &nbsp; </span>
                                            <img src="{{ $image_country_url }}" alt="" width="40" height="40" style="border-radius: 50%">
                                            <span> {{ $olympic_medal ->country ->name}}</span>
                                        </div>
                                        
                                    </td>
                                    <td>
                                        <p class="mt-3">{{ $olympic_medal ->posision }}</p>
                                       
                                    </td>
                                    <td>
                                        <p class="mt-3">{{  $sport_parent ->name}}</p>
                                        
                                    </td>
                                    <td>
                                        <p class="mt-3">{{ $olympic_medal ->sport ->name}}</p>
                                        
                                    </td>            	                        
                                                                      
                                </tr>
                                @endforeach 
                               
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
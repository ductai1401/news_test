@extends('master')

@section('title', 'Sport')

@section('content')
    <section class="utf_featured_post_area pt-4 no-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pad-l">
                    <div class="utf_post_overaly_style contentTop">
                        <div class="utf_post_thumb"> <img class="img-fluid" style="height: 400px" src="{{ asset('images/medal.jpeg') }}"
                                alt="" /></div>
                        <div class="utf_post_content_n">
                            <h2 class="utf_post_title font_s"></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>


    <section class="utf_featured_post_area pt-4 no-padding">
        <div class="container">
            <div class="row align-items-baseline">
                <div class="col-4 h21" >
                    <span>{{ $sport ->name}}</span>
                </div>

                <div class="col-8 " >
                    <div>
                        {!! $sport ->details !!}
                    </div>
                    
                </div>
            </div>
        </div>


        <div class="container">
        <div>
            <div class="row">
                
                <div class="container">
                    <form action="" class="sport-select">
                        
                        <select class="form-select">
                            <option value="0">Sport</option> 
                                <option></option>

                        </select>

                        <select class="form-select">
                            <option value="0">Country</option> 
                                <option></option>

                        </select>
                    
                    </form>
                </div>

                <div class="container">
                    <div class="tab-content">
                            <table class="table table-bordered table-striped text-center" id="countrys">
                                <thead class="thead-dark">
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Sport</th>
                                        <th class="text-center">Country</th>
                                        <th class="text-center">Rank</th>
                                        <th class="text-center">Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sport_medals as $sport_medal)
                                    @php 
                                        $image_url = public_path("uploads/countrys") . '/' . $sport_medal ->country ->flag;
                                        if(!file_exists($image_url)) {
                                            $image_url = asset('images/error.jpg');
                                        } else {
                                            $image_url = asset("uploads/countrys") .'/' . $sport_medal ->country ->flag;
                                        }
                                    @endphp 
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $sport_medal ->sport ->name}}</td>

                                        <td>
                                            <img src="{{ $image_url }}" alt="Sport_image" width="40px" height="40px">{{$sport_medal ->country ->name}}
                                        </td>
                                        <td>{{ $sport_medal ->posision }}</td>
                                        <td>
                                            <a href="{{ route('athlete',['id' =>  $sport_medal ->sport ->id])}}">Detail</a>
                                        </td>
        
                                    </tr>
                                    
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
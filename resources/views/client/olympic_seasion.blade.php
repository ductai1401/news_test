@extends('master')

@section('title', $olympic->name)

@section('content')
    <section class="pt-0 pb-5">

        <div class="container">
            <div class="utf_post_overaly_style contentTop">
                <div class="utf_post_thumb"> <img class="img-fluid" style="height: 800px" src="{{ asset('images/olympic_2022.jpg') }}"
                        alt="" />
                    </div>
                <div class="utf_post_content_n">
                    <div class="season-section1">
                        <div>
                            @php 
                            $image_url = public_path("uploads/olympics/logos") . '/' . $olympic ->logo;
                            if(!file_exists($image_url)) {
                                $image_url = asset('images/error.jpg');
                            } else {
                                $image_url = asset("uploads/olympics/logos") .'/' . $olympic ->logo;
                            }
                        @endphp    
                            <div>
                                <img class="img-thumbnail bg-white border-0" src="{{ $image_url }}" alt="logo">
                            </div>
                        </div>
                        <div class="col-lg-4 d-flex flex-md-column justify-content-end "  style="background-color: #b6a6a680; border-radius:5px; padding: 50px">
                            <h1>{{$olympic ->name}}</h1>
                            <div class="pb-bottom-10 d-flex justify-content-between ml-1 mr-1 border-bottom">
                                <span>Country</span>
                                {{$olympic ->country}}
                            </div>
                            <div class="pb-bottom-10 d-flex justify-content-between ml-1 mr-1 border-bottom">
                                <span>Athlete</span>
                                500
                                
                            </div>
                            <div class="pb-bottom-10 d-flex justify-content-between ml-1 mr-1 border-bottom" >
                                <span>Teams</span>
                                40
                            </div>
                            <div class="pb-bottom-10 d-flex justify-content-between ml-1 mr-1 border-bottom">
                                <span>Events</span>
                                20
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Latest News Area Start -->
    @include('partials.latest_news')
    <!-- Latest News Area End -->

    <section class="utf_block_wrapper p-bottom-0">
        <div class="container d-flex justify-content-around">
            <div class="row">
                <div class="col-lg-3" >
                    <h1 class="h22">About the games</h1>
                </div>
            
                <section class=" col-lg-9">
                    <div class="container mt-5">
                        {!! $olympic ->details !!}
                    </div>
                </section>
            </div>
        </div>
    </section>    

    <section class="pl-4 pr-4">
        <div class="container">
            <div class="row">
                <div class="col-4 h21" >
                    <span>{{ $olympic ->name }} - Sports </span>
                </div>
                {{-- <div class="col-6 d-flex align-items-end">
                    <label class="col-md-3 control-label h21 m-0" >Sport</label>
                    <div class="input-group">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="select_align">                         
                                <select class="form-control fill_it" name="id_country">
                                    @foreach ($sports->sport as $s)
                                        <option value="{{ $s ->id }}">{{ $s ->name}}</option>
                                    @endforeach
                                    
                                   
                                </select>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div><br>

            <table class="table table-bordered table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Sport</th>
                        <th class="text-center">Image</th>
                        <th class="text-center">More Details</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sports->sport as $s)

                    
                    @if($s ->parent_id == 0)
                    @php 

                        
                            $image_url = public_path("uploads/sports") . '/' . $s ->image;
                            if(!file_exists($image_url)) {
                                $image_url = asset('images/error.jpg');
                            } else {
                                $image_url = asset("uploads/sports") .'/' . $s ->image;
                            }
                        @endphp
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        
                        <td>{{ $s ->name }}</td>
                        <td><img src="{{ $image_url }}" alt="Sport_image" width="60px" height="60px"></td>
                        <td>
                            <a href="{{ route('sport',['name' => $s->name, 'id' =>$s ->id]) }}">Detail</a>
                        </td>

                    </tr>

                    @endif
                    
                    @endforeach
                </tbody>
            </table>


        </div>



        {{-- <div class="container">
            <div class="git-sports">
                @for($i = 1; $i < 15; $i++)
                <div>
                    <a href="#"><img src="" alt=""></a>sport {{$i}}
                </div>
                @endfor
            </div>
        </div> --}}
    </section>
</section>


@endsection
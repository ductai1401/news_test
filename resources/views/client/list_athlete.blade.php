@extends('master')

@section('title', 'Athlete News')

@push('script_athlete')
<script type="text/javascript">
    $(document).ready(function() {
        $('#key').change(function() {
            
            var search = $(this).val();
            $.get("http://localhost:8000/client/getAthlete/"+search, function(data1) {
                   $('#athlete').html(data1);
            });
        });

       
    });

</script>    
@endpush

@section('content')
    <div class="container">

        <h1 class="title-athlete-list" >Athlete</h1>

        <form class="form-inline my-2 my-lg-0 search-tool-athlete" >
            @csrf
            <input class="form-control mr-sm-2" name="search" id="key" type="search" placeholder="Search" aria-label="Search" style="width:800px">
            <a href="#" class="btn btn-outline-danger search-atlete-list my-2 my-sm-0 d-flex align-items-center justify-content-center"><i class="fa-solid fa-magnifying-glass"></i></a>
        </form>
        
        <div class="grid-athlete-list mt-5" >

            <div class="card-athlete-list" id="athlete">

                {{-- Phần lặp lại --}}
                @foreach($athletes as $athlete)
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
                <a href="{{ route('athlete', ['id' => $athlete ->id])}}"><div style="text-align: center">
                    <img src="{{  $image_url }}" alt="image_athlete">
                    <h4>{{ $athlete ->name}}</h4>
                </div></a>
                @endforeach
                
            </div>
        </div>
    </div>

    <style>
        .title-athlete-list{
            display: flex;
            justify-content: center;
            text-transform: uppercase;
            margin: 70px 0px 50px 0px;
        }
        
        .card-athlete-list{
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            grid-gap: 1rem;
        }

        .card-athlete-list img{
            border-radius: 50%;
            width: 100px;
            height: 100px;
            margin-bottom: 20px;
        }

        .search-tool-athlete{
            display: flex;
            justify-content: center
        }

        .search-atlete-list{
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

    </style>
@endsection
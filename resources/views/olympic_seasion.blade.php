@extends('master')

@section('title', 'Olympic/ 2022')

@section('content')
<section class="pt-0">
    <section class="utf_block_wrapper pt-0">
        <div class="container mb-4 ">
            <div class="row d-flex justify-content-around" >
                <div class="col-lg-8 d-flex justify-content-center align-items-center">
                    <div>
                        <img class="img-thumbnail bg-white border-0" src="{{ asset('images/logo_2022.jpg')}}" alt="logo">
                    </div>
                </div>
                <div class="col-lg-4 d-flex flex-md-column justify-content-end " >
                    <h1>Beijing 2022</h1>
                    <div class="pb-bottom-10 d-flex justify-content-between ml-1 mr-1 border-bottom">
                        <span>Country</span>
                        10
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

        <div class="container" >
            <div class="row">
                <div class="col-md-12 p-0 "> <img class="img-fluid p-0" src="{{ asset('images/olympic_2022.jpg')}}"
                    alt="olympic_2022" /> </div>
            </div>
        </div>
    </section>

    <!-- Latest News Area Start -->
    @include('partials.latest_news')
    <!-- Latest News Area End -->

    <section class="utf_block_wrapper p-bottom-0">
        <div class="container d-flex justify-content-around">
            <div class="row">
                <h2 class="h2 col-lg 4 font-weight-lighter">
                    About the Games
                </h2>
                <section class=" col-lg-8">
                    <p>Having won the bid for the 2022 Olympic Winter Games on 31 July 2015, Beijing became the first city in the world to have hosted both the summer and winter editions of the Olympic Games.</p>
                    <p>With a vision of “Joyful Rendezvous upon Pure Ice and Snow,” Beijing 2022 built on the legacies of the landmark Beijing 2008 Olympic Games and encouraged 300 million people across China to embrace winter sports.</p>
                    <p>The 109 events in seven Olympic winter sports were held in the three competition zones of central Beijing, Yanqing and Zhangjiakou.</p>
    
                    <h2>Three competition zones</h2>
                    <p>Beijing hosted four snow events (snowboard big air and freestyle skiing big air, men’s and women’s), plus all the ice events (curling, ice hockey and skating), making use of the legacy venues of Beijing 2008.</p>
                    <p>Yanqing, a suburban district of Beijing (80km to the northwest) and home to the famous Badaling and Juyongguan stretches of the Great Wall, hosted the Alpine skiing and sliding (bobsleigh, skeleton and luge) events.</p>
                </section>
            </div>
        </div>
    </section>    

    <section class="pl-4 pr-4">
        <div class="container">
            <div class="row">
                <div class="col-4 h21" >
                    <span>beijing 2022</span>
                </div>
                <div class="col-6 h21">
                    Sports
                </div>
            </div>
        </div>

        <div class="container">
            <div class="git-sports">
                @for($i = 1; $i < 25; $i++)
                <div>
                    <a href=""><img src="" alt=""></a>sport {{$i}}
                </div>
                @endfor
            </div>
        </div>
    </section>
</section>


@endsection
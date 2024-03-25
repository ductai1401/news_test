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
            <div class="row">
                <div class="col-4 h21" >
                    <span>Name Sport</span>
                </div>

                <div class="col-8 " >
                    <div class="container-full">
                        <span>History
                            Acrobatic gymnastics has existed in various forms and throughout different cultures for thousands of years. Depictions of acrobatics have been discovered in Bronze Age art, along with being mentioned in Homer’s epics and included in Ancient Greek symposiums and China’s Han Dynasty harvest festivals. It also served as entertainment for European courts during the Middle Ages.
                            
                            Becoming a Discipline
                            Acrobatic gymnastics began to develop as a discipline through use of apparatus and through tumbling. Both aspects showcased the human body’s capabilities. The first competition rules for acrobatics were formed in the Soviet Union, where stadiums filled with spectators hoping to witness athletic feats, like forming giant human pyramids. The inaugural Soviet national championships were held in 1939.
                            
                            Global Evolution
                            The first international tournament for what was then named “Sport Acrobatics” was held in Warsaw in 1957, with four participating teams. The International Federation of Sports Acrobatics (IFSA) was established in 1973, with the first world championships held the following year in Moscow, featuring teams from Bulgaria, Federal Republic of Germany, Great Britain, Hungary, Poland, the Soviet Union and the United States. In 1998, the discipline was adopted by the International Gymnastics Federation once IFSA dissolved. The discipline has been known as Acrobatic Gymnastics since 2007.</span>
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
                                    @for($i = 1 ; $i <= 3; $i++) 
                                    <tr>
                                        <td>{{ $i }}</td>
                                        <td>Sport</td>
                                        <td><img src="" alt="Sport_image" width="100px" height="100px"></td>
                                        <td>{{ $i }}</td>
                                        <td>
                                            <a href="{{ route('athlete')}}">Detail</a>
                                        </td>
        
                                    </tr>
                                    
                                    @endfor
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
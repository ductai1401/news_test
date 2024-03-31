@extends('master')

@section('title', 'Athlete')

@section('content')

    <div class="container mt-3 ath">
        <div class="row ml-1 mr-1 athall">
            <div class="col-3 mb-3 athsection1">
                <div class="detail1 mt-3">
                    <div class="detail1a">
                        <img src="{{asset('images/flag/Japan.png')}}"  width="40" height="30" alt="flag" style="border:#dcdcdc solid 1px;">
                        <div class="ml-3">
                            <p class="m-0" style="color: #696969">Team</p>
                            <p class="m-0" style="font-size: 16px">Japan</p>
                        </div>
                    </div>
                    <span style="color: #696969"> Sport &#160;<strong>Figure Skating</strong></span>
                </div>

                <div class="divimg"><img src="{{asset('images/vandongvien1.avif')}}" alt="" width="200" height="200" class="mt-5 mainimg"></div>
                <span style="font-size: 25px; display:flex; justify-content: center;" class="h21"><strong> YUZURU HANYU </strong></span>

                <ul class="mt-5">
                    <a href="#sc1"><li><h4>Olympic Results</h4></li></a>
                    {{-- <a href="#sc2"><li><h4>Biography</h4></li></a> --}}
                    <a href="#sc3"><li><h4>Latest News</h4></li></a>
                    <a href="#sc4"><li><h4>Replays</h4></li></a>
                </ul>
            </div>
    
            <div class="col-9 p-0">
                <div class="ml-3">
                    <div class="athsection2 mb-3" id="sc1">
                        <h3 class="p-3">Olympic Results</h3>
                        <table class="table m-3 mt-5 athtable" style="width: 1400px" >
                            <tr>
                                <td>Olympic Medals</td>
                                <td>
                                    <td>2 Gold</td>
                                    <td>2 Gold</td>
                                    <td>2 Gold</td>
                                </td>
                                
                            </tr>
                            <tr>
                                <td>Games Participations</td>
                                <td></td>
                                <td></td>
                                <td>3</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>First Olympic Games</td>
                                <td></td>
                                <td></td>
                                <td>Sochi 2014</td>
                                <td></td>
                            </tr>
                        </table>
                    </div>

                    {{-- <div class="athsection2 mb-3" id="sc2">
                        <h3 class="p-3 mb-3">Biography</h3>
                    </div> --}}

                    <div class="athsection2 mb-3" id="sc3" >
                        <h3 class="p-3 mb-3">Latest News</h3>
                    </div>

                    <div class="athsection2 mb-3" id="sc4">
                        <h3 class="p-3 mb-3">Replays</h3>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
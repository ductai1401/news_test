@extends('master')

@section('title', 'Athlete')

@section('content')
    <div class="container ">
        <div class="row m-5">
            <div class="col-lg-8 ">
                <div class="container-lg pt-5">
                    <div class="row p-3 border-0">
                        <div class="col-6">
                            <img src="{{asset('images/vandongvien1.avif')}}" width="300px" height="300px" alt="athlate" style="border-radius: 5px;" >
                        </div>
                        <div class="col-5 mt-4">
                            <span class="h21" style="font-size: 70px">YUZURU HANYU</span>
                            <div class="athlete-ensign mt-5 mb-3">
                                <img src="{{asset('images/quoc-ky-nhat-ban.png')}}"  width="50px" height="30px" alt="flag" style="border:#dcdcdc solid 1px;" class="mt-2">
                                <div class="ml-2">
                                    <p class="m-0" style="color: #696969">Team</p>
                                    <p class="m-0" style="font-size: 16px">Japan</p>
                                </div>
                            </div>
                            <span style="color: #696969"> Sport &#160;<strong>Figure Skating</strong></span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 ">
                <div class="container-lg pt-5">
                    <div class="athlete-table">
                        <table class="table">
                            <tr><td>Olympic Medals</td><td>2 &nbsp; G</td></tr>
                            <tr><td>Games Participations</td><td>3</td></tr>
                            <tr><td>First Olympic Games</td><td>Sochi 2014</td></tr>
                            <tr><td>Year of Birth</td><td>1994</td></tr>
                            <tr><td></td><td><a href=""><button class="btn" style="background-color: #dcdcdc">Olympic Results</button></a></td></tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="athlete-bio ">
            <h1 class="h21" style="font-size: 70px; margin: 0 70px 0 50px;">BIOGRAPHY</h1>
            <h5 style="width: 600px">It's hard to argue that anyone has had a bigger impact on modern-day figure skating than Hanyu Yuzuru, the two-time Olympic champion.<br>

                Hanyu’s technique is outstanding, but he combines his ability with an astonishing creativity and artistry. He makes difficult moves like the Beillmann spin and the doughnut spin look simple.<br>
                
                Battling through multiple injuries, the Japanese star has changed the landscape of the sport since his first Olympic title at Sochi 2014. A huge presence in Japan, he is a star of TV and film as well as one of the country’s most famous athletes.<br>
                
                Aged just 19, Hanyu became the first Asian man to win an Olympic gold medal when he triumphed in Sochi, becoming the youngest men's champion since 1948. He followed up by defending his Olympic title in PyeongChang 2018, becoming the first man to go back-to-back for Olympic gold since 1952 (Richard Button).<br>
                
                During his career, Hanyu has also won two world titles and four Grand Prix Finals – cementing himself as perhaps one of Japan's finest ice athletes, and also his place as one of the greatest figure skaters in history. Hanyu was also the first skater to successfully land a quadruple loop jump in ISU competition, doing so in 2016.</h5>
        </div>


    </div>
@endsection
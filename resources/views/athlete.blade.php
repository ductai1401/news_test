@extends('master')

@section('title', 'Athlete')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-lg-8 ">
                <div class="container-lg pt-5">
                    <div class="row p-3 border-0">
                        <div class="col-3">
                            <img src="{{asset('images/vandongvien1.jpg')}}" width="140px" height="150px" alt="athlate">
                        </div>
                        <div>
                            <h2>Name</h2>
                            <div>
                                <div>
                                    <div>
                                        <img src="{{asset('images/Quoc_Ky_Ha_Lan.jpg')}}"  width="20px" height="30px" alt="flag">
                                    </div>
                                    <div>
                                        <span>Team</span>
                                        <span>Ha Lan</span>
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <img src="" alt="sport">
                                    </div>
                                    <div>
                                        <span>Name sport</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 ">
                <div class="container-lg pt-5">
                    <div>
                        <span>
                            <span>Olympic Medals</span>
                            <span>
                                <div>
                                    <span>Gold</span>
                                    <span>1</span>
                                </div>
                                <div>
                                    <span>Silver</span>
                                    <span>3</span>
                                </div>
                                <div>
                                    <span>Bronze</span>
                                    <span>5</span>
                                </div>

                            </span>
                        </span>
                    </div>
                    <div>
                        <span>
                            <span>Games Participations</span>
                            <span>7</span>
                        </span>
                    </div>
                    <div>
                        <span>
                            <span>First Olympic Games</span>
                            <span>Beijing 2022</span>
                        </span>
                    </div>
                    <div> 
                        <span>
                            <span>Year of Birth</span>
                            <span>1985</span>
                        </span>
                    </div>
                </div>
            </div>

            
        </div>
    </div>
@endsection
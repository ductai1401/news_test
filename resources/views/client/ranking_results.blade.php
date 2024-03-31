@extends('master')

@section('title', 'Results')

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
                    <span>Results</span>
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
                                            <a href="http://">Detail</a>
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
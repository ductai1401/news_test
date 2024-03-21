@extends('master')

@section('title', 'Results')

@section('content')
        <section class="utf_featured_post_area pt-4 no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 pad-l">
                        <div class="utf_post_overaly_style contentTop">
                            <div class="utf_post_thumb"> <img class="img-fluid" style="height: 400px" src="{{ asset('images/logo_sport.jpg') }}"
                                    alt="" /></div>
                            <div class="utf_post_content_n">
                                <h2 class="utf_post_title font_s"> Results</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>

    <div class="container p-3">
        <table class="table table-bordered text-center" id="sports">
            <thead>
                <tr>
                    <th class="text-center">Sport</th>
                    <th class="text-center">Country</th>
                    <th class="text-center">Rank</th>
                    <th class="text-center">Details</th>
                    
                </tr>
            </thead>
            <tbody>
                @for($i = 1 ; $i <= 3; $i++) 
                    
                <tr>
                    <td> sports{{ $i }}</td>
                    <td><img src="" alt="Sport_image"></td>
                    <td>{{ $i }}</td>
                    <td>
                        <a class="delete btn btn-danger" href="{{route('athlete')}}">
                             Details
                        </a>
                   </td>

                </tr>
                
                @endfor
            </tbody>
        </table>
    </div>
@endsection
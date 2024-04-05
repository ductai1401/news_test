@extends('admin/master')

@section('action','Edit Medals')
@section('module', 'Medal')
@section('heigh',' 924px')



@push('script')
<script type="text/javascript">
        $(document).ready(function() {
            $('#sport').change(function(){
                var idSport = $(this).val();
                    $.get("http://localhost:8000/admin/olympic_sport/country", function(data2) {
                        $('#country').html(data2);
                    });        
                    $.get("http://localhost:8000/admin/olympic_sport/athlete/"+idSport, function(data3) {
                        $('#athlete').html(data3);
                    }); 

                    $.get("http://localhost:8000/admin/olympic_sport/posision", function(data4) {
                    $('#posision').html(data4);
                    }); 
                    
                });
            $('#country').change(function(){
                        var idCountry = $(this).val();
                        $.get("http://localhost:8000/admin/olympic_sport/athlete/"+idCountry, function(data) {
                            $('#athlete').html(data);
                        });

                        $.get("http://localhost:8000/admin/olympic_sport/posision", function(data4) {
                            $('#posision').html(data4);
                        }); 
                
                    });

        });
</script>
@endpush

@section('content')

<section class="content-header">
    <!--section starts-->
    <h2>@yield('action')</h2>
    <ol class="breadcrumb">
        <li>
            <a href='#'>
                <i class="fa fa-fw fa-home"></i> 
            </a>
        </li>
        <li>
            <a href='{{ route('admin.medal.index') }}'>@yield('module')</a>
        </li>
        <li>
            <a href='{{ route('admin.medal.edit', ['id' => $id]) }}'>@yield('action')</a>
        </li>
    </ol>
</section>

<div class="container-fluid">
    <!--main content-->
    <div class="row">
        <div class="col-lg-12">
            <!-- Basic charts strats here-->
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fa fa-fw fa-file-text-o"></i> Edit Medal
                    </h4>
                    
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="add_news_form" action="{{ route('admin.medal.update', ['id' => $id]) }}" method="post" class="form-horizontal" >
                                @csrf
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Olympic</label>
                                        <div class="col-md-7 ">
                                            <div class="input-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="select_align">                         
                                                        <select class="form-control fill_it" name="id_olympic" id="olympic" disabled>
                                                            <option value="{{ old('id_olympic', $medal->olympic->id)}}">{{ $medal ->olympic ->name}}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('id_olympic')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Sport</label>
                                        <div class="col-md-7 ">
                                            <div class="input-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="select_align">                         
                                                        <select class="form-control fill_it" name="id_sport" id="sport" disabled>
                                                            @php
                                                                 recursiveSport($sports, old('id_sport', $medal ->sport ->id) );
                                                            @endphp
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('id_sport')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>
                                                    
                                            </div>
                                        </div>

                                        {{-- option 2 --}}
                                        {{-- <div id='olympic_sport'>

                                        </div> --}}

                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Country</label>
                                        <div class="col-md-7 ">
                                            <div class="input-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="select_align">                                                   
                                                        <select class="form-control fill_it" name="id_country" id="country">
                                                            <option value="">-------Country-------</option>
                                                            @foreach($countrys as $country)
                                                                <option value="{{ $country->id}}"  {{ old('id_country', $medal->id_country) == $country->id ? 'selected' : ' '}}>{{$country->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('id_country')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Athlete</label>
                                        <div class="col-md-7 ">
                                            <div class="input-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="select_align">                                                   
                                                        <select class="form-control fill_it" name="id_athlete" id="athlete">
                                                            <option value="">-------Athlete-------</option>
                                                            @foreach($athletes as $athlete)
                                                                <option value="{{ $athlete->id}}"  {{ old('id_athlete', $medal ->id_athlete) == $athlete->id ? 'selected' : ' '}}>{{$athlete->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('id_athlete')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="posision">
                                            Posision
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <select class="form-control fill_it" name="posision">
                                                    <option value="">-------Posision-------</option>
                                                    @for($i = 1 ; $i <= 10; $i++)
                                                        <option value="{{$i}}" {{ old('posision', $medal ->posision) == $i ? 'selected' : ''}}>{{$i}}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('posision')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="video">
                                            Video
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">

                                                <input id="brith_day" type="url" name="video" class="form-control fill_it" placeholder="Please enter the video" value="{{ old('title', $medal->video)}}">
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('video')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="status">
                                            Status
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <select name="status" id="" class="form-control">
                                                <option value="1" {{ old('status', $medal ->status)==1 ? 'selected' : '' }}>Show</option>
                                                <option value="0" {{ old('status', $medal ->status)==0 ? 'selected' : '' }}>Hidden</option>
                                            </select>
                                        </div>
                                         
                                    </div>
                                </div>

                                
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="mahesh btn btn-success" >Update</button>
                                        </div>
                                    </div>
                                </div>

                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- col-md-6 -->
    <!--row -->
    <!--row ends-->
</div
@endsection
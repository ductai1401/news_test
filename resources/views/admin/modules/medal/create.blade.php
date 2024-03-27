@extends('admin/master')

@section('action','Add List')
@section('module', 'Medal')


@push('script')
<script type="text/javascript">
        $(document).ready(function() {
            $('#olympic').change(function() {
                var idOlympic = $(this).val();
                $.get("admin/olympic_sport/sport/"+ 1, function(data) {
                    alert(data);
                    $('#sport').html(data);
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
            <a href='{{route('admin.dashboard')}}'>
                <i class="fa fa-fw fa-home"></i> Dashboard
            </a>
        </li>
        <li>
            <a href='{{ route('admin.medal.index') }}'>@yield('module')</a>
        </li>
        <li>
            <a href='{{ route('admin.medal.create') }}'>@yield('action')</a>
        </li>
    </ol>
</section>

<div class="container-fluid">
    <!--main content-->
    <div class="row">
        <div class="col-lg-12">
            <!-- Basic charts strats here-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fa-solid fa-file-circle-plus"></i> Create Medal
                    </h4>
                    
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="add_news_form" action="{{ route('admin.medal.store') }}" method="post" class="form-horizontal">
                                @csrf
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Olympic</label>
                                        <div class="col-md-7 ">
                                            <div class="input-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="select_align">                         
                                                        <select class="form-control fill_it" name="id_olympic" id="olympic">
                                                            <option value="">-------Olympic-------</option>
                                                            @php
                                                                $i = 0;
                                                            @endphp
                                                            @foreach($olympic_sports as $olympic_sport)
                                                       
                                                                @if($i != $olympic_sport->olympic->id){
                                                                     <option value="{{ $olympic_sport->olympic->id}}"  {{ old('id_olympic') == $olympic_sport->olympic->id ? 'selected' : ' '}}>{{$olympic_sport->olympic->name}}</option>                                                                    
                                                                }
                                                                @endif

                                                                @php
                                                                    $i = $olympic_sport->olympic->id;
                                                                @endphp
                                                                
                                                            @endforeach
                                                        </select>
                                                    </div>
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
                                                        <select class="form-control fill_it" name="id_olympic_sport " id="sport">
                                                            
                                                            
                            
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Country</label>
                                        <div class="col-md-7 ">
                                            <div class="input-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="select_align">                                                   
                                                        <select class="form-control fill_it" name="id_country">
                                                            <option value="">-------country-------</option>
                                                            @foreach($countrys as $country)
                                                                <option value="{{ $country->id}}"  {{ old('id_country') == $country->id ? 'selected' : ' '}}>{{$country->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
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
                                                        <select class="form-control fill_it" name="id_athlete">
                                                            <option value="">-------Athlete-------</option>
                                                            @foreach($athletes as $athlete)
                                                                <option value="{{ $athlete->id}}"  {{ old('id_athlete') == $athlete->id ? 'selected' : ' '}}>{{$athlete->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
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
                                                <select class="form-control fill_it" name="id_athlete">
                                                    <option value="0">-------Posision-------</option>
                                                    @for($i = 1 ; $i <= 10; $i++)
                                                        <option value="{{$i}}">{{$i}}</option>
                                                    @endfor
                                                </select>
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

                                                <input id="brith_day" type="url" name="video" class="form-control fill_it" placeholder="Please enter the brith day">
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
                                                <option value="1" {{ old('status')==1 ? 'selected' : '' }}>Show</option>
                                                <option value="0" {{ old('status')==0 ? 'selected' : '' }}>Hidden</option>
                                            </select>
                                        </div>
                                         
                                    </div>
                                </div>

                                
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="mahesh btn btn-primary" >Add</button>
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




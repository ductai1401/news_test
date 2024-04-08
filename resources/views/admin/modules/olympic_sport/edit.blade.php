@extends('admin/master')

@section('action','Edit Olympic Sports')
@section('module', 'Olympic Sports')

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
            <a href='{{ route('admin.country.index') }}'>@yield('module')</a>
        </li>
        <li>
            <a href='{{ route('admin.country.create') }}'>@yield('action')</a>
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
                        <i class="fa-solid fa-file-circle-plus"></i> Edit Olympic Sports
                    </h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="add_news_form" action="{{ route('admin.olympic_sport.update',['id' => $id]) }}" method="post" class="form-horizontal">
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
                                
                                                            @foreach($olympics as $olympic)
                                                                <option value="{{ $olympic->id}}"  {{ old('id_olympic', $olympic_sport ->id_olympic) == $olympic->id ? 'selected' : ' '}}>{{$olympic->name}}</option>
                                                            @endforeach
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
                                                        <select class="form-control fill_it" name="id_sport" id="sport">
                                                            <option value="">-------Sport-------</option>
                                                            @php
                                                                recursiveSport($sports, old('id_sport',  $olympic_sport ->id_sport) );
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
                                        <label class="col-md-3 control-label" for="status">
                                            Status
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <select name="status" id="" class="form-control">
                                                <option value="1" {{ old('status', $olympic_sport ->status)==1 ? 'selected' : '' }}>Show</option>
                                                <option value="0" {{ old('status', $olympic_sport ->status)==0 ? 'selected' : '' }}>Hidden</option>
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


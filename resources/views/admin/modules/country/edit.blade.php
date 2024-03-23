@extends('admin/master')

@section('action','Update Countrys')
@section('module', 'Country')

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
            <a href='{{ route('admin.country.index') }}'>@yield('module')</a>
        </li>
        <li>
            <a href='{{ route('admin.country.edit', ['id' => $country->id]) }}'>@yield('action')</a>
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
                        <i class="fa fa-fw fa-file-text-o"></i> Edit Country
                    </h4>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="add_news_form" action="{{ route('admin.country.update', ['id' => $id]) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="name" class="col-md-3 control-label">
                                            Name
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <input id="name" type="text" name="name" class="form-control fill_it" placeholder="Enter the country name" value="{{ old('name', $country ->name )}}">
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('name')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>
                                                    
                                            </div>
                                        </div>
                                    </div>
                                    @php 
                                            $image_url = public_path("uploads/countrys") . '/' . $country ->flag;
                                            if(!file_exists($image_url)) {
                                                $image_url = asset('images/error.jpg');
                                            } else {
                                                $image_url = asset("uploads/countrys") .'/' . $country ->flag;
                                            }
                                        @endphp
                                    <div class="form-group">
                                        <label for="old_flag" class="col-md-3 control-label">
                                            Old flag
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <img style="height: 150px; width: 130px;" src="{{ $image_url }}" alt="image_flag">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="flag">
                                            Flag
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <input id="flag" type="file" name="flag" class="form-control fill_it" >
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('flag')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>
                                                    
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>

                                
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="mahesh btn btn-primary" >Update</button>
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
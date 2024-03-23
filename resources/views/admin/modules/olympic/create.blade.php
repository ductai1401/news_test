@extends('admin/master')

@section('module','Olympics')
@section('action', 'Add Olympics')

@push('hanldejs')


<script src="{{ asset('admin/vendors/summernote/summernote-bs4.min.js')}}"></script>

    <script>
        $('#content').summernote();
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
            <a href='{{ route('admin.olympic.index') }}'>@yield('module')</a>
        </li>
        <li>
            <a href='{{ route('admin.olympic.create') }}'>@yield('action')</a>
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
                        <i class="fa fa-fw fa-file-text-o"></i> Add Olympic
                    </h4>
                    
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="add_news_form" action="{{ route('admin.olympic.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data"  >
                                @csrf
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="country" class="col-md-3 control-label">
                                            Country
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <input id="country" type="text" name="country" class="form-control fill_it" placeholder="Enter Title" value="{{ old('country')}}">
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('country')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="categry">
                                            Name
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <input id="name" type="text" name="name" class="form-control fill_it" placeholder="Please enter the host country name" value="{{ old('name')}}">
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
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="year">
                                            Year
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <input id="year" type="text" name="year" class="form-control fill_it" placeholder="Please enter the year of organization" value="{{ old('year')}}">
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('year')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="logo">
                                            Logo
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <input id="logo" type="file" name="logo" class="form-control fill_it">
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('logo')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="mascot">
                                            Mascot
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <input id="mascot" type="file" name="mascot" class="form-control fill_it">
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('mascot')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group" >
                                        <label class="col-md-3 control-label" for="details">
                                            Details
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <textarea name="details" id="content" cols="30" rows="10" class="form-control fill_it">{{ old('details')}}</textarea>
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('details')
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
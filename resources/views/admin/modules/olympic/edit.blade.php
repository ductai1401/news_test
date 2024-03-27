@extends('admin/master')

@section('module','Olympics')
@section('action', 'Edit Olympics')

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
            <a href='{{ route('admin.olympic.edit', ['id' => $id]) }}'>@yield('action')</a>
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
                        <i class="fa fa-fw fa-file-text-o"></i> Edit Olympic
                    </h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="add_news_form" action="{{ route('admin.olympic.update', ['id' => $id]) }}" method="post" class="form-horizontal" enctype="multipart/form-data">
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
                                                <input id="country" type="text" name="country" class="form-control fill_it" placeholder="Enter hot city" value="{{ old('country', $olympic ->country)}}">
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
                                                <input id="name" type="text" name="name" class="form-control fill_it" placeholder="Please enter the host country name"  value="{{ old('name', $olympic ->name)}}">
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
                                                <input id="year" type="text" name="year" class="form-control fill_it" placeholder="Please enter the year of organization"  value="{{ old('year', $olympic ->year)}}">
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
                                    @php 
                                            $image_url_logo = public_path("uploads/olympics/logos") . '/' . $olympic ->logo;
                                            if(!file_exists($image_url_logo)) {
                                                $image_url_logo = asset('images/error.jpg');
                                            } else {
                                                $image_url_logo = asset("uploads/olympics/logos") .'/' . $olympic ->logo;
                                            }

                                            $image_url_mascot = public_path("uploads/olympics/mascots") . '/' . $olympic ->mascot;
                                            if(!file_exists($image_url_mascot)) {
                                                $image_url_mascot = asset('images/error.jpg');
                                            } else {
                                                $image_url_mascot = asset("uploads/olympics/mascots") .'/' . $olympic ->mascot;
                                            }
                                        @endphp
                                        <div class="form-group">
                                            <label for="old_image" class="col-md-3 control-label">
                                                Old Logo
                                                <span class='require'></span>
                                            </label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-fw fa-file-text-o"></i>
                                                    </span>
                                                    <img style="height: 150px; width: 130px;" src="{{ $image_url_logo }}" alt="image_athlete">
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
                                        <label for="old_image" class="col-md-3 control-label">
                                            Old Mascot
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <img style="height: 150px; width: 130px;" src="{{ $image_url_mascot }}" alt="image_athlete">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="mascot">
                                            mascot
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
                                            <textarea name="details" id="content" cols="30" rows="10" class="form-control fill_it">{{ old('details', $olympic ->details)}}</textarea>
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

                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="status">
                                        Status
                                        <span class='require'></span>
                                    </label>
                                    <div class="col-md-7">
                                        <select name="status" id="" class="form-control">
                                            <option value="1" {{ old('status', $olympic ->status )==1 ? 'selected' : '' }}>Show</option>
                                            <option value="0" {{ old('status', $olympic ->status )==0 ? 'selected' : '' }}>Hidden</option>
                                        </select>
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
@extends('admin/master')

@section('action','Add Sports')
@section('module','Sport')

@push('hanldejs')


<script src="{{ asset('admin/vendors/summernote/summernote-bs4.min.js')}}"></script>

    <script>
        $('#details').summernote();
    </script>
@endpush

@section('content')

<section class="content-header">
    <!--section starts-->
    <h2>@yield('action')</h2>
    <ol class="breadcrumb">
        <li>
            <a href='{{route('admin.dashboard')}}'>
                <i class="fa-solid fa-file-circle-plus"></i> Dashboard
            </a>
        </li>
        <li>
            <a href='{{ route('admin.sport.index') }}'>@yield('module')</a>
        </li>
        <li>
            <a href='{{ route('admin.sport.create') }}'>@yield('action')</a>
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
                        <i class="fa fa-fw fa-file-text-o"></i> Add Sport
                    </h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="add_news_form" action="{{ route('admin.sport.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
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
                                                <input id="name" type="text" name="name" class="form-control fill_it" value="{{ old('name')}}" placeholder="Enter name sport">
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
                                        <label class="col-md-3 control-label" for="image">
                                            Image
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <input id="image" type="file" name="image" class="form-control fill_it" >
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('image')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>
                                                    
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="details">
                                            Details
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group mb-3">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <textarea id="details" name="details"  class="form-control fill_it">{{ old('details')}}</textarea>

                                                
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
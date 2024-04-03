@extends('admin/master')

@section('action','Add News')

@section('module','News')
@section('heigh',' 924px')

@push('hanldejs')


<script src="{{ asset('admin/vendors/summernote/summernote-bs4.min.js')}}"></script>

    <script>
        $('#content').summernote();
        $('#intro').summernote();
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
            <a href='{{ route('admin.news.index') }}'>@yield('module')</a>
        </li>
        <li>
            <a href='{{ route('admin.news.create') }}'>@yield('action')</a>
        </li>
    </ol>
</section>


<div class="container-fluid">
    <!--main content-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fa fa-fw fa-file-text-o"></i> Add News
                    </h4>
                   
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="add_news_form" action="{{ route('admin.news.store') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">

                                    <div class="form-group">
                                        <label for="title" class="col-md-3 control-label">
                                            Title
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <input id="title" type="text" name="title" class="form-control fill_it" placeholder="Enter Title" value="{{ old('title')}}">
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('title')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>
                                                    
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group">
                                        <label for="intro" class="col-md-3 control-label">
                                            Intro
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <textarea id="intro" name="intro" class="form-control fill_it" placeholder="Enter intro" >{{ old('intro')}}</textarea>
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('intro')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>
                                                    
                                            </div>
                                        </div>
                                        
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="categry">
                                            Category
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <select class="form-control" name="id_category" id="category">
                                                <option value="" {{ old('id_category') == 0 ? 'selected' : '' }}>Select Category</option>
                                                @php  
                                                    recursiveCategory($categories, old('id_category', 0) );
                                                @endphp
                                            </select>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('id_category')
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
                                         
                                    </div><br>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="flag">
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
                                        <label for="key_word" class="col-md-3 control-label">
                                            Key Word
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <input id="key_word" type="text" name="key_word" class="form-control fill_it" placeholder="Enter kay_word" value="{{ old('key_word')}}">
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('key_word')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>
                                                    
                                            </div>
                                        </div>
                                       
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            Content
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <textarea id="content" class="summernote edi-css form-control fill_it" name="content" cols="30" rows="10">{{ old('content')}}</textarea>
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('content')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>
                                                    
                                            </div>
                                        </div>

                                    </div>
                                   
                                </div> 



                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                           <button type="submit" class="btn btn-primary">Add</button>
                        
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
</div>

@endsection
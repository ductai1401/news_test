@extends('admin/master')

@section('action','Edit Category')
@section('module', 'Category')

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
                <a href='{{ route('admin.category.index') }}'>@yield('module')</a>
            </li>
            <li>
                <a href='{{ route('admin.category.edit', ['id' => $category->id]) }}'>@yield('action')</a>
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
                            <i class="fa fa-fw fa-file-text-o"></i> Edit Category
                        </h4>
                        
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="add_news_form" action="{{ route('admin.category.update', ['id' => $id]) }}"
                                    method="post" class="form-horizontal" enctype="multipart/form-data">
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
                                                    <input id="name" type="text" name="name"
                                                        class="form-control fill_it" placeholder="Enter the country name"
                                                        value="{{ old('name', $category->name) }}">
                                                </div>
                                                <div class="margin-top-3">
                                                <div class="input-group">
                                                        @error('name')
                                                            <span class="alert-1 alert-danger">
                                                                {{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="parent_id">
                                                Parent Id
                                                <span class='require'></span>
                                            </label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <select class="form-control fill_it" name="parent_id">
                                                        <option value="0">-------Root-------</option>
                                                        @php  
                                                            recursiveCategory($categories, old('parent_id', $category ->parent_id) );
                                                        @endphp
                                                        
                                                    </select>
                                                </div>
                                                <div class="margin-top-3">
                                                    <div class="input-group" >
                                                        @error('parent_id')
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
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-fw fa-file-text-o"></i>
                                                    </span>
                                                    <select name="status" id="" class="form-control fill_it">
                                                        <option value="1" {{ old('status', $category ->status) == 1 ? 'selected' : ''}} >Show</option>
                                                        <option value="0" {{ old('status', $category ->status) == 0 ? 'selected' : ''}} >Hiden</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button type="submit" class="mahesh btn btn-success">Update</button>
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
</div @endsection

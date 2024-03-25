@extends('admin/master')

@section('action','Add Category')
@section('module', 'Category')

@section('content')
    <div class="card" style="padding: 50px;">
        <div class="card-header">
        <h3 class="card-title">Category-List</h3><br>
        </div>        
        <form action="{{ route('admin.category.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label >Category Parents</label>
                <select name="status" id="" class="form-control">
                    <option value="0">------ Root -----</option>
                </select>
            </div><br>
            <div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" aria-describedby="name" placeholder="Enter name" name="name" value="{{ old('name')}}">
                </div><br>
                <div class="form-group">
                    <label >Status</label>
                    <select name="status" id="" class="form-control">
                        <option value="1">Show</option>
                        <option value="2">Hide</option>

                    </select>
                </div><br><br>
                <button type="submit" class="btn btn-primary">Create</button>
            </div>

        </form>  
    </div>

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
            <a href='{{ route('admin.country.create') }}'>@yield('action')</a>
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
                        <i class="fa fa-fw fa-file-text-o"></i> Add Category
                    </h4>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="add_news_form" action="{{ route('admin.category.store') }}" method="post" class="form-horizontal">
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
                                                <input id="name" type="text" name="name" class="form-control fill_it" value="{{ old('name')}}" placeholder="Enter name category">
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
                                                    <option value="1" checked>Show</option>
                                                    <option value="2">Hide</option>
                                                </select>
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


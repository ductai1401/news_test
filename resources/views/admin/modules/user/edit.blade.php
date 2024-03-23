@extends('admin/master')

@section('action','Edit Users')
@section('module', 'User')


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
            <a href='{{ route('admin.user.index') }}'>@yield('module')</a>
        </li>
        <li>
            <a href='{{ route('admin.user.edit', ['id' => $id]) }}'>@yield('action')</a>
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
                    <i class="fa fa-fw fa-user"></i> Add User
                </h4>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="add_news_form" action="{{ route('admin.user.update', ['id' => $id]) }}"
                                method="post" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="fullname">
                                            FullName
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-user-md text-primary"></i>
                                                </span>
                                                <input type="text" class="form-control" id="fullname" placeholder="Enter fullname" name="fullname" value="{{ old('fullname', $user->fullname)}}">
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('fullname')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="mail">
                                            Email
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope text-primary"></i>
                                                </span>
                                                <input type="email" placeholder="Email Address" class="form-control" id="mail" name="email" value="{{ old('email', $user->email)}}"/>
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('email')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="phone">
                                            Contact Number
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-phone text-primary"></i>
                                                </span>
                                                <input type="text" placeholder="Phone Number" id="phone" class="form-control" name="phone" value="{{ old('phone', $user->phone)}}"/>
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('phone')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="address" >
                                            Address 
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-home  text-primary"></i>
                                                </span>
                                                <input type="text" class="form-control" id="password_confirmatoin" placeholder="Enter the address" name="address" value="{{ old('address', $user->address)}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="password">
                                            Password
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-lock  text-primary"></i>
                                                </span>
                                                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('password')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="password_confirmatoin">
                                            Confirm password 
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-lock  text-primary"></i>
                                                </span>
                                                <input type="password" class="form-control" id="password_confirmatoin" placeholder="Re-enter the password to confirm" name="password_confirmatoin">
                                            </div>
                                            <div class="margin-top-3">
                                                <div class="input-group" >
                                                    @error('password_confirmatoin')
                                                        <span class="alert-1 alert-danger">
                                                            {{ $message }}</span>
                                                    @enderror
                                                </div>  
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label  col-md-3" for="status">Status</label>
                                        <div class="col-md-7">
                                            <select id="status" class="form-control js-states select2" name="status">
                                                <option value="1" {{ old('status', $user->status)== 1 ? 'selected' : '' }}>show</option>
                                                <option value="0" {{ old('status', $user->status)== 0 ? 'selected' : '' }}>hidden</option>
                                                    
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label  col-md-3" for="level">Level</label>
                                        <div class="col-md-7">
                                            <select id="level" class="form-control js-states select2" name="level">
                                                <option value="1" {{ old('level', $user->level)== 1 ? 'selected' : '' }}>Admin</option>
                                                <option value="2" {{ old('level', $user->level)== 2 ? 'selected' : '' }}>Member</option>
                                                    
                                            </select>
                                        </div>
                                    </div>
                                    @php 
                                        $image_url = public_path("uploads/users") . '/' . $user ->image;
                                            if(!file_exists($image_url)) {
                                                $image_url = asset('images/error.jpg');
                                            } else {
                                                $image_url = asset("uploads/users") .'/' . $user ->image;
                                            }
                                        @endphp
                                    <div class="form-group">
                                        <label for="old_flag" class="col-md-3 control-label">
                                            Old Image
                                            <span class='require'></span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-picture-o text-primary"></i>
                                                </span>
                                                <img style="height: 150px; width: 130px;" src="{{ $image_url }}" alt="image_flag">
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
                                                    <i class="fa fa-picture-o text-primary"></i>
                                                </span>
                                                <input id="image" type="file" name="image" class="form-control fill_it">
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

                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9"> 
                                            <button type="submit"  class="btn btn-primary" >Update</button>                                        
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
<!-- /.content -->

@endsection
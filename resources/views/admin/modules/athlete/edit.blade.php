@extends('admin/master')

@section('action', 'Edit Athletes')
@section('module', 'Athlete')
@section('heigh', ' 924px')


@push('hanldejs')
    <script src="{{ asset('admin/vendors/summernote/summernote-bs4.min.js') }}"></script>

    <script>
        $('#description').summernote();
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
                <a href='{{ route('admin.athlete.index') }}'>@yield('module')</a>
            </li>
            <li>
                <a href='{{ route('admin.athlete.edit', ['id' => $id]) }}'>@yield('action')</a>
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
                            <i class="fa fa-fw fa-file-text-o"></i> Edit Athlete
                        </h4>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form id="add_news_form" action="{{ route('admin.athlete.update', ['id' => $athlete ->id]) }}"
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
                                                        class="form-control fill_it" placeholder="Enter Name"
                                                        value="{{ old('name', $athlete->name) }}">
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
                                        @php
                                            $image_url = public_path('uploads/athletes') . '/' . $athlete->image;
                                            if (!file_exists($image_url)) {
                                                $image_url = asset('images/error.jpg');
                                            } else {
                                                $image_url = asset('uploads/athletes') . '/' . $athlete->image;
                                            }
                                        @endphp
                                        <div class="form-group">
                                            <label for="old_image" class="col-md-3 control-label">
                                                Old Image
                                                <span class='require'></span>
                                            </label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-fw fa-file-text-o"></i>
                                                    </span>
                                                    <img style="height: 150px; width: 130px;" src="{{ $image_url }}"
                                                        alt="image_athlete">
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
                                                    <input id="image" type="file" name="image"
                                                        class="form-control fill_it"
                                                        placeholder="Please enter the avatar athlete">
                                                </div>
                                                <div class="margin-top-3">
                                                    <div class="input-group">
                                                        @error('image')
                                                            <span class="alert-1 alert-danger">
                                                                {{ $message }}</span>
                                                        @enderror
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-3 control-label" for="brith_day">
                                                Year of birth
                                                <span class='require'></span>
                                            </label>
                                            <div class="col-md-7">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-fw fa-file-text-o"></i>
                                                    </span>
                                                    <input id="brith_day" type="text" name="brith_day"
                                                        class="form-control fill_it"
                                                        placeholder="Please enter the brith day"
                                                        value="{{ old('brith_day', $athlete->brith_day) }}">
                                                    <div class="margin-top-3">
                                                        <div class="input-group">
                                                            @error('brith_day')
                                                                <span class="alert-1 alert-danger">
                                                                    {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>    
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Counntry</label>
                                                <div class="col-md-7 ">
                                                    <div class="input-group">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="select_align">
                                                                <select class="form-control fill_it" name="id_country">
                                                                    <option value=""
                                                                        {{ old('id_country', $athlete->id_country) == 0 ? 'selected' : '' }}>
                                                                        -------Country-------</option>
                                                                    @foreach ($countrys as $country)
                                                                        <option value="{{ $country->id }}"
                                                                            {{ old('id_country', $country->id) == $country->id ? 'selected' : '' }}>
                                                                            {{ $country->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="margin-top-3">
                                                        <div class="input-group">
                                                            @error('id_country')
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
                                                                <select class="form-control fill_it" name="id_sport">
                                                                    <option value=""
                                                                        {{ old('id_sport', $athlete->id_sport) == 0 ? 'selected' : '' }}>
                                                                        -------Sport-------</option>
                                                                    @php
                                                                        recursiveSport(
                                                                            $sports,
                                                                            old('id_sport', $athlete->id_sport),
                                                                        );
                                                                    @endphp
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="margin-top-3">
                                                        <div class="input-group">
                                                            @error('id_sport')
                                                                <span class="alert-1 alert-danger">
                                                                    {{ $message }}</span>
                                                            @enderror
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name" class="col-md-3 control-label">
                                                    Description
                                                    <span class='require'></span>
                                                </label>
                                                <div class="col-md-7">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-fw fa-file-text-o"></i>
                                                        </span>
                                                        <textarea name="description" id="description" cols="30" rows="10">{{ old('description', $athlete->description) }}</textarea>
                                                    </div>
                                                    <div class="margin-top-3">
                                                        <div class="input-group">
                                                            @error('description')
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
                                                        <option value="1"
                                                            {{ old('status', $athlete->status) == 1 ? 'selected' : '' }}>
                                                            Show</option>
                                                        <option value="0"
                                                            {{ old('status', $athlete->status) == 0 ? 'selected' : '' }}>
                                                            Hidden</option>
                                                    </select>
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

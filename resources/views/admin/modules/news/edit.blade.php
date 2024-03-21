@extends('admin/master')

@section('title','News')

@section('content')


<div class="container-fluid">
    <!--main content-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fa fa-fw fa-file-text-o"></i> Edit News
                    </h4>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="add_news_form" class="form-horizontal" action="{{ route('admin.news.update', ['id'=>$news->id]) }}" method="post" style="padding: 50px;" enctype="multipart/form-data">
                                @csrf
                                <div class="form-body">

                                    <div class="form-group">
                                        <label for="title" class="col-md-3 control-label">
                                            Title
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <input id="title" type="text" name="title" class="form-control fill_it" placeholder="Enter Title" value="{{ old('title', $news->title)}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="intro" class="col-md-3 control-label">
                                            Intro
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-file-text-o"></i>
                                                </span>
                                                <input id="intro" type="text" name="intro" class="form-control fill_it" placeholder="Enter intro" value="{{ old('intro', $news->intro)}}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="categry">
                                            Category
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <select class="form-control" name="id_category" id="category">
                                                <option value="0" {{ old('id_category')==0 ? 'selected' : '' }}>Select Category</option>
                                                @foreach( $categories as $category )
                                                    <option value="{{ $category->id }}"  {{ old('id_category', $news->id_category)==$category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="status">
                                            Status
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <select name="status" id="" class="form-control">
                                                <option value="1" {{ old('status', $news->status)==1 ? 'selected' : '' }}>Show</option>
                                                <option value="2" {{ old('status', $news->status)==2 ? 'selected' : '' }}>Hide</option>
                                            </select>
                                        </div>
                                    </div><br>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Image Curent</label>
                                        <div class="col-md-7 text-center">
                                            <div class="input-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                        <img src="{{ asset('uploads/'. $news->image) }}" alt="profile">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                                    <div class="select_align">
                                                        <span class="btn btn-primary btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="...">
                                                        </span>
                                                        <a href="#" class="btn btn-primary   fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            Content
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <textarea id="textarea" class="summernote edi-css form-control fill_it" name="content">{{ old('content', $news->content)}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <input type="submit" class="mahesh btn btn-primary" value="Add"> &nbsp;
                                            <input type="button" class="btn btn-danger" value="Cancel"> &nbsp;
                                            <input type="reset" id="add-news-reset-editable" class="btn btn-default" value="Reset">
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
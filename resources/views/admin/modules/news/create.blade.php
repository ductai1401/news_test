@extends('admin/master')

@section('title','Create')

@section('content')


<div class="container-fluid">
    <!--main content-->
    <div class="row">
        <div class="col-lg-12">
            <!-- Basic charts strats here-->
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h4 class="panel-title">
                        <i class="fa fa-fw fa-file-text-o"></i> Add News
                    </h4>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form id="add_news_form" method="post" class="form-horizontal">
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
                                                <input id="title" type="text" name="title" class="form-control fill_it" placeholder="Enter Title">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="categry">
                                            Category
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <select class="form-control" name="category" id="categry">
                                                <option value>Select Category</option>
                                                <option value="yoga">Yoga</option>
                                                <option value="fitness">Fitness</option>
                                                <option value="body_building">Body Building</option>
                                                <option value="aerodics">Aerobics</option>
                                                <option value="flexibility">Flexibility</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            Tags
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <select class="tags_options fill_it form-control" id="activate" multiple="multiple" name="tags">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Image</label>
                                        <div class="col-md-7 text-center">
                                            <div class="input-group">
                                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                                    <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                        <img data-src="holder.js/200x150" src="#" alt="profile">
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
                                        <label class="col-md-3 control-label" for="date">
                                            Date
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class='input-group date datetimepicker4'>
                                                <input type='text' class="form-control" name="time_from" id="date" />
                                                <span class="input-group-addon">
                                                    <span class="glyphicon glyphicon-time"></span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">
                                            Description
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <textarea id="textarea" class="summernote edi-css form-control fill_it" name="content"></textarea>
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
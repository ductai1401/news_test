@extends('admin/master');

@section('title','Add user')

@section('content')

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
                            <form id="add_users_form" action="#" class="form-horizontal">
                                <div class="form-body">
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
                                                        <a href="#" class="btn btn-primary fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="usr_name">
                                            User Name
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-user-md text-primary"></i>
                                                </span>
                                                <input type="text" class="form-control" id="usr_name" placeholder="Username" name="username">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="mail">
                                            Email
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-envelope text-primary"></i>
                                                </span>
                                                <input type="email" placeholder="Email Address" class="form-control" id="mail" name="email" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="contact">
                                            Contact Number
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-fw fa-phone text-primary"></i>
                                                </span>
                                                <input type="text" placeholder="Phone Number" id="contact" class="form-control" name="phone_number" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 text-right">
                                            Gender
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <label>
                                                    <input class="radio_val" type="radio" name="gender" value="male" /> Male
                                                </label>
                                                <label class="pad-left">
                                                    <input class="radio_val" type="radio" name="gender" value="female" /> Female
                                                </label>
                                                <label class="pad-left">
                                                    <input class="radio_val" type="radio" name="gender" value="others" /> Other
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="addr">
                                            Address
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-plus text-primary"></i>

                                                </span>
                                                <input type="text" class="form-control" id="addr" placeholder="Address" name="address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="city">
                                            City
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-plus text-primary"></i>
                                                </span>
                                                <input type="text" class="form-control" id="city" placeholder="City" name="city">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="pin">
                                            Pin Code
                                            <span class='require'>*</span>
                                        </label>
                                        <div class="col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                     <i class="fa fa-plus text-primary"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Pin Code" id="pin" name="pincode">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label  col-md-3" for="select23">Country</label>
                                        <div class="col-md-7">
                                            <select id="select23" class="form-control js-states select2">
                                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                                    <option value>Select a country</option>
                                                    <option value="AK">Alaska</option>
                                                    <option value="HI">Hawaii</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            <input type="submit" class="btn btn-primary" value="Add"> &nbsp;
                                            <input type="button" class="btn btn-danger" value="Cancel"> &nbsp;
                                            <input type="reset" class="btn btn-default " value="Reset">
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
@extends('admin/master');

@section('title','User')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
            <i class="fa fa-fw fa-line-chart"></i> Users Trend
        </h4>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel"></i>
                    </span>
                </div>
                <div class="panel-body">
                    <div id="bar-chart-stacked" class="flotChart1"></div>
                </div>
            </div>
        </div>
    </div>
    <!--main content-->
    <div class="row">
        <div class="col-lg-12">
            <!-- Basic charts strats here-->
            <div class="panel panel-danger">
                <div class="panel-heading">
                    <h4 class="panel-title">
            <i class="fa fa-fw fa-file-text-o"></i> Users List
        </h4>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel"></i>
                    </span>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-bordered" id="fitness-table">
                        <thead>
                            <tr>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Contact Number</th>
                                <th>Status</th>
                                <th>Edit/Save</th>
                                <th>Delete/Cancel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Bella</td>
                                <td>gankunding@hotmail.com</td>
                                <td>(999) 999-9999</td>
                                <td>Approved</td>
                                <td>
                                    <a class="edit btn btn-primary" href="javascript:;">
                                        <i class="fa fa-fw fa-edit"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a class="delete btn btn-danger" href="javascript:;">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Timothy</td>
                                <td>Timothy@test.com</td>
                                <td>+1-222-222-222</td>
                                <td>Suspended</td>
                                <td>
                                    <a class="edit btn btn-primary" href="javascript:;">
                                        <i class="fa fa-fw fa-edit"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a class="delete btn btn-danger" href="javascript:;">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- col-md-6 -->
    <!--row -->
</div>
<!--row ends-->
<!-- end content -->

@endsection
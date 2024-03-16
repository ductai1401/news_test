@extends('admin/master');

@section('title','News')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <!-- Basic charts strats here-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i> News
                </h4>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel"></i>
                    </span>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-bordered text-center" id="fitness-table">
                        <thead>
                            <tr>
                                <th class="text-center">Date</th>
                                <th class="text-center">Category</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Edit/Save</th>
                                <th class="text-center">Delete/Cancel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>24-09-2016</td>
                                <td>Body Building</td>
                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                <td>21-09-2016</td>
                                <td>Aerobics</td>
                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                <td>12-10-2016</td>
                                <td>Yoga</td>
                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
                                <td>12-10-2016</td>
                                <td>Flexibility</td>
                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
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
</div>
@endsection
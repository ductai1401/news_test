@extends('admin/master')

@section('action','Medal List')
@section('module', 'Medal')

@push('css')
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css ') }}">
<link rel="stylesheet" href="{{ asset('admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css ') }}">
{{-- <link rel="stylesheet" href="{{ asset('admin/plugins/fontawesome-free/css/all.min.css') }}"> --}}
@endpush

@push('js')
<!-- AdminLTE App -->
{{-- <script src="{{ asset('admin/dist/js/adminlte.min.js') }}"></script> --}}
<!-- AdminLTE for demo purposes -->
{{-- <script src="{{ asset('admin/dist/js/demo.js') }}"></script> --}}
<!-- jQuery -->
<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->

<script src="{{ asset('admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endpush

@push('hanldejs')

<script>
    $(function () {
      $("#medals").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#medals_wrapper .col-md-6:eq(0)');
    });
  </script>
@endpush


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
            <a href='{{ route('admin.medal.index') }}'>@yield('module')</a>
        </li>
        <li>
            <a href='{{ route('admin.medal.index') }}'>@yield('action')</a>
        </li>
    </ol>
</section>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <!-- Basic charts strats here-->
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4 class="panel-title">
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i> Medals
                </h4>
                    <span class="pull-right">
                        <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                        <i class="glyphicon glyphicon-remove removepanel"></i>
                    </span>
                </div>
                <div class="panel-body table-responsive">
                    
                    <table class="table table-bordered text-center" id="medals">
                        <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Olympic</th>
                                <th class="text-center">Sport</th>
                                <th class="text-center">Athlete</th>
                                <th class="text-center">Posision</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($medals as $medal)
                            <tr>
                                <td>{{ $loop ->iteration }}</td>
                                <td>{{ $medal -> }}</td>
                                <td>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</td>
                                <td>Body Building</td>
                                <td>Body Building</td>
                                <td>24-09-2016</td>
                                <td>
                                   <a class="edit btn btn-primary" href="{{ route('admin.medal.edit', ['id' => 1]) }}">
                                        <i class="fa fa-fw fa-edit"></i> Edit
                                    </a>
                                </td>
                                <td>
                                    <a class="delete btn btn-danger" href="{{ route('admin.medal.destroy', ['id' => 1]) }}">
                                        <i class="fa fa-trash-o"></i> Delete
                                    </a>
                               </td>

                            </tr>
                            
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
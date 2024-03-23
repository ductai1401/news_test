@extends('admin/master')

@section('module','Olympics')
@section('action', 'Olympics List')


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
      $("#olympic").DataTable({
        "responsive": true, "lengthChange": false, "autoWidth": false,
        "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
      }).buttons().container().appendTo('#olympic_wrapper .col-md-6:eq(0)');
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
            <a href='{{ route('admin.olympic.index') }}'>@yield('module')</a>
        </li>
        <li>
            <a href='{{ route('admin.olympic.index') }}'>@yield('action')</a>
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
                    <i class="fa fa-newspaper-o" aria-hidden="true"></i> Olympic
                </h4>
                </div>
                <div class="panel-body table-responsive">
                    
                    <table class="table table-bordered text-center" id="olympic">
                        <thead>
                            <tr>
                                <th class="text-center">Id</th>
                                <th class="text-center">Name</th>
                                <th class="text-center">Country</th>
                                <th class="text-center">Year</th>
                                <th class="text-center">Logo</th>
                                <th class="text-center">Mascot</th>
                                <th class="text-center">Edit</th>
                                <th class="text-center">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($olympics as $olympic) 
                            @php 
                                $image_url_logo = public_path("uploads/olympics/logos") . '/' . $olympic ->logo;
                                if(!file_exists($image_url_logo)) {
                                    $image_url_logo = asset('images/error.jpg');
                                } else {
                                    $image_url_logo = asset("uploads/olympics/logos") .'/' . $olympic ->logo;
                                }

                                $image_url_mascot = public_path("uploads/olympics/mascots") . '/' . $olympic ->mascot;
                                if(!file_exists($image_url_mascot)) {
                                    $image_url_mascot = asset('images/error.jpg');
                                } else {
                                    $image_url_mascot = asset("uploads/olympics/mascots") .'/' . $olympic ->mascot;
                                }
                            @endphp
                            <tr>
                                <td>{{ $loop->iteration}}</td>
                                <td>{{ $olympic ->name }}</td>
                                <td>{{ $olympic ->country}}</td>
                                <td>{{ $olympic ->year}}</td>
                                <td><img style="height: 60px; width: 70px;" src="{{ $image_url_logo }}" alt="Sport_image"></td>
                                <td><img style="height: 60px; width: 70px;" src="{{ $image_url_mascot }}" alt="Sport_image"></td>
                                <td>
                                    <a class="edit btn btn-primary" href="{{ route('admin.olympic.edit', ['id' => $olympic ->id]) }}">
                                         <i class="fa fa-fw fa-edit"></i> Edit
                                     </a>
                                 </td>
                                 <td>
                                     <a onclick="return confirmDelete()" class="delete btn btn-danger" href="{{ route('admin.olympic.destroy', ['id' => $olympic ->id]) }}">
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
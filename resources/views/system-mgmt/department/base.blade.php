@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper" style="background-color: #cfd8dc;">
    <!-- Content Header (Page header) -->
    <section class="content-header" style="background-color: #cfd8dc;">
      <h1>
        Department Mangement
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> System Mangement</a></li>
        <li class="active">Department</li>
      </ol>
    </section>
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection
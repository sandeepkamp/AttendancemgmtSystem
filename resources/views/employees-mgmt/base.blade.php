@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper" style="background-color: #cfd8dc;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Employee Mangement
      </h1>
      <ol class="breadcrumb">
        <!-- li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li-->
        <li class="active">Employee Mangement</li>
        <!-- <ol class = "breadcrumb">
        <li class = "active">Employee Attendance</li>
        </ol> -->
      </ol>
    </section>
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection
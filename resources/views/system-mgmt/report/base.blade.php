@extends('layouts.app-template')
@section('content')
  <div class="content-wrapper" style="background-color: #cfd8dc;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Report
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> System Mangement</a></li>
        <li class="active">Report</li>
      </ol>
    </section>
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection
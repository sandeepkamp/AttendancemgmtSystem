
@extends('layouts.app-template')
@section('content')
@if (Auth::guest())

    <script>window.location.href = '{{route("login")}}';</script>

@endif


<div class="content-wrapper" style="background-color: #cfd8dc; color: #171515;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Attendance Sheet
      </h1>
      <ol class="breadcrumb">
        <!-- li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li-->
        <li class="active">Attendance Sheet</li>
        <!-- <ol class = "breadcrumb">
        <li class = "active">Employee Attendance</li>
        </ol> -->
      </ol>
    </section>
    @include('partials.view Table_partial')
    @yield('action-content')
    <!-- /.content -->
  </div>
@endsection
<!-- @if (Auth::guest())

    <script>window.location.href = '{{route("login")}}';</script>

@endif



<div class="row">
    <div class="col-md-10 col-md-offset-1">

           

    </div>
</div>
    <br><br> -->



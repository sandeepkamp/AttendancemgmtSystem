<?php
$myidd = 1000000000;
$leave = 1000000001;
$holiday =1000000002;
?>
  
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset("/bower_components/AdminLTE/dist/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name}}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="/"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
        <!-- <li><a href="{{ url('employee-management') }}"><i class="fa fa-link"></i> <span>Employee Management</span></a></li> -->
<!-- Add New on 14-02-2019 -->
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Employee Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          @if(Auth::user()->admin == "admin")
            <li><a href="{{ url('employee-management') }}">Employee Details</a></li>
            <li><a href="{{ url('employee-record') }}">Employee Record</a></li>
          @endif
          </ul>
        </li>
<!--      End              -->

        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Attendance Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('attendance-management') }}">Attendance Sheet</a></li>
            <li><a href="{{ url('attendance-management/show') }}">Today's Attendance</a></li>
            
            @if(Auth::user()->admin == "admin")
            <li><a href="{{ url('user-management') }}">Admin View</a></li>
            <li><a href="{{ route('admin-attendance.show',$leave) }}">Leave</a></li>
            <li><a href="{{ route('admin-attendance.show',$holiday) }}">Holiday</a></li>
            <li><a href="{{ route('admin-attendance.show',$myidd) }}">Update Attendance</a></li>
            @endif
          </ul>
        </li>
        
        @if(Auth::user()->admin == "admin")
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>System Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('system-management/department') }}">Department</a></li>
            <li><a href="{{ url('system-management/division') }}">Division</a></li>
            <li><a href="{{ url('system-management/country') }}">Country</a></li>
            <li><a href="{{ url('system-management/state') }}">State</a></li>
            <li><a href="{{ url('system-management/city') }}">City</a></li>
            <li><a href="{{ url('system-management/report') }}">Report</a></li>
          </ul>
        </li>
        <li><a href="{{ route('user-management.index') }}"><i class="fa fa-link"></i> <span>User management</span></a></li>
      </ul>
      @endif
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
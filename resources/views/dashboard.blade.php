<?php

// use App\EmployeeRecord;
        session_start();

        if(!isset($_SESSION['dddd'])){
        ?>

        <script>window.location.href = '{{route("attendance-management.create")}}';</script>
        <?php
        $_SESSION["dddd"] = 11;
        }

        $button1 = 0;
        $button2 = 0;
      ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>EM | Employee Management</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link href="{{ asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
   <link href="{{ asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
   <link href="{{ asset("/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css")}}" rel="stylesheet" type="text/css" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  @include('layouts.header')
  <!-- Sidebar -->
  @include('layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="background-color: #cfd8dc;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
      </h1>
      <ol class="breadcrumb">
        <!-- li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li-->
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      
      <div class="container">
        <div class="row">
            <div class="col-md-5 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Todays Attendence</div>

                    <div class="panel-body">
                        @if (Auth::guest())

                            <script>window.location.href = '{{route("login")}}';</script>

                        @endif

                            <p style="font-size:12px;"><b>Note:</b>&nbsp;&nbsp; Please use your office system to Punch In/Out but if you forgot or<br>
                            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp; want to work from home then E-mail at hybridlogics@gmail.com<br>
                            &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;  for Punch In/Out timing.<br><br><br></p>

                            <div class="container">

                                <button type="button" class="<?php

                                if($_SESSION["dddd"] == 1){
                                    echo "btn btn-success ";
                                    $button1 = 1;
                                }
                                elseif($_SESSION["dddd"] == 2){
                                    echo "btn btn-success disabled";
                                    $button1 = 2;
                                }
                                elseif($_SESSION["dddd"] == 3){
                                    echo "btn btn-success disabled";
                                    $button1 = 3;
                                }

                                ?>"
                                        onclick="myFunction()" >
                                    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Punch In&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</button>



                                <button type="button" class="<?php
                                if($_SESSION["dddd"] == 1){
                                    echo "btn btn-success disabled";
                                    $button2 = 1;
                                }
                                elseif($_SESSION["dddd"] == 2){
                                    echo "btn btn-success ";
                                    $button2 = 2;
                                }
                                elseif($_SESSION["dddd"] == 3){
                                    echo "btn btn-success disabled";
                                    $button3 = 3;
                                }

                                ?>" onclick="myFunction1()">
                                    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Punch Out&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</button>


                                    <button type="button" class="<?php
                                if($_SESSION["dddd"] == 1){
                                    echo "btn btn-success disabled";
                                    $button2 = 1;
                                }
                                elseif($_SESSION["dddd"] == 2){
                                    echo "btn btn-success ";
                                    $button2 = 2;
                                }
                                elseif($_SESSION["dddd"] == 3){
                                    echo "btn btn-success disabled";
                                    $button3 = 3;
                                }

                                ?>" onclick="myFunction1()">
                                    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;Leave &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</button>
                            </div>
                            

                      </div>
                  </div>
              </div>
          </div>
      </div> 

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Footer -->
  @include('layouts.footer')
  
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->
<script>
    function myFunction() {
        <?php
            if($button1 == 1){
                $_SESSION["whenIn"] = 0;
        ?>
        window.location.href = '{{route("attendance-management.create")}}';
        return true;
        <?php
            }
        ?>
    }
    function myFunction1() {
        <?php
            if($button2 == 2){
            $_SESSION["whenIn"] = 1;
            ?>
            window.location.href = '{{route("attendance-management.create")}}';
        <?php
        }
        ?>
    }
</script>

 <!-- jQuery 2.1.3 -->
<script src="{{ asset ("/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>

<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ("/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>

<!-- AdminLTE App -->
<script src="{{ asset ("/bower_components/AdminLTE/dist/js/app.min.js") }}" type="text/javascript"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->
</body>
</html>

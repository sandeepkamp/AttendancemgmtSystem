
@extends('layouts.app-template')

@section('content')
    @if (Auth::guest())
        <script>window.location.href = '{{route("login")}}';</script>
    @endif

    <div class="content-wrapper" style="background-color: #cfd8dc; color: #171515; ">
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

    @include('partials.adminviewTable_partial')
<!-- <div class="container">

    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="col-md-6">

                

            </div>
            <div class="col-md-6"> -->

                @include('partials.monthchart')

            </div>

        </div>
    </div>
</div>

<br><br>

  {{--  <div id="100">
        @include('partials.monthchart')
    </div>--}}






{{--<script>
    $('button').click(function addseries(e){
            $.ajax({
                type:'get',
                url:'user.create',
                data: {id:id

                },error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
                    console.log(JSON.stringify(jqXHR));
                    console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
                }
            });
        }
        function getMessage(){
            $.ajax({
                type:'get',
                url:"{{url('user.create')}}",
                data: {

                }
            });
        }
</script>--}}




    @endsection


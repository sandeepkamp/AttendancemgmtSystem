<?php
$myidd = 1000000000;
$leave = 1000000001;
$holiday =1000000002;
?>
<!-- Main content -->
<section class="content">
      <div class="box">
  <div class="box-header">
    <div class="row">
        <div class="col-sm-8">
          <h3 class="box-title">Leave and Holiday Management</h3>
        </div>
        <!-- <div class="col-md-3 ">
            <a href="{{ route('user-management.index') }}" class="btn btn-primary"> Admin View</a>
        </div> -->
        <!-- <div class="col-md- ">
            <a href="{{ route('user-management.show',$myidd) }}" class="btn btn-primary"> Update </a>
        </div> -->
    </div>
  </div>
  </div>

<br>

<div class="container" style="color: #171515;  background-color: #cfd8dc; width: auto; height: auto;">
    <div class="col-md-8" style="padding-left: 0px;">
   {{-- <div class="row">
        <div class="col-md-10 col-md-offset-1">--}}
    <table class="table table-bordered">
        <tr>
            <th align='center' colspan="50px">

                <div class="row">
                    <div class=" col-md-offset-5">

                        <h1><?php $name = Auth::user()->username; echo ucfirst($name); ?></h1>

                    </div>
                </div>

            </th>
        </tr>
        <tr align='center'>
            <th> # </th>
            <?php
            for($th = 0; $th < 31; $th++){

                echo "<th>".($th+1)."</th>";
            }
            ?>

        </tr>
        <?php

        $id = Auth::id();
        $myid = 0;
        $months = array("Jan", "Feb", "Mar" ,"Apr", "May", "Jun" ,"Jul", "Aug", "Sep" ,"Oct", "Nov", "Dec" );
        for($m=1;$m<=12;$m++){
        echo "<tr align='center'>";
        echo "<td>".$months[$m-1]."</td>";
        for ($d = 1; $d <= 31; $d++) {
        //echo "<td id='demo' >".$attendd[$m][$d]."</td>";


        $f = 0;
        foreach($newemployess as $emp){


        if($emp->user_id == $iddd && $emp->day == $d && $emp->month == $m && $emp->year == $y){

        if($emp->status == 'P'){

        $myid = $emp->id;
        ?>
        <td id='demo'>
            <a href="{{ route('user.show',$myid) }}">

                <?php
                echo $attendd[$m][$d];
                $f = 1;
                ?>

            </a>
        </td>

        <?php
        }
        }
        }
        if($f == 0){echo "<td id='demo'>".$attendd[$m][$d]."</td>";}


        }
        echo "</tr>";
        }
        ?>

    </table>
    </div>
{{--</div>
</div>--}}
</div>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>

@extends('layouts.app-template')

@section('content')
    @if (Auth::guest())

        <script>window.location.href = '{{route("login")}}';</script>

    @endif

    <div class="content-wrapper" style="background-color: #cfd8dc; color: #171515; height: 85vh;">    
        <br><br>
    <div class="row">
        <div class="col-md-12 col-md-offset-4">
        <div class="col-md-3">
        <h3>Leave : </h3>
            {{--{!! Form::open(['route' => 'leave']) !!}--}}
        {!!   Form::open(array('route' => array('leaveholiday.store'), 'method' => 'post')) !!}
        <!-- <div class="col-md-3"> -->
            <b>Reason for Leave : </b> <textarea rows="4" cols="50" name="reason" class="form-control input-lg"></textarea>
            <b>Date:</b> <input type="date" name="date" class="form-control input-lg">
            <br><br>
            <div class="row">
                <div class="col-sm-6">
                    {!! Html::linkRoute('admin-attendance.index', 'Cancel', array(), array('class' => 'btn btn-danger btn-block')) !!}
                </div>
                <div class="col-sm-6">
                    {{ Form::submit('Save Changes',['class'=>'btn btn-success btn-block']) }}
                </div>
            </div>
        </div>

        {!!   Form::close() !!}
        </div>
    </div>
    </div>

@endsection

@extends('layouts.app-template')
@section('content')
    @if (Auth::guest())

        <script>window.location.href = '{{route("login")}}';</script>

    @endif

    <div class="container" style="background-color: #e7ebec; color: #171515; height: 84vh;">

    </div>
@endsection
@extends('master')
@section('title','home')
@section('content')
    <div class="text-center">
        <div class="jumbotron">
            <h1 >Smart Body Tracker</h1>
            <p>Full Body Motion Detection using Wireless Sensors</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
        </div>
        <p>Could not register yet?</p>
        <div class="btn-group" role="group" aria-label="...">
            <button type="button" class="btn btn-default" onclick="location.href='{{route('register')}}'">Register Here</button>
        </div>
        <p>Already registered?</p>

        <div class="btn-group" role="group" aria-label="...">
            <button type="button" class="btn btn-default" onclick="location.href='{{route('login')}}'">Login Here</button>
        </div>
    </div>

@endsection


@extends('master')
@section('title','login')

@section('topic','LogIn')
@section('description','to see your profile updates')
@section('content')
        <h3 ><span class="label label-default">Username</span>
        </h3>
        <div class="input-group" >
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
        </div>
        <h3><span class="label label-default">Password</span></h3>
        <div class="input-group" >
            <span class="input-group-addon" id="basic-addon1">@</span>
            <input type="text" class="form-control" placeholder="Password" aria-describedby="basic-addon1">
        </div>
    <div class="text-center">
        <div class="btn-group" role="group" aria-label="..." >
            <h4>Are you a trainer?</h4>
            <button type="button" class="btn btn-default" >Login as a Trainer</button>
            <h4 style="padding-top: 70px">Are you a trainee?</h4>
            <button type="button" class="btn btn-default">Login as a Trainee</button>
        </div>
    </div>

@endsection

@extends('master')
@section('title','register')
@section('topic','Register')
@section('description','to become a trainer or trainee')
@section('content')
    <form class="form-horizontal" role="form" method="post" action="index.php">
        <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name with Initials</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name="name" placeholder="e.g: A.B.C. Perera" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="user_id" class="col-sm-2 control-label">ID</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="user_id" name="user_id" placeholder="Enter your regement id" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="date_of_birth" class="col-sm-2 control-label">Date of Birth</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="position" class="col-sm-2 control-label">Position</label>
            <div class="col-sm-10">
                <label class="radio-inline">
                    <input type="radio" name="position" id="trainer" value="trainer"> Trainer
                </label>
                <label class="radio-inline">
                    <input type="radio" name="position" id="trainee" value="trainee"> Trainee
                </label>

            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="">
            </div>
        </div>
        <div class="form-group">
            <label for="password" class="col-sm-2 control-label">Password</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" placeholder="" value="">
            </div>
        </div>
        <div class="form-group">
        <label for="confirm_password" class="col-sm-2 control-label">Confirm Password</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="" value="">
        </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-10 col-sm-offset-2">
                <! Will be used to display an alert to the user>
            </div>
        </div>
    </form>
@endsection
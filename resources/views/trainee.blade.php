@extends('master')
@section('title','profile')

@section('topic','Welcome!')
@section('description','you are logged in')
@section('content')
    <div class="container">
        <form class="form-horizontal" id="form_members" role="form">
            <legend>Person</legend>
            <div class="form-group">
                <label for="firstname" class="col-sm-2">First Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name">
                </div>
                <label for="lastname" class="col-sm-2">Last Name</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
                </div>
            </div>
            <div class="form-group">
                <label for="gender" class="col-sm-2">Gender</label>
                <div class="col-sm-4">
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="male" value="male"> Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" id="female" value="female"> Female
                    </label>
                </div>
                <label for="dob" class="col-sm-2">Date of Birth</label>
                <div class="col-sm-4">
                    <input type="date" class="form-control" name="dob" id="dob" placeholder="mm/dd/yyyy">
                </div>
            </div>
            <legend>Address</legend>
            <div class="form-group">
                <label for="address" class="col-sm-2">Address</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="address" id="address" placeholder="Street + No">
                </div>
                <label for="city" class="col-sm-2">City</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" list="cities" name="city" id="city" placeholder="City">
                    <datalist id="cities">
                        <option value="Aquila">
                        <option value="Aosta">
                        <option value="Bari">
                        <option value="Venezia">
                    </datalist>
                </div>
            </div>
            <div class="form-group">
                <label for="zipcode" class="col-sm-2">ZIP Code</label>
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="ZIP Code">
                </div>
                <label for="region" class="col-sm-2">Region</label>
                <div class="col-sm-4">
                    <select class="form-control" name="region" id="region">
                        <option>Select a Region</option>
                        <option>Abruzzo</option>
                        <option>Aosta</option>
                        <option>Apulia</option>
                        <option>Veneto</option>
                    </select>
                </div>
            </div>
            <legend>Contact Info</legend>
            <div class="form-group">
                <label for="phone" class="col-sm-2">Phone</label>
                <div class="col-sm-4">
                    <input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                </div>
                <label for="email" class="col-sm-2">Email</label>
                <div class="col-sm-4">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-warning" name="submit" id="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
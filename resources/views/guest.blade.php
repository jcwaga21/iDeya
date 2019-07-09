@extends('layouts.app')

@section('content')

<div class="container">
  <h1 class="">Guest Registration</h1><br>
  <form method="post" action="{{route('guest.attendance')}}">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="#firstname">First Name</label>
        <input name="firstname" type="text" class="form-control" id="firstname" placeholder="e.g. Jane">
      </div>
      <div class="form-group col-md-6">
        <label for="#lastname">Last Name</label>
        <input name="lastname" type="text" class="form-control" id="lastname" placeholder="e.g. Doe">
      </div>
    </div>
    <div class="form-group">
      <label for="#emailaddress">Email Address</label>
      <input name="emailaddress" type="text" class="form-control" id="emailaddress" placeholder=" e.g. username@email.com">
    </div>
    <div class="form-group">
      <label for="contactnumber">Contact Number</label>
      <input name="contactnumber" type="text" class="form-control" id="contactnumber" placeholder="e.g. 0912356789">
    </div>
    <div class="form-group">
      <label for="#schoolorganization">School/Organization</label>
      <input name="schoolorganization" type="text" class="form-control" id="schoolorganization" placeholder="e.g. MSU-IIT">
    </div>
    <div class="form-group">
      <label for="purpose">Purpose</label>
      <input name="purpose" type="text" class="form-control" id="purpose" placeholder="e.g. Consultation">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
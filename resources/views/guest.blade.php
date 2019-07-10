@extends('layouts.app')

@section('content')

<div class="container">
  <h1 class="">Guest Registration</h1><br>
  <form method="post" action="{{route('guest.attendance')}}">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="#first_name">First Name</label>
        <input name="first_name" type="text" class="form-control" id="first_name" placeholder="e.g. Jane">
      </div>
      <div class="form-group col-md-6">
        <label for="#last_name">Last Name</label>
        <input name="last_name" type="text" class="form-control" id="last_name" placeholder="e.g. Doe">
      </div>
    </div>
    <div class="form-group">
      <label for="#email">Email Address</label>
      <input name="email" type="text" class="form-control" id="email" placeholder=" e.g. username@email.com">
    </div>
    <div class="form-group">
      <label for="contact_number">Contact Number</label>
      <input name="contact_number" type="text" class="form-control" id="contact_number" placeholder="e.g. 0912356789">
    </div>
    <div class="form-group">
      <label for="#schoolorganization">School/Organization</label>
      <input name="schoolorganization" type="text" class="form-control" id="schoolorganization" placeholder="e.g. MSU-IIT">
    </div>
    <div class="form-group">
      <label for="purpose">Purpose</label>
      <input name="purpose" type="text" class="form-control" id="purpose" placeholder="e.g. Consultation">
    </div>
    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
@endsection
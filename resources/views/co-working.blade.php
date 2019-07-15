@extends('layouts.app')

@section('content')

<div class="container">
  <h1 class="">Co-Working Registration</h1><br>
  <form method="post" action="{{route('co-working.attendance')}}">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
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
      <input name="email" type="text" class="form-control" id="email" placeholder="username@email.com">
    </div>
    <div class="form-group">
      <label for="contact_number">Contact Number</label>
      <input name="contact_number" type="text" class="form-control" id="contact_number" placeholder="e.g. 0912356789">
    </div>
    <button type="submit" id="submit" class="btn btn-primary">Submit</button>
      <button type="submit" id="submit" class="btn btn-primary">Sign In</button>
  </form>
</div>
@endsection
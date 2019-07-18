@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card">
              <div class="card-header" align="center"><h2>Change Password</h2><br>
              <p>You should create a strong password that uses uppercase and lowercase letters, numbers, symbols, and spaces.</p></div>
              <div class="container">

                <div class="form-group">
                  <label for="contact_number">New Password</label>
                  <input name="contact_number" type="text" class="form-control" id="contact_number">
                </div>

                <div class="form-group">
                  <label for="contact_number">Confirm New Password</label>
                  <input name="contact_number" type="text" class="form-control" id="contact_number">
                </div>

                <button type="submit" id="submit" class="btn btn-primary">Submit</button>

              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
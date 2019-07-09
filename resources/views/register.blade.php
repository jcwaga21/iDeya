@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            side bar here
        </div>
        <div class="col-md-10">
            <div class="col-md-8">
                <form method="POST" action="{{route('events.participant.add', compact('event'))}}">
                @csrf
                <h3>Register here:</h3><br>
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input name="first_name" class="form-control" id="first_name" type="text" placeholder="e.g. Jane">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input name="last_name" class="form-control" id="last_name" type="text" placeholder="e.g.Doe">
                </div>
                <div class="form-group">
                    <label for="school">School:</label>
                    <input name="school" class="form-control" id="school" type="text" placeholder="e.g. MSU-IIT">
                </div>
                <div class="form-group">
                    <label for="contact">Contact:</label>
                    <input name="contact" class="form-control" id="contact" type="text" placeholder="e.g. 09123456789">
                </div>
                <div class="custom-control custom-checkbox">
                    <input name="is_firsttime" type="checkbox" class="custom-control-input" id="is_firsttime">
                    <label class="custom-control-label" for="is_firsttime"><h5><strong>This is my first time</strong></h5></label>
                </div>
                <div class="form-group">
                    <button id="add_participant" type="submit" class="btn btn-primary">Register</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
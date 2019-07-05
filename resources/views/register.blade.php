@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            side bar here
        </div>
        <div class="col-md-10">
            <div class="col-md-8">
                <form method="POST" action="{{route('events.store')}}">
                @csrf
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input name="first_name" class="form-control" id="first_name" type="text" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input name="last_name" class="form-control" id="last_name" type="text" placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                    <label for="school">School:</label>
                    <input name="school" class="form-control" id="school" type="text" placeholder="Enter School or University">
                </div>
                <div class="form-group">
                    <label for="contact">Contact:</label>
                    <input name="contact" class="form-control" id="contact" type="text" placeholder="09XXXXXXXXX">
                </div>
                <div class="form-check form-check-inline">
                    <label for="is_firsttime"><p class="font-weight-bold">This is my first time</p></label>
                    <input name="is_firsttime" class="form-check" id="is_firsttime" type="checkbox">
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

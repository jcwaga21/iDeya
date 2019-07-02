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
                    <label for="title">Event Title:</label>
                    <input name="title" class="form-control" id="title" type="text" placeholder="HealthHack">
                </div>
                <div class="form-group">
                    <label for="type">Event Type</label>
                    <input name="type" class="form-control" id="type" type="text" placeholder="iDeyaHack">
                </div>
                <div class="form-group">
                    <label for="date">Event Date:</label>
                    <input name="date" class="form-control" id="date" type="text" placeholder="December 25, 2019">
                </div>
                <div class="form-group">
                    <label for="budget">Event Budget:</label>
                    <input name="budget" class="form-control" id="budget" type="text" placeholder="1000">
                </div>
                <div class="form-group">
                    <label for="expected">Expected Number of Participants:</label>
                    <input name="expected" class="form-control" id="expected" type="text" placeholder="25">
                </div>
                <div class="form-group">
                    <label for="registration">Registration Fee:</label>
                    <input name="registration" class="form-control" id="registration" type="text" placeholder="100">
                </div>
                <div class="form-group">
                    <label for="days">Number of Days</label>
                    <input name="days" class="form-control" id="days" type="text" placeholder="3">
                </div>
                <div class="form-group">
                    <label for="speaker">Guest Speaker:</label>
                    <input name="speaker" class="form-control" id="speaker" type="text" placeholder="Doctor Strange">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Event</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection

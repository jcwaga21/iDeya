@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            side bar here
        </div>
        <div class="col-md-10">
            <form method="POST" action="{{route('events.store')}}">
                @csrf
                <img src="{{ asset('images/cesar.jpg')}}">
                <div class="form-group">
                    <label for="title">Event Title:</label>
                    <input name="title" id="title" type="text" placeholder="HealthHack">
                </div>
                <div class="form-group">
                    <label for="type">Event Type</label>
                    <input name="type" id="type" type="text" placeholder="iDeyaHack">
                </div>
                <div class="form-group">
                    <label for="date">Event Date:</label>
                    <input name="date" id="date" type="text" placeholder="December 25, 2019">
                </div>
                <div class="form-group">
                    <label for="budget">Event Budget:</label>
                    <input name="budget" id="budget" type="text" placeholder="1000">
                </div>
                <div class="form-group">
                    <label for="expected">Expected Number of Participants:</label>
                    <input name="expected" id="expected" type="text" placeholder="25">
                </div>
                <div class="form-group">
                    <label for="registration">Registration Fee:</label>
                    <input name="registration" id="registration" type="text" placeholder="100">
                </div>
                <div class="form-group">
                    <label for="days">Number of Days</label>
                    <input name="days" id="days" type="text" placeholder="3">
                </div>
                <div class="form-group">
                    <label for="speaker">Guest Speaker:</label>
                    <input name="speaker" id="speaker" type="text" placeholder="Doctor Strange">
                </div>
                <div class="form-group">
                    <button type="submit">Add Event</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

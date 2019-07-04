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
                    <label for="type">Event Type: </label>
                    <select name="type_id" class="form-control">
                        @foreach($eventTypes as $type)
                        <option value="{{$type->id}}">
                            {{$type->name}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="date">Event Date:</label>
                    <input name="date" class="form-control" id="date" type="text" placeholder="Year-Month-Day">
                </div>
                <div class="form-group">
                    <label for="eventbudget">Event Budget:</label>
                    <input name="eventbudget" class="form-control" id="eventbudget" type="text" placeholder="1000">
                </div>
                <div class="form-group">
                    <label for="expected_no">Expected Number of Participants:</label>
                    <input name="expected_no" class="form-control" id="expected_no" type="text" placeholder="25">
                </div>
                <div class="form-group">
                    <label for="reg_fee">Registration Fee:</label>
                    <input name="reg_fee" class="form-control" id="reg_fee" type="text" placeholder="100">
                </div>
                <div class="form-group">
                    <label for="#no_of_days">Number of Days</label>
                    <select name="no_of_days" id="no_of_days" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option></select>
                </div>
                <div class="form-group">
                    <label for="guestspeaker">Guest Speaker:</label>
                    <input name="guestspeaker" class="form-control" id="guestspeaker" type="text" placeholder="Doctor Steven Strange">
                </div>
                <div class="form-group">
                    <button id="add_event" type="submit" class="btn btn-primary">Add Event</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection

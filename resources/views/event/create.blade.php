@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            side bar here
        </div>
        <div class="col-md-8">
            <form method="POST" action="{{route('events.store')}}">
                @csrf
                <img src="{{ asset('images/cesar.jpg')}}">
                <div class="form-group">
                    <label for="name">Event Name:</label>
                    <input name="name" id="name" type="text">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <input name="description" id="description" type="text">
                </div>
                <div class="form-group">
                    <button type="submit">Add Event</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

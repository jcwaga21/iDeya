@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card text-center">
                <div class="card-header">
                    <img src="..." class="card-img-top" alt="...">
                    <h5 class="display-4">{{$event->title}}</h5>
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h5>Type: {{$event->eventType->name}}<br>
                            Date: {{$event->date}}<br>
                            Registration Fee: {{$event->reg_fee}}<br>
                            Number of Days: {{$event->no_of_days}}<br>
                            Guest Speaker: {{$event->guestspeaker}}<br><br>
                            Description: {{$event->description}}<br>
                        </h5>
                    </div>
                    <br><br><h5>Interested?</h5>
                    <a href="{{route('register', compact('event'))}}" class="btn btn-lg btn-success">Register Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
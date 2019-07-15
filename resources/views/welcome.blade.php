@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card text-center">
                <div class="card-header">
                    <h5>Not an event participant? Log-in here:</h5>
                    <div class="btn-group" role="group">
                        <a class="btn btn-outline-secondary" id="Co-Working" href="{{route('co-working.sign-in')}}">Co-working</a>
                        <a class=" btn btn-outline-secondary" id="guest" href="{{route('guest')}}">Guest</a>
                    </div>
                </div>
                <div class="card-body">
                    @unless(!$ongoingEvent)
                    <h3>Featured</h3>
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-title"><h5 class="display-4">{{$ongoingEvent->type}}</h5></div>
                    <h5>{{$ongoingEvent->title}}<br>
                    <strong>{{$ongoingEvent->date}}</strong><br><br>
                    {{$ongoingEvent->description}}<br><br>
                    Registration Fee: {{$ongoingEvent->reg_fee}}</h5><br>
                    <h5>Interested?</h5>
                    <a href="{{route('register', compact('ongoingEvent'))}}" class="btn btn-lg btn-success">Register Now</a>
                    @endunless
                </div>
                <div class="card-footer card-group">
                    @foreach($upcomingEvents as $event)
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$event->title}}</h5>
                            <h><strong>{{$event->date}}</strong></h><br>
                            <p class="card-text">{{$event->description}}</p>
                            <p class="card-text"><small class="text-muted"><a href="{{route('event.details', compact('event'))}}">See Details</a></small></p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
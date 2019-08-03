@extends('layouts.app')

@section('content')
<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card text-center">
                <div class="card-header">
                    <h5>Not an event participant? Sign up here:</h5>
                    <div class="btn-group" role="group">
                        <a class="btn btn-outline-secondary" id="Co-Working-Guest" href="{{route('registration')}}">Guest</a>
                    </div>
                </div>
                <div class="card-body">
                    @unless(!$ongoingEvent)
                    <h3>Featured</h3>
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-title"><h5 class="display-4">{{$ongoingEvent->title}}</h5></div>
                    <h5>{{$ongoingEvent->eventType->name}}<br>
                    Date: {{$ongoingEvent->date}}<br><br>
                    {{$ongoingEvent->description}}<br><br>
                    Registration Fee: {{$ongoingEvent->reg_fee}}</h5><br><br>
                    <h5>Interested?</h5>
                    <a href="{{route('register', compact('ongoingEvent'))}}" class="btn btn-lg btn-success">Register Now</a>
                    <p class="card-text"><small class="text-muted"><a href="{{route('event.seedetails', compact('ongoingEvent'))}}">See Details</a></small></p>
                    @endunless
                </div>
                <div class="card-footer card-group">
                    @foreach($upcomingEvents as $event)
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h class="card-title display-4">{{$event->title}}</h><br>
                            <h>Type: {{$event->eventType->name}}<br>
                            <strong>Date: {{$event->date}}</strong></h><br>
                            <p class="card-text">{{$event->description}}</p>
                            <p class="card-text"><small class="text-muted"><a href="{{route('event.seedetails', compact('event'))}}">See Details</a></small></p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div> -->

    <div>
        <div class="container mx-auto bg-white shadow-md mt-4">
            <div class="block">
                <h1 class="text-center text-5xl font-bold">Startup Challenge: Para sa Mindanao</h1>
                <h1 class="text-center text-3xl font-semibold">Sign Up Here</h1>
                <div class="text-center pt-2">
                    <i class="far fa-hand-point-down text-5xl text-red-700"></i>
                </div>
                <div class="text-center pb-8 pt-2">
                    <a href="{{route('registration')}}" id="Co-Working-Guest">
                        <button class="border-red-500 border p-2 px-4 rounded-full text-red-700 bg-transparent hover:bg-red-700 hover:text-white hover:border-gray-200 font-bold">Guest</button>
                    </a>
                </div>

                <div>
                    <div>
                        @unless(!$ongoingEvent)
                        <h1>Featured</h1>
                        <img src="">
                        <div class="">
                            <h5>{{$ongoingEvent->eventType->name}}</h5>
                        </div>
                        <div class="">
                            <h5>Date: {{$ongoingEvent->date}}</h5>
                        </div>
                        <div class="">
                            <h5>Registration Fee: {{$ongoingEvent->reg_fee}}</h5>
                        </div>
                        <div class="">
                            <h5>Interested?</h5>
                            <a href="{{route('register', compact('ongoingEvent'))}}">
                                 <button class="border-red-500 border p-2 px-4 rounded-full text-red-700 bg-transparent hover:bg-red-700 hover:text-white hover:border-gray-200 font-bold">Register Now</button>
                            </a>
                        </div>
                        <div class="">
                            <a href="{{route('event.seedetails', compact('ongoingEvent'))}}">See Details</a>
                        </div>
                        @endunless
                    </div>
                </div>
            </div>
        </div>

        <div class="container mx-auto mt-2 w-4/5">
            <div class="flex mb-4 md:flex-row flex-wrap ml-24">
                <div class="w-1/4 bg-white rounded-lg shadow-md p-2 m-1">
                    <div>
                        <div class="bg-yellow-300 h-32">
                            
                        </div>
                        <div class="p-2">
                            <p class="text-center font-bold text-xl">Grand Hackathon</p>
                        </div>
                        <div class="border border-gray-200"></div>
                        <div class="p-4">
                            <div class="block inline-flex mb-4">
                                <i class="fas fa-calendar-alt text-2xl"></i>
                                <p class="pl-2 -pt-1">August 13, 2019</p>
                            </div>
                            <div class="block inline-flex">
                                <i class="fas fa-microphone text-2xl"></i>
                                <p class="pl-2 -pt-1">Mrs. Dominique Baes</p>
                            </div>
                        </div>
                    </div>
                 </div>

                 <div class="w-1/4 bg-white rounded-lg shadow-md p-2 m-1">
                    <div>
                        <div class="bg-yellow-300 h-32">
                            
                        </div>
                        <div class="p-2">
                            <p class="text-center font-bold text-xl">Grand Hackathon</p>
                        </div>
                        <div class="border border-gray-200"></div>
                        <div class="p-4">
                            <div class="block inline-flex mb-4">
                                <i class="fas fa-calendar-alt text-2xl"></i>
                                <p class="pl-2 -pt-1">August 13, 2019</p>
                            </div>
                            <div class="block inline-flex">
                                <i class="fas fa-microphone text-2xl"></i>
                                <p class="pl-2 -pt-1">Mrs. Dominique Baes</p>
                            </div>
                        </div>
                    </div>
                 </div>

                 <div class="w-1/4 bg-white rounded-lg shadow-md p-2 m-1">
                    <div>
                        <div class="bg-yellow-300 h-32">
                            
                        </div>
                        <div class="p-2">
                            <p class="text-center font-bold text-xl">Grand Hackathon</p>
                        </div>
                        <div class="border border-gray-200"></div>
                        <div class="p-4">
                            <div class="block inline-flex mb-4">
                                <i class="fas fa-calendar-alt text-2xl"></i>
                                <p class="pl-2 -pt-1">August 13, 2019</p>
                            </div>
                            <div class="block inline-flex">
                                <i class="fas fa-microphone text-2xl"></i>
                                <p class="pl-2 -pt-1">Mrs. Dominique Baes</p>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
@endsection
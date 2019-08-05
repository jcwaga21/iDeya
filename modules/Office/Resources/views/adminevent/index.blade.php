@extends('layouts.app')

@section('content')
<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <lu class="list-inline">
                        <li class="list-inline-item"><h4>Event Listings</h4></li>
                        <a class="btn btn-primary float-right" href="{{route('adminevent.create')}}" role="button">Create Event</a>                   
                    </lu>
                </div>
                <div class="card-body">
                    <table class="table table table-bordered table-striped .table-responsive">
                        <thead class="thead-dark">
                        <tr>
                            <th>Event Title</th>
                            <th>Event Type</th>
                            <th>Date</th>
                            <th>Event Budget</th>
                            <th>Number of Participants</th>
                            <th>Guest Speaker</th>                         
                            <th>Registration Fee</th>
                            <th>Number of Days</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                                <tr>
                                    <td> <a href="{{route('adminevent.detail', compact('event'))}}">{{$event->title}}</a> </td>
                                    <td> {{$event->eventType->name}} </td>
                                    <td> {{$event->date}} </td>
                                    <td> {{optional(optional($event->eventBudget)->budget)->total_amount}} </td>
                                    <td> {{$event->eventParticipants->count()}} / {{$event->expected_no}} </td>
                                    <td> {{$event->guestspeaker}} </td>
                                    <td> {{$event->reg_fee}} </td>
                                    <td> {{$event->no_of_days}} </td>
                                    <td> {{$event->status}} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="text-gray-900 bg-gray-200">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            Event Listings
        </h1>
        <a href="{{route('adminevent.create')}}" role="button">
            <button class="bg-red-700 hover:bg-red-800 text-white font-bold px-4 py-2 border border-red-700 rounded ml-2">Create Event</button>
        </a>
    </div>
    <div class="px-3 py-4 justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Event Title</th>
                    <th class="text-left p-3 px-5">Event Type</th>
                    <th class="text-left p-3 px-5">Date</th>
                    <th class="text-left p-3 px-5">Event Budget</th>
                    <th class="text-left p-3 px-5">Number of Participants</th>
                    <th class="text-left p-3 px-5">Guest Speaker</th>
                    <th class="text-left p-3 px-5">Registration Fee</th>
                    <th class="text-left p-3 px-5">Number of Days</th>
                    <th class="text-left p-3 px-5">Status</th>
                </tr>
                @foreach($events as $event)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><a href="{{route('adminevent.detail', compact('event'))}}">{{$event->title}}</a></td>
                    <td class="p-3 px-5">{{$event->eventType->name}}</td>
                    <td class="p-3 px-5">{{$event->date}}</td>
                    <td class="p-3 px-5">900</td>
                    <td class="p-3 px-5">{{$event->eventParticipants->count()}} / {{$event->expected_no}}</td>
                    <td class="p-3 px-5">{{$event->guestspeaker}}</td>
                    <td class="p-3 px-5">{{$event->reg_fee}}</td>
                    <td class="p-3 px-5">{{$event->no_of_days}}</td>
                    <td class="p-3 px-5">{{$event->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

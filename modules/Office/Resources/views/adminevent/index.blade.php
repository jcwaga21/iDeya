@extends('layouts.app')

@section('content')
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
                    <td class="p-3 px-5"> {{optional(optional($event->eventBudget)->budget)->total_amount}}</td>
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

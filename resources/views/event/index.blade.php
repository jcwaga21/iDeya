@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            Side Bar
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <table class="table table table-bordered .table-responsive">
                        <thead class="thead-dark">
                        <tr>
                            <th>Event Title</th>
                            <th>Event Type</th>
                            <th>Date</th>
                            <th>Number of Participants</th>
                            <th>Guest Speaker</th>
                            <th>Event Budget</th>
                            <th>Status</th>
                            <th>Registration Fee</th>
                            <th>Number of Days</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($events as $event)
                                <tr>
                                    <td> <a href="{{route('event.details', compact('event'))}}">{{$event->title}}</a> </td>
                                    <td> {{$event->type}} </td>
                                    <td> {{$event->date}} </td>
                                    <td> {{$event->actual_no}} / {{$event->expected_no}} </td>
                                    <td> {{$event->guestspeaker}} </td>
                                    <td> {{$event->eventbudget}} </td>
                                    <td> {{$event->status}} </td>
                                    <td> {{$event->reg_fee}} </td>
                                    <td> {{$event->no_days}} </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

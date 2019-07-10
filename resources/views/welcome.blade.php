@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card text-center">
                <div class="card-header">
                    <h5>Not an event participant? Log-in here:</h5>
                    <div class="btn-group" role="group">
                        <a class="btn btn-outline-secondary" href="{{route('co-working')}}">Co-working</a>
                        <a class=" btn btn-outline-secondary" id="guest" href="{{route('guest')}}">Guest</a>
                    </div>
                </div>
                <div class="card-body">
                    <h3>Featured</h3>
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-title"><h5 class="display-4">iDeyaHack</h5></div>
                    <h5>{{optional($event)->title}}<br>
                    {{optional($event)->type}}<br>
                    {{optional($event)->date}}<br>
                    {{optional($event)->reg_fee}}</h5>
                    <h5>Interested?</h5>
                    <a href="{{route('register', compact('event'))}}" class="btn btn-lg btn-success">Register Now</a>
                </div>
                <div class="card-footer card-group">
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Upcoming Event 1</h5>
                            <h><strong>Day-Month-Year</strong></h><br>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted"><a href="#">See Details</a></small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Upcoming Event 2</h5>
                            <h><strong>Day-Month-Year</strong></h><br>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                            <p class="card-text"><small class="text-muted"><a href="#">See Details</a></small></p>
                        </div>
                    </div>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Upcoming Event 3</h5>
                            <h><strong>Day-Month-Year</strong></h><br>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                            <p class="card-text"><small class="text-muted"><a href="#">See Details</a></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
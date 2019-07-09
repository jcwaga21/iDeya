@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card text-center">
                <img src="" class="card-img-top" alt="">
                <div class="card-header card-"><h3>Featured</h3></div>
                <div class="card-title"><h5 class="display-4">iDeyaHack</h5></div>
                <h> {{optional($event)->title}}<br>
                    {{optional($event)->type}}<br>
                    {{optional($event)->date}}<br>
                    {{optional($event)->reg_fee}}</h>
                <div class="col">
                    <a href="{{route('register', compact('event'))}}" class="btn btn-lg btn-success">Register Now</a>
                </div>
                <div class="card-footer text">
            		<a href="{{route('co-working')}}" class="btn btn-lg btn-primary">Co-working</a>
            		<a href="{{route('guest')}}" class=" btn btn-lg btn-primary">Guest</a>
            	</div>
            </div>
        </div>
    </div>
</div>
@endsection
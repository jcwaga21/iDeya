@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card text-center">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-header">Welcome {{$user->firstname}}!</div>
                <p>With supporting text below as a natural lead-in to additional content.</p>
                <a href="{{route('home')}}">Thanks! Back to home</a>
            </div>
        </div>
    </div>
</div>
@endsection
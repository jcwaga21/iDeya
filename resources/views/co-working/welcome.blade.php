@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card text-center">
                <img src="" class="card-img-top" alt="">
                <div class="card-header"><h2>Welcome {{$user->firstname}}!</h2></div>
                <p>With supporting text below as a natural lead-in to additional content.</p>
                <a href="{{route('home')}}"><h4>Thanks! Back to home</h4></a>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')

<div class="container mx-auto mt-20">
    <div class="">
        <div class="">
            <div class="text-center">
                <div class=""><h2 class="text-3xl font-semibold">Welcome, {{$user->first_name}}!</h2></div>
                <p class="leading-normal text-base md:text-2xl slide-in-bottom-subtitle">With supporting text below as a natural lead-in to additional content.</p>
                <a href="{{route('home')}}" class="hover:underline"><h4>Thanks! <a href="{{route('home')}}" class="hover:underline text-blue-400">Back to home</a></h4>
            </div>
        </div>
    </div>
</div>
@endsection
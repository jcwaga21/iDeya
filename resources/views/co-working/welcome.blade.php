@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">

	Welcome {{$user->firstname}}!
	</div>
	<a href="{{route('home')}}">Thanks! Back to home</a>

</div>

@endsection
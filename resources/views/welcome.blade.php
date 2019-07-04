@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            Side bar
        </div>
        <div class="col-md-10">
            <div class="card" style="width: 18rem;">
                <img src="" class="card-img-top" alt="">
            	<div class="card-header">{{$event->title}}</div>
            	<div class="col-md-5">
            		<a href="{{route('co-working')}}" class="btn">Co-working</a>
            	</div>
            	<div class="col-md-5">
            		<a href="{{route('guest')}}" class="btn">Guest</a>
            	</div>
            </div>
        </div>
    </div>
</div>
@endsection
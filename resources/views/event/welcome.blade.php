@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card text-center">
                <img src="" class="card-img-top" alt="">
                <div class="card-header">Featured</div>
                <div class="card-title">iDeyaHack</div>
                <p>With supporting text below as a natural lead-in to additional content.</p>
                <div class="col">
                    <a href="{{route('register')}}" class="btn btn-lg btn-success">Register Now</a>   
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
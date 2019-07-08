 @extends('layouts.app')
 @section("content")

<div class="container">
 <div class="row">
    {{optional($event)->title}}
    {{optional($event)->type}}
    {{optional($event)->date}}
    {{optional($event)->reg_fee}}
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="{{route('co-working')}}" class="btn">Co-working</a>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('guest')}}" class="btn">Guest</a>
                    </div>
                </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    co-working
    
   <form method="post" action="{{route('co-working.attendance')}}">
   	 @csrf
  		<div class="form-row">
    		<div class="form-group col-md-6">
     			<label for="#firstname">First Name</label>
      				<input name="firstname" type="text" class="form-control" id="firstname" placeholder="First Name">
   			</div>
    		<div class="form-group col-md-6">
   	   			<label for="#lastname">Last Name</label>
      				<input name="lastname" type="text" class="form-control" id="lastname" placeholder="Last Name">
    		</div>
  		</div>
  		<div class="form-group">
    			<label for="#emailaddress">Email Address</label>
    				<input name="emailaddress" type="text" class="form-control" id="emailaddress" placeholder="username@email.com">
  			</div>

  		<div class="form-group">
   				<label for="contactnumber">Contact Number</label>
   					<input name="contactnumber" type="text" class="form-control" id="contactnumber" placeholder="Contact Number">
 			</div>
 		
   		<button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@endsection
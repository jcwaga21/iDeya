@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<h4 class="text-center">Add New Entry</h4>
			<form action="{{route('inventory.create-inventory')}}" method="POST">
				@csrf
				<div class="form-group">
				    <label class="control-label col-sm-2" for="name">Name:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="name" placeholder="Enter item name" name="name">
				    </div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="description">Description:</label>
					<div class="col-sm-10">
  						<textarea class="form-control" rows="3" id="description" name="description"></textarea>
					</div>
				</div>
				<div class="form-group">
				    <label class="control-label col-sm-2" for="quantity">Quantity:</label>
				    <div class="col-sm-10">
				      <input type="number" class="form-control" id="name" placeholder="Enter item name" name="quantity">
				    </div>
				</div>
				<div class="form-group">
				    <label class="control-label col-sm-2" for="brand">Brand:</label>
				    <div class="col-sm-10">
				      <input type="number" class="form-control" id="name" placeholder="Enter item name" name="brand">
				    </div>
				</div>
				<div class="text-center">
					<button type="button" class="btn btn-primary" id="submit">Add</button>
				</div>
			</form>

		</div>
		<div class="col-sm-9">
		<table class="table table-hover">
		    <thead>
		      <tr>
		        <th>Name</th>
		        <th>Description</th>
		        <th>Brand</th>
		        <th>Quantity</th>
		        <th>In</th>
		        <th>Out</th>

		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		        <td>Chair</td>
		        <td>Chair Without back</td>
		        <td>Mandaue Foam</td>
		        <td>21</td>
		        <td>21</td>
		        <td>0</td>
		      </tr>
		    </tbody>
		  </table>
	</div>
		
	</div>
</div>
@endsection()
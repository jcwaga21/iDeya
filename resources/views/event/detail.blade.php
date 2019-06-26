@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-2">
			side bar here			
		</div>
		<div class="col-md-10">
			<div class="card">
				<div class="card-header">{{$event->title}}</div>	
				<div class="card-body">
					<header>Type: {{$event->type}}</header>
					<header>Date: {{$event->date}}</header>
					<header>Status: {{$event->status}}</header>
					<header>Registration Fee: {{$event->reg_fee}}</header>
					<header>Number of Days: {{$event->no_days}}</header>
					<header>Guest Speaker: {{$event->guestspeaker}}</header>
					<header>Number of Participants</header>
					<table class="table table-bordered .table-responsive">
						<thead  class="thead-dark">
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>School/Organization</th>
								<th>Contact</th>
							</tr>
						</thead>
						<tbody>
							@foreach($participants as $participant)
							<tr>
								<td> {{$participant->first_name}} </td>
								<td> {{$participant->last_name}} </td>
                                <td> {{$participant->school}} </td>
                                <td> {{$participant->contact}} </td>
                            </tr>
                            @endforeach 
                        </tbody>
					</table>
					<header>Budget Breakdown: {{$budgets->sum('total_amount')}}</header>
					<table class="table table-bordered .table-responsive">
						<thead  class="thead-dark">
							<tr>
								<th>Item</th>
								<th>Pieces</th>
								<th>Amount</th>
								<th>Total Amount</th>
							</tr>
						</thead>
						<tbody>
							@foreach($budgets as $budget)
							<tr>
								<td> {{$budget->item}} </td>
								<td> {{$budget->no_of_items}} </td>
                                <td> {{$budget->amount}} </td>
                                <td> {{$budget->no_of_items*$budget->amount}} </td>
                            </tr>
                            @endforeach 
                        </tbody>						
					</table>				
				</div>			
			</div>
		</div>
	</div>
</div>

@endsection
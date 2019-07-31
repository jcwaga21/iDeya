@extends('adminlte::page')

@section('content')

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<div class="card">
				<div class="card-header"><h4>{{$event->title}}</h4></div>	
				<div class="card-body">
					<table class="table .table-responsive">
						<tbody>
							<tr>
								<td>Type: {{$event->eventType->name}}</td>
								<td>Date: {{$event->date}}</td>
								<td>Registration Fee: {{$event->reg_fee}}</td>
								<td>Number of Days: {{$event->no_of_days}}</td>
								<td>Guest Speaker: {{$event->guestspeaker}}</td>
								<td>Status: {{$event->status}}</td>
							</tr>
						</tbody>
					</table>
					<header>Number of Participants</header>
					<table class="table table-bordered table-striped .table-responsive">
						<thead  class="thead-dark">
							<tr>
								<th>First Name</th>
								<th>Last Name</th>
								<th>Email</th>
								<th>School/Organization</th>
								<th>Contact</th>
							</tr>
						</thead>
						<tbody>
							@foreach($participants as $participant)
							<tr>
								<td> {{$participant->first_name}} </td>
								<td> {{$participant->last_name}} </td>
								<td> {{$participant->email}} </td>
                                <td> {{$participant->school}} </td>
                                <td> {{$participant->contact}} </td>
                            </tr>
                            @endforeach 
                        </tbody>
					</table>
					<header>Budget Breakdown: {{$budgets->sum('total_amount')}}</header>
					<table class="table table-bordered table-striped .table-responsive">
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
                                <td> {{$budget->total_amount}} </td>
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
@extends('layouts.admin')

@section('content')

<div class="container mx-auto mt-16">
	<div class="flex flex-wrap p-4">
		<div class="w-full md:w-1/5 py-4">
			<div class="block w-full bg-white rounded-lg shadow-md border-t-8 border-gray-600 mb-4">
				<div class="p-2 px-4">
					<div class="text-center mb-4">
						<span class="text-base font-semibold uppercase text-red-700">General Details</span>
					</div>
					<div class="mb-2 flex justify-between">
						<span class="text-sm font-semibold">Type:</span>
						<span class="text-right text-sm">{{$event->EventType->name}}</span>
					</div>

					<div class="mb-2 flex justify-between">
						<span class="text-sm font-semibold">Date:</span>
						<span class="text-righ text-sm">{{$event->date}}</span>
					</div>

					<div class="mb-2 flex justify-between">
						<span class="text-sm font-semibold">Reg Fee:</span>
						<span class="text-sm text-right">{{$event->reg_fee}}</span>
					</div>

					<div class="mb-2 flex justify-between">
						<span class="text-sm font-semibold">No. of Days:</span>
						<span class="text-right text-sm">{{$event->no_of_days}}</span>
					</div>

					<div class="mb-2 flex justify-between">
						<span class="text-sm font-semibold">Guest Speaker:</span>
						<span class="text-sm text-right">{{$event->guestspeaker}}</span>
					</div>

					<div class="mb-2 flex justify-between">
						<span class="text-sm font-semibold">Status:</span>
						<span class="text-right text-sm rounded-full bg-yellow-500 px-4 text-white">{{$event->status}}</span>
					</div>

				</div>
			</div>

			<!-- Budget Breakdown -->

			<div class="block w-full bg-white rounded shadow-md mt-2 border-t-8 border-gray-600">
				<div class="p-2 px-4">
					<div class="text-center mb-2">
						<span class="text-base font-semibold uppercase text-red-700">Budget Breakdown</span>
					</div>
					<div class="mb-4 text-center">
						<h1 class="text-xl">{{$budgets->sum('total_amount')}}</</h1>
					</div>
					<div class="">
						<table class="text-sm w-full bg-white">
							<tr class="border-b text-left">
								<th>Items</th>
								<th>Pieces</th>
								<th>Amount</th>
								<th>Total</th>
							</tr>

							@foreach($budgets as $budget)
							<tr class="border-b hover:bg-orange-100 bg-white">
								<td class="text-left py-2">{{$budget->item}}</td>
								<td class="text-left py-2">{{$budget->no_of_items}}</td>
								<td class="text-left py-2">{{$budget->amount}}</td>
								<td class="text-left py-2">{{$budget->total_amount}}</td>
							</tr>
							@endforeach
							<th class="text-left">Total</th>
						</table>
					</div>
				</div>			
			</div>
		</div>	

		<!-- Participants Table-->

		<div class="w-full md:w-4/5">
			<div class="px-3 py-4 justify-center">
		        <table class="w-full text-md bg-white shadow-md rounded mb-4">
		            <tbody>
		                <tr class="border-b text-center">
		                    <th class="text-left p-3 px-5">First Name</th>
		                    <th class="text-left p-3 px-5">Last Name</th>
		                    <th class="text-left p-3 px-5">Email</th>
		                    <th class="text-left p-3 px-5">School/Organization</th>
		                    <th class="text-left p-3 px-5">Contact No.</th>
		                </tr>
		                @foreach($participants as $participant)
		                <tr class="border-b hover:bg-orange-100 bg-gray-100">
		                    <td class="p-3 px-5">{{$participant->first_name}}</td>
		                    <td class="p-3 px-5">{{$participant->last_name}}</td>
		                    <td class="p-3 px-5">{{$participant->email}}</td>
		                    <td class="p-3 px-5">{{$participant->school}}</td>
		                    <td class="p-3 px-5">{{$participant->contact}}</td>
		               </tr>
		               	@endforeach

		            </tbody>
		        </table>
		    </div>
		</div>	
	</div>
</div>

@endsection
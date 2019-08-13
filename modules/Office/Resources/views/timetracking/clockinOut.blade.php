@extends('layouts.admin')

@section('content')


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4>Date</h4>
                        <h4>Time</h4>
                        <h2>Username:</h2>
                        <h2>User Type:</h2>
                    </div>

		<div class="container mx-auto px-32 mt-4">
            <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 border border-yellow-500 rounded w-full" type="submit" id="TimeIn"> Clock In </button>
        </div>

        <div class="container mx-auto px-32 mt-4">
            <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 border border-yellow-500 rounded w-full" type="submit" id="TimeOut"> Clock Out </button>
        </div>
                    <div class="card-body">
                        <table class="table table table-bordered table-striped .table-responsive">
                            <thead class="thead-dark">
                            <tr>
                            	<th>Date</th>
                                <th>Time-In</th>
                                <th>Time-Out</th>
                                <th>Time-In</th>
                                <th>Time-Out</th>
                            </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
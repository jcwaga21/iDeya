@extends('adminlte::page')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4>Employee Listings</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table table-bordered table-striped .table-responsive">
                            <thead class="thead-dark">
                            <tr>
                                <th>Full Name</th>
                                <th>Contact Number</th>
                                <th>Email</th>
                                <th>Position</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td> {{$employee->fullName()}} </td>
                                    <td> {{$employee->contact_number}} </td>
                                    <td> {{$employee->email}} </td>
                                    <td> {{$employee->position}} </td>
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

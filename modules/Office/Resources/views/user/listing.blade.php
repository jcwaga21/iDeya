@extends('adminlte::page')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4>User Listing</h4>
                        <a class="btn btn-primary" id="create-employee" href="{{route('employee.create')}}">Create Employee</a>
                        <a class="btn btn-primary" id="create-intern" href="{{route('intern.create')}}">Create Intern</a>
                        <a class="btn btn-primary" id="create-coworking" href="{{route('coworking.create')}}">Create Co-Working</a>
                    </div>
                    <div class="card-body">
                        <table class="table table table-bordered table-striped .table-responsive">
                            <thead class="thead-dark">
                            <tr>
                                <th>Full Name</th>
                                <th>Contact Number</th>
                                <th>Email</th>
                                <th>Type</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td> {{$user->fullName()}} </td>
                                    <td> {{$user->contactNumber()}} </td>
                                    <td> {{$user->email}} </td>
                                    <td> {{$user->type}} </td>
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

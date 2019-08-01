@extends('adminlte::page')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4>Co-Working Listings</h4>
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
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($coworkings as $coworking)
                                <tr>
                                    <td> {{$coworking->fullName()}} </td>
                                    <td> {{$coworking->contact_number}} </td>
                                    <td> {{$coworking->email}} </td>
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

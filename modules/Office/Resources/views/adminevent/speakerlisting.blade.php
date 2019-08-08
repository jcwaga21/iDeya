@extends('adminlte::page')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4>Speaker Listings</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table table-bordered table-striped .table-responsive">
                            <thead class="thead-dark">
                            <tr>
                                <th>Full Name</th>
                                <th>Contact Number</th>
                                <th>Email</th>
                                <th>Profession</th>
                                <th>Organization</th>
                                <th>Description</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($speakers as $speaker)
                                <tr>
                                    <td> {{$speaker->fullName()}} </td>
                                    <td> {{$speaker->contact}} </td>
                                    <td> {{$speaker->email}} </td>
                                    <td> {{$speaker->profession }} </td>
                                    <td> {{$speaker->organization}} </td>
                                    <td> {{$speaker->description}} </td>
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

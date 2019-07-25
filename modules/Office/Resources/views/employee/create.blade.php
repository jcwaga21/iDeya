@extends('adminlte::page')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="col-md-8">
                    <form method="POST" action="{{route('employee.store')}}">
                        @csrf
                        <h3>Create a new Event:</h3><br>
                        <div class="form-group">
                            <label for="first_name">First Name:</label>
                            <input name="first_name" class="form-control" id="first_name" type="text" placeholder="e.g. Jane">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name:</label>
                            <input name="last_name" class="form-control" id="last_name" type="text" placeholder="e.g. Doe">
                        </div>
                        <div class="form-group">
                            <label for="contact_number">Contact Number:</label>
                            <input name="contact_number" class="form-control" id="contact_number" type="text" placeholder="e.g. 09123456789">
                        </div>
                        <div class="form-group">
                            <label for="position">Position:</label>
                            <input name="position" class="form-control" id="position" type="text" placeholder="e.g. Intern">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input name="email" class="form-control" id="email" type="text" placeholder="e.g. username@email.com">
                        </div>
                        <div class="form-group">
                            <button id="add_employee" type="submit" class="btn btn-primary">Add Employee</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

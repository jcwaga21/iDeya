@extends('layouts.admin')

@section('content')

   <!--  <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="col-md-8">
                    <form method="POST" action="{{route('employee.store')}}">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h3>Create a new Employee:</h3><br>
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
                            <input name="position" class="form-control" id="position" type="text" placeholder="Office Staff">
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
    </div> -->

    <div class="mt-20">
    <form class="w-full max-w-lg bg-white p-4 container mx-auto mt-8" method="POST" action="{{route('employee.store')}}">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                             @endif
        @csrf
        <div class="p-2 bg-red-600 mb-4 rounded">
            <h1 class="text-center text-3xl text-white">Create an Employee</h1>
        </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="first_name">
            First Name
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="first_name" type="text" placeholder="e.g. Doe" name="first_name">
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="last_name">
            Last Name
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="last_name" type="text" placeholder="e.g. Hoe" name="last_name">
        </div>
      </div>
        
        <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="contact_number">
            Contact Number
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="contact_number" type="number" placeholder="e.g. 09559561435" name="contact_number">
        </div>
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="position">
            Position
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="position" type="text" placeholder="e.g. Office Staff" name="position">
        </div>
      </div>

      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-full px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
            Email
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" placeholder="e.g. doethehoe@example.com" name="email">
        </div>
      </div>

        <div class="container mx-auto px-32 mt-4">
            <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded w-full" type="submit" id="add_employee">
                 Add Employee
            </button>
        </div>

      </div>
</form>
</div>
@endsection

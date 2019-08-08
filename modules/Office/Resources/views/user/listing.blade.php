@extends('layouts.admin')

@section('content')
    <div class="text-gray-900 bg-gray-200 container mx-auto mt-16">
    <div class="p-4 flex">
        <h1 class="text-3xl">
            User Listings
        </h1>
        <a href="{{route('employee.create')}}" role="button" class="bg-red-600 hover:bg-red-700 text-white text-sm px-3 py-2  border rounded-full ml-2" id="create-employee">
            Create Employee
        </a>
        <a href="{{route('intern.create')}}" role="button" class="bg-yellow-400 hover:bg-yellow-500 text-white text-sm px-3 py-2  border rounded-full ml-2" id="create-intern">
            Create Intern
        </a>
        <a href="{{route('coworking.create')}}" role="button" class="bg-gray-600 hover:bg-gray-700 text-white text-sm px-3 py-2  border rounded-full ml-2" id="create-coworking">
            Create Co-worker
        </a>
    </div>
    <?php $i = 1;  ?>
    <div class="px-3 py-4 justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5"></th>
                    <th class="text-left p-3 px-5">Full Name</th>
                    <th class="text-left p-3 px-5">Contact Number</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th class="text-left p-3 px-5">Type</th>
                </tr>
                @foreach($users as $user)
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">{{$i++}}</td>
                    <td class="p-3 px-5">{{$user->fullName()}}</td>
                    <td class="p-3 px-5">{{$user->contactNumber()}}</td>
                    <td class="p-3 px-5">{{$user->email}}</td>
                    <td class="p-3 px-5"> {{$user->type}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

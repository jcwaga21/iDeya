@extends('layouts.app')

@section('content')


<div class="mt-20">
    <form class="w-full max-w-lg bg-white p-4 container mx-auto mt-8" method="POST" action="{{route('events.participant.add', compact('event'))}}">
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
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="first_name">
            First Name
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="first_name" type="text" placeholder="Jane" name="first_name">
        </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="last_name">
            Last Name
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="last_name" type="text" placeholder="Doe" name="last_name">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
            Email
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" placeholder="Jane" name="email">
        </div>
        <div class="w-full md:w-1/2 px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="contact">
            Contact No.
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="contact" type="number" placeholder="Doe" name="contact">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-full px-3 mb-6 md:mb-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="school">
            School
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="school" type="text" placeholder="e.g. MSU-IIT" name="school">
        </div>
      </div>

      <div class="flex flex-wrap mb-6">
        <div class="w-full px-3 mb-6 md:mb-0">
            <label class="md:w-2/3 block text-gray-500 font-bold">
              <input class="mr-2 leading-tight" type="checkbox" name="is_firsttime" id="is_firsttime" >
              <span class="text-sm">
                First time?
              </span>
            </label>

             <div class="container mx-auto px-32">
            <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded w-full" type="submit" id="add_participant">
                 Register
            </button>
        </div>
        </div>
    </div>
</form>
</div>
@endsection
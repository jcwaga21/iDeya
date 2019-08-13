@extends('layouts.app')

@section('content')

<div class="mt-20">
    <form class="w-full max-w-lg bg-white p-4 py-8 container mx-auto mt-8" method="POST">
        @csrf
    <div class="px-20">
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="username"> Email </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="username" type="email" name="email" value="{{ old('email') }}" placeholder="admin@example.com">
        </div>
      </div>
      
      <div class="container mx-auto px-32">
            <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded w-full" type="submit" id="submit"> Submit </button>
        </div>
      </div>
</form>
</div>
@endsection
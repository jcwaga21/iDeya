@extends('layouts.app')

@section('content')
     <!-- <div class="container">
         <div class="row justify-content-center">
             <div class="col-md-14">
                 <div class="card">
                     <div class="card-header" align="center"><h2>Create New Account</h2></div>
                     <div class="container">
                         <form method="post" action="{{route('guest.attendance')}}">
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
                                 <div class="form-row">
                                     <div class="form-group col-md-6">
                                         <label for="#first_name">First Name</label>
                                         <input name="first_name" type="text" class="form-control" id="first_name" placeholder="e.g. Jane">
                                     </div>
                                     <div class="form-group col-md-6">
                                         <label for="#last_name">Last Name</label>
                                         <input name="last_name" type="text" class="form-control" id="last_name" placeholder="e.g. Doe">
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="#email">Email Address</label>
                                     <input name="email" type="text" class="form-control" id="email" placeholder=" e.g. username@email.com">
                                 </div>
                                 <div class="form-group">
                                     <label for="contact_number">Contact Number</label>
                                     <input name="contact_number" type="text" class="form-control" id="contact_number" placeholder="e.g. 0912356789">
                                 </div>
                                 <div class="form-group">
                                     <label for="#schoolorganization">School/Organization</label>
                                     <input name="schoolorganization" type="text" class="form-control" id="schoolorganization" placeholder="e.g. MSU-IIT">
                                 </div>
                                 <div class="form-group">
                                     <label for="purpose">Purpose</label>
                                     <select name="purpose" class="form-control">
                                         <option value="consultation">Consultation</option>
                                         <option value="visitation">Visitation</option>
                                     </select>
                                 </div>
                                 <div class="form-group">
                                     <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                                 </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div> -->
    <div>
    <form class="w-full max-w-lg bg-white p-4 container mx-auto mt-8" method="POST" action="{{route('guest.attendance')}}">
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
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="contact_number">
            Contact No.
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="contact_number" type="number" placeholder="Doe" name="contact_number">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-2">
        <div class="w-full md:w-2/3 px-3 mb-6 md:mb-4">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="schoolorganization">
            School
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="schoolorganization" type="text" placeholder="Albuquerque" name="schoolorganization">
        </div>
        <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="purpose">
            Purpose
          </label>
          <div class="relative">
            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="purpose" name="purpose">
              <option value="consultation">Consultation</option>
              <option value="visitation">Visitation</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
              <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
            </div>
          </div>
        </div>
        <div class="container mx-auto px-32">
            <button class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded w-full" type="submit" id="submit">
                 Register
            </button>
        </div>
      </div>
</form>
</div>
@endsection
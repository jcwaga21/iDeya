<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
   <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!-- Tailwinds -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <script src="https://kit.fontawesome.com/2da44da5ae.js"></script>

</head>
<body class="bg-gray-200">
    <div id="app">
        <nav class="flex items-center justify-between flex-wrap bg-white p-4 w-full fixed shadow-md">
          <div class="pl-2"><a href="{{route('dashboard.index')}}"><img src="/images/wewe.png" class="w-10 h-10"></a></div>
            <div class="ml-2"><p class="text-2xl text-red-800 font-bold">iDEYA</p></div>
          <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow ml-6 ">
                <a href="{{route('users.listing')}}" class="block mt-4 lg:inline-block lg:mt-0 text-gray-800 hover:text-red-600 mr-4 font-medium"><i class="fas fa-users"></i>
                    Users
                </a>
                <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-800 hover:text-red-600 mr-4 font-medium"><i class="fas fa-clipboard pr-1"></i>Attendance
                </a>
                <a href="{{route('adminevent.index')}}" class="block mt-4 lg:inline-block lg:mt-0 text-gray-800 hover:text-red-600 font-medium"><i class="fas fa-calendar-week"></i>
                    Events
                </a>
            </div>
            <div class="mr-4">
                <form method="POST" action="{{route('office.logout')}}">
                    @csrf
                    <button type="submit" class="block mt-4 lg:inline-block lg:mt-0 text-gray-800 hover:text-red-600 text-sm font-medium"><i class="fas fa-sign-out-alt"></i>
                    Logout
                </button>
                </form>
            </div>
          </div>
        </nav>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>

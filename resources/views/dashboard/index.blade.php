@extends('layouts.admin')

@section('content')
	<div class="container my-8 mx-auto px-4 md:px-8 mt-16">
		<div class="flex flex-wrap mb-4">
    <div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pl-2">
        <div class="bg-blue-600 border rounded shadow p-2 h-48">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pl-1 pr-4"><i class="fas fa-users fa-2x fa-fw fa-inverse"></i></div>
                <div class="flex-1 text-right">
                    <h5 class="text-white">Total Users</h5>
                    <h3 class="text-white text-3xl">13 <span class="text-blue-400"><i class="fas fa-caret-up"></i></span></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pr-2 xl:pr-3 xl:pl-1">
        <div class="bg-orange-600 border rounded shadow p-2 h-48">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pl-1 pr-4"><i class="fas fa-user-plus fa-2x fa-fw fa-inverse"></i></div>
                <div class="flex-1 text-right pr-1">
                    <h5 class="text-white">New Users</h5>
                    <h3 class="text-white text-3xl">2 <span class="text-orange-400"><i class="fas fa-caret-up"></i></span></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pr-2 xl:pl-2 xl:pr-3">
        <div class="bg-red-600 border rounded shadow p-2 h-48">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pl-1 pr-4"><i class="fas fa-tasks fa-2x fa-fw fa-inverse"></i></div>
                <div class="flex-1 text-right">
                    <h5 class="text-white">To Do List</h5>
                    <h3 class="text-white text-3xl">7 tasks</h3>
                </div>
            </div>
        </div>
    </div>
       <div class="w-full md:w-1/2 xl:w-1/3 pt-3 px-3 md:pr-2 xl:pl-2 xl:pr-3">
        <div class="bg-red-600 border rounded shadow p-2 h-48">
            <div class="flex flex-row items-center">
                <div class="flex-shrink pl-1 pr-4"><i class="fas fa-tasks fa-2x fa-fw fa-inverse"></i></div>
                <div class="flex-1 text-right">
                    <h5 class="text-white">Events</h5>
                    <h3 class="text-white text-3xl">3 Pending</h3>
                    <h3 class="text-white text-3xl">7 Ongoing</h3>
                    <h3 class="text-white text-3xl">2 Upcoming</h3>
                </div>
            </div>
        </div>
    </div>
</div>
		<div class="bg-white p-4">
			<h1 class="text-6xl font-semibold text-center">Upcoming Events</h1>
		</div>
		<div class="flex flex-wrap -mx-1 lg:-mx-4">
			<!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                 <div class="min-w-32 bg-white min-h-48 p-3 mb-4 font-medium">
                <div class="w-32 flex-none rounded-t lg:rounded-t-none lg:rounded-l text-center mx-auto">
                  <div class="block rounded-t overflow-hidden  text-center">
                    <div class="bg-red-700 text-white py-1">
                      March
                    </div>
                    <div class="pt-1 border-l border-r border-white bg-white">
                      <span class="text-5xl font-bold leading-tight">
                        17
                      </span>
                    </div>
                    <div class="border-l border-r border-b rounded-b-lg text-center border-white bg-white -pt-2 -mb-1">
                      <span class="text-sm">
                        Sunday
                      </span>
                    </div>
                    <div class="pb-2 border-l border-r border-b rounded-b-lg text-center border-white bg-white">
                      <span class="text-xs leading-normal">
                        8:00 am to 5:00 pm
                      </span>
                    </div>
                  </div>
                </div>
              </div> 
                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="#">
                            Startup Challenge 3.0
                        </a>
                    </h1>
                    <p class="text-grey-darker text-sm">
                        14/4/19
                    </p>
                </header>

                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center no-underline hover:underline text-black" href="#">
                        <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                        <p class="ml-2 text-sm">
                            Speaker
                        </p>
                    <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                        <span class="text-sm">Jc Waga</span>
                    </a>
                </footer>
                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center no-underline hover:underline text-black" href="#">
                        <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                        <p class="ml-2 text-sm">
                            Status
                        </p>
                    </a>
                    <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                        <span class="text-sm text-red-500">Unapproved</span>
                    </a>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->


                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                 <div class="min-w-32 bg-white min-h-48 p-3 mb-4 font-medium">
                <div class="w-32 flex-none rounded-t lg:rounded-t-none lg:rounded-l text-center mx-auto">
                  <div class="block rounded-t overflow-hidden  text-center">
                    <div class="bg-red-700 text-white py-1">
                      March
                    </div>
                    <div class="pt-1 border-l border-r border-white bg-white">
                      <span class="text-5xl font-bold leading-tight">
                        17
                      </span>
                    </div>
                    <div class="border-l border-r border-b rounded-b-lg text-center border-white bg-white -pt-2 -mb-1">
                      <span class="text-sm">
                        Sunday
                      </span>
                    </div>
                    <div class="pb-2 border-l border-r border-b rounded-b-lg text-center border-white bg-white">
                      <span class="text-xs leading-normal">
                        8:00 am to 5:00 pm
                      </span>
                    </div>
                  </div>
                </div>
              </div> 
                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="#">
                            Startup Challenge 3.0
                        </a>
                    </h1>
                    <p class="text-grey-darker text-sm">
                        14/4/19
                    </p>
                </header>

                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center no-underline hover:underline text-black" href="#">
                        <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                        <p class="ml-2 text-sm">
                            Speaker
                        </p>
                    </a>
                    <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                        <span class="hidden">Like</span>
                        <i class="fa fa-heart"></i>
                    </a>
                </footer>
                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center no-underline hover:underline text-black" href="#">
                        <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                        <p class="ml-2 text-sm">
                            Status
                        </p>
                    </a>
                    <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                        <span class="hidden">Like</span>
                        <i class="fa fa-heart"></i>
                    </a>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

                <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                 <div class="min-w-32 bg-white min-h-48 p-3 mb-4 font-medium">
                <div class="w-32 flex-none rounded-t lg:rounded-t-none lg:rounded-l text-center mx-auto">
                  <div class="block rounded-t overflow-hidden  text-center">
                    <div class="bg-red-700 text-white py-1">
                      March
                    </div>
                    <div class="pt-1 border-l border-r border-white bg-white">
                      <span class="text-5xl font-bold leading-tight">
                        17
                      </span>
                    </div>
                    <div class="border-l border-r border-b rounded-b-lg text-center border-white bg-white -pt-2 -mb-1">
                      <span class="text-sm">
                        Sunday
                      </span>
                    </div>
                    <div class="pb-2 border-l border-r border-b rounded-b-lg text-center border-white bg-white">
                      <span class="text-xs leading-normal">
                        8:00 am to 5:00 pm
                      </span>
                    </div>
                  </div>
                </div>
              </div> 
                <header class="flex items-center justify-between leading-tight p-2 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="#">
                            Startup Challenge 3.0
                        </a>
                    </h1>
                    <p class="text-grey-darker text-sm">
                        14/4/19
                    </p>
                </header>

                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center no-underline hover:underline text-black" href="#">
                        <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                        <p class="ml-2 text-sm">
                            Speaker
                        </p>
                    </a>
                    <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                        <span class="hidden">Like</span>
                        <i class="fa fa-heart"></i>
                    </a>
                </footer>
                <footer class="flex items-center justify-between leading-none p-2 md:p-4">
                    <a class="flex items-center no-underline hover:underline text-black" href="#">
                        <img alt="Placeholder" class="block rounded-full" src="https://picsum.photos/32/32/?random">
                        <p class="ml-2 text-sm">
                            Status
                        </p>
                    </a>
                    <a class="no-underline text-grey-darker hover:text-red-dark" href="#">
                        <span class="hidden">Like</span>
                        <i class="fa fa-heart"></i>
                    </a>
                </footer>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->
		</div>
	</div>
@endsection

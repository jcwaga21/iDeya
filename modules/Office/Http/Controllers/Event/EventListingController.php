<?php

namespace Modules\Office\Http\Controllers\Event;

use App\Event;
use App\EventType;
use App\Http\Requests\Events\CreateEventRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class EventListingController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $events = Event::all();
        return view('office::adminevent.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $eventTypes = EventType::all();
        return view('office::adminevent.create', compact('eventTypes'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(CreateEventRequest $request)
    {
        $data = $request->except('_token');
        $data['slug'] = Str::slug($data['title']);

        Event::create($data);

        return redirect()->route('adminevent.index');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('office::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('office::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}

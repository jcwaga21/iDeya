<?php

namespace App\Http\Controllers;

use App\Event;
use App\EventType;
use App\Http\Requests\Events\CreateEventRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();

        return view('event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $eventTypes = EventType::all();
        return view('event.create', compact('eventTypes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventRequest $request)
    {
        $data = $request->except(['_token', 'guestspeaker', 'speaker_id']);
        $data['slug'] = Str::slug($data['title']);
        $event = Event::create($data);

        if ($request->post('speaker_id') == 0) {
            $speaker = Speaker::firstOrCreate(['full_name' => $request->post('guestspeaker')]);
            SpeakerEvent::create(['event_id' => $event->id, 'speaker_id' => $speaker->id]);
        } else {
            SpeakerEvent::create(['event_id' => $event->id, 'speaker_id' => $request->post('speaker_id')]);
        }

        return redirect()->route('events.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

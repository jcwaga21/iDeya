<?php

namespace App\Http\Controllers\Event;

use App\Event;
use App\Participant;
use App\EventParticipant;
use App\Http\Requests\Events\AddParticipantRequest;
use App\Http\Controllers\Controller;

class AddParticipantController extends Controller
{
    public function __invoke(AddParticipantRequest $request, Event $event)
    {
        $data = $request->except('_token');
        $data['is_firsttime']= ($data['is_firsttime'] == "on") ? true:false;
        $participant = Participant::create($data);
        EventParticipant::create(['event_id'=>$event->id, 'participant_id'=>$participant->id]);
        return redirect()->route('event.welcome', compact('participant'));
    }
}
																																																																																			
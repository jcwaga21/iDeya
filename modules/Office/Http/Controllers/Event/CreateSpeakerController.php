<?php

namespace Modules\Office\Http\Controllers\Event;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Office\Entities\AdminEventSpeaker;

class CreateSpeakerController extends Controller
{
    public function __invoke(Request $request, Event $event)
    {
        $speaker = AdminEventSpeaker::all();

        return view('office::adminevent.speaker.add', compact('event'));
    }
}

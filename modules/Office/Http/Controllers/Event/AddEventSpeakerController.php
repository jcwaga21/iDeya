<?php

namespace Modules\Office\Http\Controllers\Event;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Office\Entities\AdminEventSpeaker;

class AddEventSpeakerController extends Controller
{
    public function __invoke(Request $request, Event $event)
    {
        $data = $request->except('_token');
        return view('office:adminevent.speaker', compact('event'));
    }
}

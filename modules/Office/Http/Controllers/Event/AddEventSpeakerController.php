<?php

namespace Modules\Office\Http\Controllers\Event;

use App\Event;
use Illuminate\Routing\Controller;

class AddEventSpeakerController extends Controller
{
    public function __invoke(Request $request, Event $event)
    {
        $data = $request->except('_token');
        return view('speaker', compact('event'));
    }
}

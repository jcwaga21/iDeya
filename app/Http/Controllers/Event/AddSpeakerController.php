<?php

namespace App\Http\Controllers\Event;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddSpeakerController extends Controller
{
    public function __invoke(Request $request, Event $event)
    {
        $data = $request->except('_token');
        return view('event.speaker', compact('event'));
    }
}

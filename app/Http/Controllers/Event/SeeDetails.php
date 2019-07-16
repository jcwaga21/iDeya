<?php

namespace App\Http\Controllers\Event;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SeeDetails extends Controller
{
    public function __invoke(Request $request, Event $event)
    {
        return view('event.seedetails', compact('event'));
    }
}

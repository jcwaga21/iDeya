<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Event;

class ShowDetail extends Controller
{
     public function __invoke(Event $event)
    {
        return view('event.detail', compact('event'));
    }
}
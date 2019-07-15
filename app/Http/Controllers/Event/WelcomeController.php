<?php

namespace App\Http\Controllers\Event;

use App\Participant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function __invoke(Request $request, Participant $participant)
    {
        return view("event.welcome", compact("participant"));
    }
}

<?php

namespace App\Http\Controllers\Event;

use App\Event;
use App\Participant;
use App\EventParticipant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParticipantRegistrationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('');
    }
}

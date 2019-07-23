<?php

namespace App\Http\Controllers\Event;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Event;
use App\Budget;
use App\Participant;
use App\EventBudget;
use App\EventParticipant;

class ShowDetail extends Controller
{
    public function __invoke(Event $event)
    {
        $budgets = Budget::whereIn("id", EventBudget::where(
            [
                "event_id" => $event->id]
        )->pluck('budget_id'))->get();

        $participants = Participant::whereIn("id", EventParticipant::where(
            [
                "event_id" => $event->id
            ]
        )->pluck('participant_id'))->get();

        return view('event.detail', compact('event', 'participants', 'budgets'));
    }
}
